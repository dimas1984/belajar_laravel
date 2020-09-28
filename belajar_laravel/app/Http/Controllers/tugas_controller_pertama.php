<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugas_controller_pertama extends Controller
{
      //
    //   $hasil=a+b;
      public function index(){
        return "halaman index ";
    }

    public function tambah(){
        $a=1;
        $b=3;
        $hasil=$a+$b;
        return "nilai dari penjumlahan a dan b adalah " .$hasil;
    }

}
