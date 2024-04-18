<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birthdate',
        'email',
        'password',
        'phone',
        'image'
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function sesses()
    {
        return $this->belongsToMany(Sess::class);
    }
}
