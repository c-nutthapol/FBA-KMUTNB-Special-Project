<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    // Auto Insert ข้อมูลคนสร้าง

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = auth()->id();
            $model->created_at = Carbon::now();
        });
    }
}
