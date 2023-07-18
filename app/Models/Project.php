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
    public function files()
    {
        return $this->hasMany(File::class);
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
    public function departments()
    {
        return $this->hasOne(User::class, "id", "created_by");
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
        foreach ($this->user_project as $item) {
            if (str_contains($item->role, "student")) $data[] = $item->user->displayname;
        }
        return $data;
    }

    protected function getSelectOptionAttribute()
    {
        $status = [];
        if ($this->status == 1) {
            $status = [2, 3];
        } else if ($this->status == 2) {
            $status = [4, 5, 6];
        } else if ($this->status == 3) {
            $status = [2];
        } else if ($this->status == 6) {
            $status = [7, 8];
        } else if ($this->status == 7) {
            $status = [8, 9];
        } else if ($this->status == 8) {
            $status = [10, 11, 12];
        }else if ($this->status == 9) {
            $status = [8];
        } else if ($this->status == 11) {
            $status = [14];
        } else if ($this->status == 12) {
            $status = [10, 11];
        } else if ($this->status == 13) {
            $status = [14, 15];
        } else if ($this->status == 14) {
            $status = [16, 17, 18];
        }
        else if ($this->status == 15) {
            $status = [14];
        } else if ($this->status == 18) {
            $status = [16, 17];
        } else if ($this->status == 19) {
            $status = [20,21];
        } else if ($this->status == 21) {
            $status = [20];
        } else if ($this->status == 24) {
            $status = [25, 26];
        } else if ($this->status == 25) {
            $status = [27, 28];
        } else if ($this->status == 27) {
            $status = [29, 30, 31];
        } else if ($this->status == 29) {
            $status = [32];
        } else if ($this->status == 30) {
            $status = [32];
        } else if ($this->status == 33) {
            $status = [34, 35, 36];
        } else if ($this->status == 34 || $this->status == 35) {
            $status = [37];
        }

        $statusOption = Master_status::whereIn("id", $status)
            // where("step", $this->master_status->step)
            // ->where("role_id",auth()->user()->role_id)
            ->whereIn("step", [1, 2, 3, 4, 5])
            ->get();

        return $statusOption;
    }
}
