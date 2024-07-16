<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductImagesResource\Pages;
use App\Filament\Resources\ProductImagesResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductImages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductImagesResource extends Resource
{
    protected static ?string $model = ProductImages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Product & Category';
    protected static ?int $navigationSort = 4;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')->options(Product::all()->pluck('name','id'))->required()->native(false)->columnSpanFull(),
                Forms\Components\FileUpload::make('image_url'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')
                ->searchable(),
                Tables\Columns\ImageColumn::make('image_url')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProductImages::route('/'),
            'create' => Pages\CreateProductImages::route('/create'),
            'edit' => Pages\EditProductImages::route('/{record}/edit'),
        ];
    }
}
