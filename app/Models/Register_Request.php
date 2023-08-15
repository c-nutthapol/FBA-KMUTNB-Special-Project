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

    public function user()
    {
        return $this->belongsTo(User::class, "created_by", "id");
    }

    protected function getStatusRequestForTableAttribute()
    {
        $text = "";
        $color = "";
        if($this->status == 22){
            $color = "slate";
            $text = "รออนุมัติ";
        }else if($this->status == 23){
            $color = "violet";
            $text = "รออนุมัติ";
        }else if($this->status == 24){
            $color = "rose";
            $text = "ไม่อนุมัติ (ที่ปรึกษา)";
        }else if($this->status == 25){
            $color = "slate";
            $text = "รออนุมัติ";
        }else if($this->status == 26){
            $color = "violet";
            $text = "อนุมัติ (แอดมิน)";
        }else if($this->status == 27){
            $color = "rose";
            $text = "ไม่อนุมัติ (แอดมิน)";
        }
        $fullText = '<span class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-'.$color.'-400 align-baseline font-bold uppercase leading-none text-white">'.$text.'</span>';
        return $fullText;
    }
}
