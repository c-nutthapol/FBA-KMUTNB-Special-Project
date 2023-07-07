<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "user_project";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function project()
    {
        return $this->hasOne(Project::class, "id" ,'project_id');
    }

}
