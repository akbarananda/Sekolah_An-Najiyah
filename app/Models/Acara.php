<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acara extends Model
{
    protected $fillable = [
        'image',
        'judul',
        'deskripsi',
    ];
    use HasFactory;
}
