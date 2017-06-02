<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use App\Penduduk;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'status', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getData(){
        // user -> no ktp this.noKtp
        // pendukuk -> no ktp
        // data = select * from penduduk where id = this.noKTP
        // return data

        // auth::getCurrentUser()->getData // penduuduk;
        $data = DB::table('penduduk')->where('noKtp','=',$this->noKtp)->first();
        return $data;
    }

    public function getAktor(){
        return "USER";
    }
}
