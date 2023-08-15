<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register_Request extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $table = "register_requests";

    protected static function boot(): void
    {
        parent::boot();


        /* A method that is called when the model is being created. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
        });

        /* A method that is called when the model is being updated. */
        static::updating(function ($model) {
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* A method that is called when the model is being deleted. */
        static::deleting(function ($model) {
            $model->deleted_by = auth()->check() ? auth()->user()->id : null;
        });
    }

    public function master_status()
    {
        return $this->belongsTo(Master_status::class, "status", "id");
    }

    public function getTitleAttribute()
    {
        return Master_request::select("name")->where("id", "=", 8)->first()->name;
    }
}
