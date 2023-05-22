<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $with = ['user'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    // ดึงข้อมูลเวลา ของ user ที่เป็น Admin
    public static function getAdminLog()
    {
        return Log::query()
            ->whereHas('user', function (Builder $query) {
                $query->whereIn('role', ['3']);
            })
            ->latest('id')
            ->limit(1000)
            ->get();
    }

    // ดึงข้อมูลเวลา ของ user ที่เป็น Teacher
    public static function getUserLog()
    {
        return Log::query()
            ->whereHas('user', function (Builder $query) {
                $query->whereIn('role', ['2']);
            })
            ->latest('id')
            ->limit(1000)
            ->get();
    }

    // ดึงข้อมูลเวลา ของ user ที่เป็น Student
    public static function getAnonymousLog()
    {
        return Log::query()
        ->whereHas('user', function (Builder $query) {
            $query->whereIn('role', ['1']);
        })
        ->latest('id')
        ->limit(1000)
        ->get();
    }
}
