<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = ['noKtp','nama','tglLahir','jk','agama','alamat'];

    // Method Accepted
    public function getJK(){
        return $this->jk == 1 ? "Laki-laki" : "Perempuan";
    }
}
