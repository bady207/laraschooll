<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $fillable = ['id','judul','deskripsi','tanggal','image'];

    protected $visable = ['id','judul','deskripsi','tanggal','image'];

}
