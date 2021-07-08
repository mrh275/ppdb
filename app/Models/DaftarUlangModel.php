<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarUlangModel extends Model
{
    public function cekDataSeleksi($noRegis)
    {
        return $this->db->table('hasil_seleksi')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }

    public function getHasilSeleksi()
    {
        return $this->db->table('hasil_seleksi')->get()->getResultArray();
    }
}
