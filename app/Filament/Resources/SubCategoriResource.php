<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubCategoriResource\Pages;
use App\Filament\Resources\SubCategoriResource\RelationManagers;
use App\Models\SubCategori;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubCategoriResource extends Resource
{
    protected static ?string $model = SubCategori::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Product & Category';
    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSubCategoris::route('/'),
            'create' => Pages\CreateSubCategori::route('/create'),
            'edit' => Pages\EditSubCategori::route('/{record}/edit'),
        ];
    }
}
