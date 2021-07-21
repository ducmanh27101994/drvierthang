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
        return $this->hasOne(Khamngoaimat::class,"hosobenhnhan_id");
    }
}
