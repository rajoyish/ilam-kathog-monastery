<?php

namespace App\Filament\Resources\CommitteeResource\Pages;

use App\Filament\Resources\CommitteeResource;
use Filament\Resources\Pages\EditRecord;

class EditCommittee extends EditRecord
{
    protected static string $resource = CommitteeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
