<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'startH',
        'duration',
        'session_id'
    ];

    public function sesses()
    {
        return $this->belongsTo(Sess::class);
    }
}
