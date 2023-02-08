<?php

namespace App\Filament\Resources\CommitteeResource\Pages;

use App\Filament\Resources\CommitteeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCommittee extends CreateRecord
{
    protected static string $resource = CommitteeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
