<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatModel;
use Session;

class RiwayatController extends Controller
{
    //fungsi yang dijalankan saat controller dipanggil
    function __construct()
    {
        $this->RiwayatModel = new RiwayatModel();
    }
    //fungsi untuk menampilkan data dari tabel database
    public function Riwayat()
    {
        //memanggil fungsi get_pengguna yang ada di model Riwayat Model
        $pengguna = $this->RiwayatModel->get_pengguna();
        //mengirim data pengguna ke view Riwayat
        return view('Riwayat',['pengguna' => $pengguna]);
    }

    public function logindata(Request $request) {
        $statLogin = $this->RiwayatModel->cek_login($request);
        if(isset($statLogin)){
            $data = $request->mail;
            $request->session()->put('user', $data);
           return view('Dashboard');
        }else{
            // return back()->withErrors(['Email atau Kata Sandi Salah!']);
            Session::flash('error', 'Email dan Password tidak sesuai!');
            return redirect('/Login');
        }
    }
    
    public function login_done() {
        // $bandara = $this->LihatDataModel->group_bandara();
        // $ft = $this->LihatDataModel->group_fromto();
        // return view('homelogin')->with('bandara', $bandara)->with('ft', $ft);
    }
    public function no_login() {
        // $bandara = $this->LihatDataModel->group_bandara();
        // $ft = $this->LihatDataModel->group_fromto();
    //     return view('home')->with('bandara', $bandara)->with('ft', $ft);
     }
    public function regis_data(Request $request) {
        if($request->pass==$request->pass2){
            $statRegis = $this->RiwayatModel->cek_emaill($request);
            if(isset($statRegis)){
                return back()->withErrors(['Email Telah Digunakan!']);
            }else{
                $user = $this->RiwayatModel->insert_user($request);
                return view('/Login');
            }
        }else{
            return back()->withErrors(['Kata sandi tidak sama!']);
        }       
    }


}

?>
