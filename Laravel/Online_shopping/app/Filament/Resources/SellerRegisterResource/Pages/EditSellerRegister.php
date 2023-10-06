<?php

namespace App\Filament\Resources\SellerRegisterResource\Pages;

use App\Filament\Resources\SellerRegisterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSellerRegister extends EditRecord
{
    protected static string $resource = SellerRegisterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
