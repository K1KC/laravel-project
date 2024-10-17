<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    //CRUD
    //Mass Assignment
    //2 cara deklarasi field/mengizinkan untuk di insert di db

    //Method #1 -- fillable untuk semua field yang diperbolehkan untuk di insert
    protected $fillable=['nim', 'nama', 'email', 'no_hp', 'jurusan', 'alamat'];

    //Method #2 -- guarded untuk semua field yang TIDAK diperbolehkan untuk di insert
    protected $guarded=[''];
}
