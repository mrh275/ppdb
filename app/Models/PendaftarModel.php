<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{

	public function getAllDataPendaftar()
	{
		return $this->db->table('biodata_pendaftar')->get()->getResultArray();
	}

	public function addBiodata($data)
	{
		$this->db->table('biodata_pendaftar')->insert($data);
	}
	public function addAyah($ayah)
	{
		$this->db->table('data_ayah')->insert($ayah);
	}
}
