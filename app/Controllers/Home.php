<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' 	=> 'Biodata Siswa | Formulir PPDB SMAN 1 Rawamerta',
		];

		return view('ppdb/biodata', $data);
	}
}
