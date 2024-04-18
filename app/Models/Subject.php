<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function trainers()
    {
        return $this->belongsToMany(Trainer::class);
    }

    public function sesses()
    {
        return $this->belongsToMany(Sess::class);
    }
}
