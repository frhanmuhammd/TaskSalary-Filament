<?php

namespace App\Filament\Resources\ProjectTeamResource\Pages;

use App\Filament\Resources\ProjectTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectTeam extends CreateRecord
{
    protected static string $resource = ProjectTeamResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
