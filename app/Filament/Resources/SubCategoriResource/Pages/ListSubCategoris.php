<?php

namespace App\Filament\Resources\SubCategoriResource\Pages;

use App\Filament\Resources\SubCategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubCategoris extends ListRecords
{
    protected static string $resource = SubCategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
