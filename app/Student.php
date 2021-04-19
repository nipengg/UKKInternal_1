<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['no_reg', 'nama', 'jk', 'alamat', 'agama','asal_sekolah', 'jurusan', 'created_at', 'updated_at'];
    protected $primaryKey = "no_reg";
}
