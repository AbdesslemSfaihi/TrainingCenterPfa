<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'trainingcourse_id'
    ];

    public function trainingcourse()
    {
        return $this->belongsTo(TrainingCourse::class, 'trainingcourse_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(
            Module::class,
            'subject_module',
            'subject_id',
            'module_id'
        );
    }
}
