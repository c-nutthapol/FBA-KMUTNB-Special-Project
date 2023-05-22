<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'documents';

    protected $primaryKey = 'id';

    protected $guarded = [];

    // Auto Insert ข้อมูลคนสร้างและแก้ไข
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = auth()->id();
        });
        static::updating(function ($model) {
            $model->updated_by = auth()->id();
        });
        static::saving(function ($model) {
            $model->updated_by = auth()->id();
        });
        static::deleting(function ($model) {
            $model->deleted_by = auth()->id();
            $model->save();
        });
    }

    public function user(){
        return $this->belongsTo(User::class,'updated_by')->withDefault();
    }

    public function scopeActive($query) {
        return $query->whereStatus('active');
    }

    public function scopePin($query) {
        return $query->wherePin('active');
    }
}
