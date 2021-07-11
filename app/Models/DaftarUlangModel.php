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

    public function getBiodata($noRegis)
    {
        return $this->db->table('biodata_pendaftar')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }

    public function getDataAyah($noRegis)
    {
        return $this->db->table('data_ayah')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }

    public function getDataIbu($noRegis)
    {
        return $this->db->table('data_ibu')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }

    public function getDataWali($noRegis)
    {
        return $this->db->table('data_wali')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }

    public function getDataPeriodik($noRegis)
    {
        return $this->db->table('data_periodik')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }

    public function getDataUpload($noRegis)
    {
        return $this->db->table('data_upload')->where(['no_regis' => $noRegis])->get()->getRowArray();
    }
}
