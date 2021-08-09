<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $table = 'photo';

    protected $fillable = [
        'image','album_id'
    ];

    public function albums(){
        return $this->hasMany(Albums::class);
    }


}
