<?php

namespace App\Filament\Resources\NavabrResource\Pages;

use App\Filament\Resources\NavabrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavabrs extends ListRecords
{
    protected static string $resource = NavabrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
