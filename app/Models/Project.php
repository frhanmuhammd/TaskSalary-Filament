<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_title',
        'project_manager',
        'project_budget',
    ];

    public function projectTeams()
    {
        return $this->hasMany(ProjectTeam::class);
    }
}
