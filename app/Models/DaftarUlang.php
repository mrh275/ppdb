<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarUlang extends Model
{
    public function cekDataSeleksi($noRegis)
    {
        return $this->db->table('biodata_pendaftar')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }
}
