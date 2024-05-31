<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industri extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_industri','alamat','tahun_kerja_sama','id_jurusan'];


    protected $visable = ['id','nama_industri','alamat','tahun_kerja_sama','id_jurusan'];

    
    public function jurusan(){
        return $this->belongsTo(jurusan::class,'id_jurusan');
    }
}
