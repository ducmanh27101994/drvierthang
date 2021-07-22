<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuvantaichinh extends Model
{
    use HasFactory;

    protected $table = 'tuvantaichinh';

    public function hosobenhnhan(){
        return $this->belongsTo(Hosobenhnhan::class);
    }
}
