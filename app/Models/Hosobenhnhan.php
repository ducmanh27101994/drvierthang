<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosobenhnhan extends Model
{
    use HasFactory;

    protected $table = 'hosobenhnhan';

    public function khamngoaimat()
    {
        return $this->hasMany(Tuvantaichinh::class);
    }

    public function albums(){
        return $this->belongsTo(Albums::class);
    }
}
