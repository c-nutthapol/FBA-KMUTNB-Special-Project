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
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password"];

    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = bcrypt($value);
    }

    public function getFullnameThAttribute()
    {
        return $this->displayname;
    }

    public function getFullnameEnAttribute()
    {
        return $this->firstname_en . " " . $this->lastname_en;
    }

    public function role()
    {
        return $this->belongsTo(Role::class, "role_id", "id");
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, "user_project", "user_id", "project_id", "id", "id");
    }
    public function log()
    {
        return $this->hasOne(Log::class, "user_id");
    }
    public function masterDepartment()
    {
        return $this->belongsTo(Master_department::class, "department", "id");
    }

    public function roleChangeAdmin()
    {
        return $this->hasOne(RoleChangeAdmin::class, 'user_id', 'id');
    }
}
