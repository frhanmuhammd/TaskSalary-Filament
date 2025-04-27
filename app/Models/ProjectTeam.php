<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    protected $fillable = [
        'hourly_rate',
        'total_hours',
        'salary',
        'project_id',
        'employee_id',
    ];

    protected static function booted()
    {
        static::saving(function ($projectTeam) {
            $projectTeam->salary = $projectTeam->hourly_rate * $projectTeam->total_hours;
        });
    }
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
