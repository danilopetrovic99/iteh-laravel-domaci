<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zoo;

class Zivotinja extends Model
{
    use HasFactory;

    public function zoo()
    {
        return $this->belongsTo(Zoo::class);
    }
}
