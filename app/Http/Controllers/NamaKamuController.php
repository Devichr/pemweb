<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaKamuController extends Controller
{
    public function infoKontak()
    {
        $nama = "Deviano Christian Widy Ananda";
        $noHp = "081322625155";
        $alamat = "Kompleks Paledang Indah Blok D no 16 Desa Bojongkunci,Kecamatan Pameungpeuk,Kabupaten Bandung, Jawa Barat, Indonesia, 40376";

        return view('kontak', compact('nama', 'noHp', 'alamat'));
    }

}
