<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendaftar extends BaseController
{
	public function dataPendaftar()
	{
		$data = [
			'title' => 'Data Pendaftar | PPDB SMA Negeri 1 Rawamerta',
		];

		return view('front/data-pendaftar', $data);
	}

	public function tambahPendaftar()
	{
		$data = [
			'title' => 'Tambah Pendaftar | PPDB SMA Negeri 1 Rawamerta',
		];

		return view('front/tambah-pendaftar', $data);
	}
}
