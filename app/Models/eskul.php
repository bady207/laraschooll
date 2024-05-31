<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_eskul','deksripsi','image'];
    protected $visable = ['id','nama_eskul','deksripsi','image'];

     protected $table = 'eskuls'; 

}
