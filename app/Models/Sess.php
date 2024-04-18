<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sess extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'startingDate',
        'initialPrice',
        'discount',
        'priceWD',
        'trainingcourse_id'
    ];

    public function trainers()
    {
        return $this->belongsToMany(Trainer::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}
