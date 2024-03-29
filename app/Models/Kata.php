<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kata extends Model
{
    use HasFactory;
    protected $table    = 'word';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kata', 'arti'
    ];
}
