<?php

namespace App\Controllers;

class DaftarUlang extends BaseController
{
    public function login()
    {
        $data = [
            'title'     => 'Daftar Ulang | PPDB SMA Negeri 1 Rawamerta',
        ];

        return view('front/daftar-ulang', $data);
    }
}
