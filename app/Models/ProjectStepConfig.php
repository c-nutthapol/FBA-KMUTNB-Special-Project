<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStepConfig extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'phase_1_start_date' => 'date',
        'phase_1_end_date' => 'date',
        'phase_2_start_date' => 'date',
        'phase_2_end_date' => 'date',
        'phase_3_start_date' => 'date',
        'phase_3_end_date' => 'date',
        'phase_4_start_date' => 'date',
        'phase_4_end_date' => 'date',
        'phase_5_start_date' => 'date',
        'phase_5_end_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function edu_term()
    {
        return $this->belongsTo(EduTerm::class, 'id');
    }
}
