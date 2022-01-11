<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RiwayatModel extends Model
{
    protected $table = "ke";

    public $primaryKey = "K_ID";

    public $incrementing = false;

    public $timestamps = false;

    function get_pengguna() {
        return DB::table('pengguna')->get();
    }
    function cek_login($request) {
        if (DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->where('USER_PASSWORD', '=',$request->pass)->exists()){
            return DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->where('USER_PASSWORD', '=',$request->pass)->get();
        }
    }
    function insert_user($request){
        DB::table('pengguna')->insert([
            'USER_EMAIL' => $request->mail,
            'USER_NAME' => $request->name,
            'USER_PASSWORD' => $request->pass,
            'USER_DELETE' => '0'
        ]);
    }
    function cek_emaill($request) {
        if (DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->exists()){
            return DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->get();
        }
    }
}

?>
