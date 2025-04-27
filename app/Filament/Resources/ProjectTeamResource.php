<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectTeamResource\Pages;
use App\Filament\Resources\ProjectTeamResource\RelationManagers;
use App\Models\ProjectTeam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class ProjectTeamResource extends Resource
{
    protected static ?string $model = ProjectTeam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('project_id')
                ->relationship(name: 'project', titleAttribute: 'project_title')
                ->searchable()
                ->preload()
                ->required(),
                Select::make('employee_id')
                ->relationship(name: 'employee', titleAttribute: 'name')
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('hourly_rate')->required()->numeric(),
                TextInput::make('total_hours')->required()->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('project.project_title'),
                TextColumn::make('employee.name'),
                TextColumn::make('hourly_rate')->money('IDR', true),
                TextColumn::make('total_hours'),
                TextColumn::make('salary')->money('IDR', true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectTeams::route('/'),
            'create' => Pages\CreateProjectTeam::route('/create'),
            'edit' => Pages\EditProjectTeam::route('/{record}/edit'),
        ];
    }
}
