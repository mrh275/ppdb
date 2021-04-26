<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
	public function getMenu()
	{
		return $this->db->table('menu')->get()->getResultArray();
	}
}
