<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'period'
    ];


    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
