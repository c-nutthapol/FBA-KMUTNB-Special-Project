<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $listeners = ['refreshSuggestion' => '$refresh'];

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
            $model->deleted_by = auth()->check() ? auth()->user()->id : null;
            $model->save();
        });
    }

    public function master_status()
    {
        return $this->belongsTo(Master_status::class, "status", "id");
    }

    protected function getStatusRequestForTableAttribute()
    {
        $text = "";
        $color = "";
        if($this->status == 38){
            $color = "slate";
            $text = "รออนุมัติ";
        }else if($this->status == 39){
            $color = "slate";
            $text = "รออนุมัติ";
        }else if($this->status == 42){
            $color = "violet";
            $text = "อนุมัติ";
        }else if($this->status == 40 || $this->status == 43){
            $color = "rose";
            $text = "ไม่อนุมัติ";
        }
        $fullText = '<span class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-'.$color.'-400 align-baseline font-bold uppercase leading-none text-white">'.$text.'</span>';
        return $fullText;
    }

    protected function getNameRequestForTableAttribute()
    {
        $data = "";
        $query = Master_request::where("id",$this->title)->first();
        if($query){
            $data = $query->name;
        }
        return $data;
    }
}
