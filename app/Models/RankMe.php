<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankMe extends Model
{
    use HasFactory;

    protected $table = "rankme";

    // protected $fillable = ['id','steamid','name','score', 'deaths'];

    public $timestamps = false;
}
