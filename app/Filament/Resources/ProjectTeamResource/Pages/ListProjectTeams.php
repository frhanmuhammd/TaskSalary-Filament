<?php

namespace App\Filament\Resources\ProjectTeamResource\Pages;

use App\Filament\Resources\ProjectTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectTeams extends ListRecords
{
    protected static string $resource = ProjectTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
