<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		$data = [
			'title' 	=> 'Portal Login | PPDB SMA Negeri 1 Rawamerta',
		];

		return view('front/login', $data);
	}
}
