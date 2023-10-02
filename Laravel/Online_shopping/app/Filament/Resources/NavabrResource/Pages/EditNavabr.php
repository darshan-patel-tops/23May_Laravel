<?php

namespace App\Filament\Resources\NavabrResource\Pages;

use App\Filament\Resources\NavabrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavabr extends EditRecord
{
    protected static string $resource = NavabrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
