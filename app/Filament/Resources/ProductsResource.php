<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Categori;
use App\Models\Product;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductsResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Product & Category';
    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('category_id')->options(Categori::all()->pluck('name','id'))->required()->native(false)->columnSpanFull(),
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(function (Set $set, $state) {
                    $set('slug', Str::slug($state));
                }),
            Forms\Components\TextInput::make('slug')
                ->maxLength(255),
            Forms\Components\TextInput::make('price')
                ->required()
                ->numeric()
                ->default(0)
                ->prefix('Rp')
                ->helperText('Isi dengan 0 jika harga tidak ingin di tampilkan'),
            Forms\Components\RichEditor::make('desc')
            ->required()
            ->columnSpanFull(), 
            Forms\Components\FileUpload::make('image'),
            Forms\Components\Toggle::make('active')
                ->required(),
            Forms\Components\Toggle::make('recomended')->label('is Recommended?')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('price')
                ->money()
                ->sortable(),
            Tables\Columns\IconColumn::make('active')
                ->boolean(),
            Tables\Columns\IconColumn::make('recomended')->boolean()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'view' => Pages\ViewProducts::route('/{record}'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
