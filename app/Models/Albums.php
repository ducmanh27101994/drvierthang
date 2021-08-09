<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;

    protected $table = 'albums';

    public function hosobenhnhan(){
        return $this->hasMany(Hosobenhnhan::class);
    }

    public function photos(){
        return $this->belongsTo(Photos::class);
    }
}
