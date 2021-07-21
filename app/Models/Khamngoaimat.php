<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khamngoaimat extends Model
{
    use HasFactory;

    protected $table = "khamngoaimat";

    public function hosobenhnhan(){

        $this->belongsTo(Hosobenhnhan::class);

    }

}
