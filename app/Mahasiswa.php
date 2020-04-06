<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //buat memanggil tabel tidak sesuai dengan laravel
    protected $table = 'mahasiswa';
}
