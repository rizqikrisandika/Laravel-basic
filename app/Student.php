<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Fill yang boleh di isi pada database
    //Mass Assigment laravel
    protected $fillable = ['nama','nim','email','jurusan'];
}
