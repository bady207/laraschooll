<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_jurusan'];

    protected $visable = ['id','nama_jurusan'];

    public function industri(){
        return $this->hasMany(industri::class);
    }
}
