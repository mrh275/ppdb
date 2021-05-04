<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{

	public function getAllDataPendaftar()
	{
		return $this->db->table('biodata_pendaftar')->get()->getResultArray();
	}
}
