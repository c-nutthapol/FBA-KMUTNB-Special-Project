<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProject extends Model
{
    use HasFactory;
    // SoftDeletes;

    protected $guarded = [];
    protected $table = "user_project";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    // protected static function boot()
    // {
    //     parent::boot();

    //     /* A method that is called when the model is being created. */
    //     static::creating(function ($model) {
    //         $model->created_by = auth()->check() ? auth()->user()->id : null;
    //         $model->updated_by = auth()->check() ? auth()->user()->id : null;
    //     });

    //     /* A method that is called when the model is being updated. */
    //     static::updating(function ($model) {
    //         $model->updated_by = auth()->check() ? auth()->user()->id : null;
    //     });

    //     /* A method that is called when the model is being deleted. */
    //     static::deleting(function ($model) {
    //         $model->deleted_by = auth()->check() ? auth()->user()->id : null;
    //         $model->save();
    //     });
    // }
}
