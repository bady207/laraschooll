<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_fasilitas','image'];
    protected $visable = ['id','nama_fasilitas','image'];    
    protected $table = 'fasilitass'; 

}

