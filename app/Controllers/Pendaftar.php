<?php

namespace App\Controllers;


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

	public function formBiodata()
	{

		if ($this->request->isAJAX()) {
			$msg = [
				'data' => view('form/biodata'),
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan');
		}
	}

	public function formOrangtua()
	{

		if ($this->request->isAJAX()) {
			$msg = [
				'data' => view('form/orang-tua'),
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan');
		}
	}
}
