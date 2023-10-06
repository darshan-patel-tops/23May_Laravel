<?php

namespace App\Filament\Resources\SellerRegisterResource\Pages;

use App\Filament\Resources\SellerRegisterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSellerRegisters extends ListRecords
{
    protected static string $resource = SellerRegisterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
