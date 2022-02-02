<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drzava;
use App\Models\Zivotinja;

class Zoo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'adresa',
        'drzava_id'
    ];

    public function drzava()
    {
        return $this->belongsTo(Drzava::class);
    }

    public function zivotinje()
    {
        return $this->hasMany(Zivotinja::class);
    }
}
