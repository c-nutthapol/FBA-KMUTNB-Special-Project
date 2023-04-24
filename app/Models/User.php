<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["name", "user_code", "role_id", "password", "avatar"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password"];

    public function role()
    {
        return $this->belongsTo(Role::class, "role_id", "id");
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, "user_project", "user_id", "project_id", "id", "id");
    }
}
