<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_code',
        'project_name',
        'project_summary',
        'project_admin',
        'start_date',
        'deadline',
        'notes',
        'category_id',
        'team_id',
        'feedback',
        'manual_timelog',
        'client_view_task',
        'allow_client_notification',
        'completion_percent',
        'calculate_task_progress',
        'project_budget',
        'currency_id',
        'hours_allocated',
        'status',
        'added_by',
        'last_updated_by',
        'hash',
        'public',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_mamber', 'projects_id', 'users_id');
    }
    
    public function clients()
    {
        return $this->belongsToMany(User::class, 'project_clients', 'projects_id', 'clients_id');
    }
    
    public function project_chats()
    {
        return $this->hasMany(ProjectChat::class, 'project_id', 'id');
    }
}
