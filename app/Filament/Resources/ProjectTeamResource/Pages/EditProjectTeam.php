<?php

namespace App\Filament\Resources\ProjectTeamResource\Pages;

use App\Filament\Resources\ProjectTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectTeam extends EditRecord
{
    protected static string $resource = ProjectTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
