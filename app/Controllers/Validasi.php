<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Validasi extends BaseController
{
	public function pendaftar()
	{
		$submenu = 'validasi-pendaftar';
		$data = [
			'title' => 'Validasi Pendaftar | PPDB SMA Negeri 1 Rawamerta',
			'slug'			=> 'validasi-pendaftar',
			'listMenu'      => $this->menuModel->getMenu(),
			'submenuSlug'   => $submenu,
			'submenuName'	=> $this->menuModel->getSubmenuBy($submenu),
		];

		return view('front/validasi-pendaftar', $data);
	}
}
