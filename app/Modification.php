<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{
    protected $fillable = ['user_id', 'penduduk_id', 'noKtp','nama','tglLahir','tmptLahir','jk','agama','alamat','no_telp'];

    public function getJK(){
        return $this->jk == 1 ? "Laki-laki" : "Perempuan";
    }
}
