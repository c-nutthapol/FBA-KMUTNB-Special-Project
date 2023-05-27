<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, "user_project");
    }
    public function user_project()
    {
        return $this->hasMany(UserProject::class)->with("user");
    }
    public function edu_term()
    {
        return $this->belongsTo(EduTerm::class, "edu_term_id", "id");
    }
    public function master_status()
    {
        return $this->belongsTo(Master_status::class, "status", "id");
    }
    protected static function boot()
    {
        parent::boot();

        /* A method that is called when the model is being created. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* A method that is called when the model is being updated. */
        static::updating(function ($model) {
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* A method that is called when the model is being deleted. */
        static::deleting(function ($model) {
            $model->deleted_by = auth()->check() ? auth()->user()->id : 1;
            $model->save();
        });
    }

    protected function getStudentListForTableAttribute()
    {
        $data = [];
        foreach($this->user_project as $item){
            if(str_contains($item->role, "student")) $data[] = $item->user->name;
        }
        return $data;
    }

    protected function getStatusListForTableAttribute()
    {
        // List Status Project
        // Step 1
        // - Teacher 1 2 3
        // - Admin 4 5
        // Step 2
        // - Teacher  6 7 8
        // - Admin 9 10
        // - Teacher  11 12 13
        // - Admin 14
        // Step 3
        // - Teacher 15 16 17
        // - Admin 18 19
        // - Teacher 20 21 22
        // - Admin 23
        // Step 4
        // - Teacher 24 25 26
        // - Admin 27 28
        // - Teacher 29 30 31
        // - Admin 32
        // Step 5
        // - Teacher 33 34 35 36
        // - Admin 37
        $status = [];
        if($this->status == 1){
            $status = [2, 3];
        }else if($this->status == 2){
            $status = [4, 5];
        }else if($this->status == 6){
            $status = [7, 8];
        }else if($this->status == 7){
            $status = [9, 10];
        }else if($this->status == 11){
            $status = [12, 13];
        }else if($this->status == 12){
            $status = [14];
        }else if($this->status == 15){
            $status = [16, 17];
        }else if($this->status == 16){
            $status = [18, 19];
        }else if($this->status == 20){
            $status = [21, 22];
        }else if($this->status == 21){
            $status = [23];
        }else if($this->status == 24){
            $status = [25, 26];
        }else if($this->status == 25){
            $status = [27, 28];
        }else if($this->status == 29){
            $status = [30, 31];
        }else if($this->status == 30){
            $status = [32];
        }else if($this->status == 33){
            $status = [34, 35, 36];
        }else if($this->status == 34 || $this->status == 35){
            $status = [37];
        }
        $masterStatus = Master_status::WhereIn("id",$status)->get();
        return $masterStatus;
    }
}
