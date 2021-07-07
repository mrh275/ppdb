<?php

namespace App\Controllers;

class DaftarUlang extends BaseController
{
    public function login()
    {
        $data = [
            'title'     => 'Portal Daftar Ulang | PPDB SMA Negeri 1 Rawamerta',
        ];

        return view('front/daftar-ulang', $data);
    }

    public function cekDataSeleksi()
    {

        if ($this->request->isAjax()) {
            $noRegis = $this->request->getVar('noRegis');
            $dataPeserta = $this->daftarUlang->cekDataSeleksi($noRegis);
            if ($dataPeserta != null) {
                $msg = [
                    'sukses'    => 'Data Ditemukan!',
                    'data'      => $dataPeserta
                ];
                echo json_encode($msg);
            } else {
                $msg = [
                    'error' => 'Data Tidak ditemukan'
                ];

                echo json_encode($msg);
            }
        }
    }

    public function formDaftarUlang()
    {
        $data = [
            'title'     => 'Formulir Daftar Ulang | PPDB SMA Negeri 1 Rawamerta',
        ];

        return view('front/form-daftar-ulang', $data);
    }
}
