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
	public function addIbu($ibu)
	{
		$this->db->table('data_ibu')->insert($ibu);
	}
	public function addWali($wali)
	{
		$this->db->table('data_wali')->insert($wali);
	}
	public function addPeriodik($periodik)
	{
		$this->db->table('data_periodik')->insert($periodik);
	}
	public function upload($upload)
	{
		$this->db->table('data_upload')->insert($upload);
	}
	public function hapusPendaftar($no_regis)
	{
		$this->db->table('biodata_pendaftar')->delete($no_regis);
		$this->db->table('data_ayah')->delete($no_regis);
		$this->db->table('data_ibu')->delete($no_regis);
		$this->db->table('data_periodik')->delete($no_regis);
		$this->db->table('data_upload')->delete($no_regis);
		$this->db->table('data_wali')->delete($no_regis);
	}
}
