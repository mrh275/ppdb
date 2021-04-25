<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Validasi extends BaseController
{
	public function pendaftar()
	{
		$data = [
			'title' => 'Validasi Pendaftar | PPDB SMA Negeri 1 Rawamerta',
		];

		return view('front/validasi-pendaftar', $data);
	}
}
