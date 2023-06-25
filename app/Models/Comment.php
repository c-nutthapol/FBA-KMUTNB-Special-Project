<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime'
    ];

    protected static function boot()
    {
        parent::boot();

        /* A method that is called when the model is being created. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
            $model->created_at = Carbon::now();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, "created_by", "id");
    }

    public function project()
    {
        return $this->belongsTo(Project::class, "project_id", "id");
    }
}
