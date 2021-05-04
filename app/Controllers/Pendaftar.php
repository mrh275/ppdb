<?php

namespace App\Controllers;


class Pendaftar extends BaseController
{

	public function dataPendaftar()
	{
		$submenu = 'data-pendaftar';

		$data = [
			'title' 		=> 'Data Pendaftar | PPDB SMA Negeri 1 Rawamerta',
			'slug'			=> 'data-pendaftar',
			'listMenu'      => $this->menuModel->getMenu(),
			'submenuSlug'   => $submenu,
			'submenuName'	=> $this->menuModel->getSubmenuBy($submenu),
			'pendaftar' => $this->pendaftarModel->getAllDataPendaftar(),
		];

		return view('front/data-pendaftar', $data);
	}

	public function tambahPendaftar()
	{
		$submenu = 'tambah-pendaftar';

		$data = [
			'title' => 'Tambah Pendaftar | PPDB SMA Negeri 1 Rawamerta',
			'slug'			=> 'data-pendaftar',
			'listMenu'      => $this->menuModel->getMenu(),
			'submenuSlug'   => $submenu,
			'submenuName'	=> $this->menuModel->getSubmenuBy($submenu),
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

	public function formPeriodik()
	{

		if ($this->request->isAJAX()) {

			$msg = [
				'data' => view('form/periodik')
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function formUpload()
	{

		if ($this->request->isAJAX()) {
			$msg = [
				'data' => view('form/upload')
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function previewCetak()
	{


		if ($this->request->isAJAX()) {
			$msg = [
				'data' => view('form/cetak')
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function addBiodata()
	{

		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([
				'nama'    => [
					'rules' => 'required[nama]',
					'errors'    => [
						'required'  => 'Nama Lengkap wajib diisi!'
					]
				],
				'nisn'    => [
					'rules' => 'required[nisn]|numeric|min_length[10]|max_length[10]',
					'errors'    => [
						'required'  => 'Nomor Induk Siswa Nasional (NISN) wajib diisi!',
						'numeric'   => 'Hanya boleh memasukan angka.',
						'min_length' => 'Jumlah angka boleh yang dimasukan hanya 10 karakter.',
						'max_length' => 'Jumlah angka boleh yang dimasukan hanya 10 karakter.'
					]
				],
				'nik'    => [
					'rules' => 'required[nik]|numeric|min_length[16]|max_length[16]',
					'errors'    => [
						'required'  => 'Nomor Induk Kependudukan (NIK) wajib diisi!',
						'numeric'   => 'Hanya boleh memasukan angka.',
						'min_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.',
						'max_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.'
					]
				],
				'kk'    => [
					'rules' => 'required[kk]|numeric|min_length[16]|max_length[16]',
					'errors'    => [
						'required'  => 'Nomor Kartu Keluarga wajib diisi!',
						'numeric'   => 'Hanya boleh memasukan angka.',
						'min_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.',
						'max_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.'
					]
				],
				'anak_ke_berapa'    => [
					'rules' => 'required[anak_ke_berapa]|numeric|max_length[1]',
					'errors'    => [
						'required'  => 'Silahkan isi terlebih dahulu anak keberapa anda!?',
						'numeric'   => 'Harap hanya masukan angka saja.',
						'max_length' => 'Cukup masukan satu digit angka saja.'
					]
				],
				'tempatlahir'    => [
					'rules' => 'required[tempatlahir]',
					'errors'    => [
						'required'  => 'Tempat lahir wajib diisi!',
					]
				],
				'tgl_lahir'    => [
					'rules' => 'required[tgl_lahir]|valid_date',
					'errors'    => [
						'required'  => 'Tanggal lahir wajib diisi!',
					]
				],
				'alamat'    => [
					'rules' => 'required[alamat]',
					'errors'    => [
						'required'  => 'Alamat wajib diisi!',
					]
				],
				'dusun'    => [
					'rules' => 'required[dusun]',
					'errors'    => [
						'required'  => 'Nama Dusun/Kampung wajib diisi!',
					]
				],
				'rt'    => [
					'rules' => 'required[rt]|numeric|max_length[3]',
					'errors'    => [
						'required'  => 'RT wajib diisi!',
						'numeric'   => 'Hanya bisa memasukan angka saja.',
						'max_length' => 'Maksimal angka yang dimasukan hanya 3 digit.'
					]
				],
				'rw'    => [
					'rules' => 'required[rw]|numeric|max_length[3]',
					'errors'    => [
						'required'  => 'RW wajib diisi!',
						'numeric'   => 'Hanya bisa memasukan angka saja.',
						'max_length' => 'Maksimal angka yang dimasukan hanya 3 digit.'
					]
				],
				'desa'    => [
					'rules' => 'required[desa]',
					'errors'    => [
						'required'  => 'Desa/Kelurahan wajib diisi!',
					]
				],
				'kecamatan'    => [
					'rules' => 'required[kecamatan]',
					'errors'    => [
						'required'  => 'Kecamatan wajib diisi!',
					]
				],
				'pos'    => [
					'rules' => 'required[pos]|numeric|max_length[5]',
					'errors'    => [
						'required'  => 'Kode POS wajib diisi!',
						'numeric'   => 'Hanya bisa memasukan angka saja.',
						'max_length' => 'Maksimal angka yang dimasukan hanya 5 digit.'
					]
				],
				'kota'	=> [
					'rules'	=> 'required[kota]',
					'errors'	=> [
						'required'	=> 'Kabupaten/Kota wajib diisi!',
					]
				],
			])) {
				$msg = [
					'error' => [
						'nama'          => $validation->getError('nama'),
						'nisn'          => $validation->getError('nisn'),
						'asal_sekolah'  => $validation->getError('asal_sekolah'),
						'nik'           => $validation->getError('nik'),
						'noKK'          => $validation->getError('kk'),
						'anakKeBerapa'  => $validation->getError('anak_ke_berapa'),
						'tempatlahir'   => $validation->getError('tempatlahir'),
						'tgl_lahir'     => $validation->getError('tgl_lahir'),
						'akte'          => $validation->getError('no_akte'),
						'alamat'        => $validation->getError('alamat'),
						'dusun'         => $validation->getError('dusun'),
						'rt'            => $validation->getError('rt'),
						'rw'            => $validation->getError('rw'),
						'desa'          => $validation->getError('desa'),
						'kecamatan'     => $validation->getError('kecamatan'),
						'pos'           => $validation->getError('pos'),
						'kota'          => $validation->getError('kota'),
					],
				];

				echo json_encode($msg);
			} else {
				$data = [
					'no_daftar'         => $this->request->getVar('no_regis'),
					'nama'              => $this->request->getVar('nama'),
					'jenis_kelamin'     => $this->request->getVar('jk'),
					'nisn'              => $this->request->getVar('nisn'),
					'asal_sekolah'      => $this->request->getVar('asal_sekolah'),
					'nik'               => $this->request->getVar('nik'),
					'no_kk'             => $this->request->getVar('kk'),
					'anak_ke_berapa'    => $this->request->getVar('anak_ke_berapa'),
					'tempat_lahir'      => $this->request->getVar('tempatlahir'),
					'tanggal_lahir'     => $this->request->getVar('tgl_lahir'),
					'no_akte'           => $this->request->getVar('no_akte'),
					'agama'             => $this->request->getVar('agama'),
					'alamat'            => $this->request->getVar('alamat'),
					'rt'                => $this->request->getVar('rt'),
					'rw'                => $this->request->getVar('rw'),
					'dusun'             => $this->request->getVar('dusun'),
					'desa'              => $this->request->getVar('desa'),
					'kecamatan'         => $this->request->getVar('kecamatan'),
					'pos'               => $this->request->getVar('pos'),
					'kota'              => $this->request->getVar('kota'),
					'tempat_tinggal'    => $this->request->getVar('tinggal'),
					'transportasi'      => $this->request->getVar('transportasi'),
					'created_at'        => date('Y-m-d H:i:s')
				];

				$sesi = [
					'no_daftar'   => $this->request->getVar('no_regis'),
				];

				session()->set($sesi);

				$this->pendaftarModel->addBiodata($data);

				$msg = [
					'sukses' => 'Data berhasil ditambahkan',
				];

				echo json_encode($msg);
			}
		}
	}
}
