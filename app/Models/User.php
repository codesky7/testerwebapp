<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\tester\TesterEarnings;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'country',
        'phone',
        'profile_pic',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function projects ()
    {
        return $this->belongsToMany(Projects::class, 'project_mamber', 'users_id', 'projects_id');
    }

    public function clientProjects ()
    {
        return $this->belongsToMany(Projects::class, 'project_clients', 'clients_id', 'projects_id');
    }
    public function chats()
    {
        return $this->belongsToMany(ProjectChat::class);
    }
    public function earnings()
    {
        return $this->hasMany(TesterEarnings::class);
    }
}
