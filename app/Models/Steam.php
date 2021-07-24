<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steam extends Model
{
    use HasFactory;
    protected $table = 'steamusers';

    protected $fillable = [
        'steamid',
        'username',
        'avatar',
    ];
}
