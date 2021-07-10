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
			$data = [
				'noRegis' => session()->no_daftar
			];
			$msg = [
				'data' => view('form/orang-tua', $data),
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan');
		}
	}

	public function formPeriodik()
	{

		if ($this->request->isAJAX()) {
			$data = [
				'noRegis' => session()->no_daftar
			];

			$msg = [
				'data' => view('form/periodik', $data)
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function formUpload()
	{

		if ($this->request->isAJAX()) {
			$data = [
				'noRegis' => session()->no_daftar
			];

			$msg = [
				'data' => view('form/upload', $data)
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
					'no_regis'          => $this->request->getVar('no_regis'),
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

	public function addOrangTua()
	{

		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([
				'nama_ayah'    => [
					'rules' => 'required[nama_ayah]',
					'errors'    => [
						'required'  => 'Nama Lengkap Ayah wajib diisi!'
					]
				],
				'nik_ayah'    => [
					'rules' => 'required[nik_ayah]|numeric|min_length[16]|max_length[16]',
					'errors'    => [
						'required'  => 'Nomor Induk Kependudukan (NIK) wajib diisi!',
						'numeric'   => 'Hanya boleh memasukan angka.',
						'min_length' => 'Jumlah angka boleh yang dimasukan hanya 16 digit angka.',
						'max_length' => 'Jumlah angka boleh yang dimasukan hanya 16 digit angka.'
					]
				],
				'tahun_lahir_ayah'    => [
					'rules' => 'required[tahun_lahir_ayah]|min_length[4]|max_length[5]',
					'errors'    => [
						'required'  	=> 'Tahun lahir wajib diisi!',
						'min_length'	=> 'Masukan tahun lahir yang valid.'
					]
				],
				'pendidikan_ayah'    => [
					'rules' => 'required[pendidikan_ayah]|min_length[1]',
					'errors'    => [
						'required'  	=> 'Pendidikan Ayah wajib diisi!',
						'min_length'	=> 'Silahkan pilih dahulu Pendidikan Ayah.'
					]
				],
				'pekerjaan_ayah'    => [
					'rules' => 'required[pekerjaan_ayah]|min_length[1]',
					'errors'    => [
						'required'  	=> 'Pekerjaan Ayah wajib diisi!',
						'min_length'	=> 'Silahkan pilih dahulu Pekerjaan Ayah.'
					]
				],
				'penghasilan_ayah'    => [
					'rules' => 'required[penghasilan_ayah]|min_length[1]',
					'errors'    => [
						'required'  => 'Penghasilan Ayah wajib diisi!',
						'min_length' => 'Silahkan pilih terlebih dahulu Penghasilan Bulanan Ayah.'
					]
				],
				'nama_ibu'    => [
					'rules' => 'required[nama_ibu]',
					'errors'    => [
						'required'  => 'Nama Lengkap Ibu wajib diisi!'
					]
				],
				'nik_ibu'    => [
					'rules' => 'required[nik_ibu]|numeric|min_length[16]|max_length[16]',
					'errors'    => [
						'required'  => 'Nomor Induk Kependudukan (NIK) wajib diisi!',
						'numeric'   => 'Hanya boleh memasukan angka.',
						'min_length' => 'Jumlah angka boleh yang dimasukan hanya 16 digit angka.',
						'max_length' => 'Jumlah angka boleh yang dimasukan hanya 16 digit angka.'
					]
				],
				'tahun_lahir_ibu'    => [
					'rules' => 'required[tahun_lahir_ibu]|min_length[4]|max_length[5]',
					'errors'    => [
						'required'  	=> 'Tahun lahir wajib diisi!',
						'min_length'	=> 'Masukan tahun lahir yang valid.'
					]
				],
				'pendidikan_ibu'    => [
					'rules' => 'required[pendidikan_ibu]|min_length[1]',
					'errors'    => [
						'required'  	=> 'Pendidikan Ibu wajib diisi!',
						'min_length'	=> 'Silahkan pilih dahulu Pendidikan Ibu.'
					]
				],
				'pekerjaan_ibu'    => [
					'rules' => 'required[pekerjaan_ibu]|min_length[1]',
					'errors'    => [
						'required'  	=> 'Pekerjaan Ibu wajib diisi!',
						'min_length'	=> 'Silahkan pilih dahulu Pekerjaan Ibu.'
					]
				],
				'penghasilan_ibu'    => [
					'rules' => 'required[penghasilan_ibu]|min_length[1]',
					'errors'    => [
						'required'  => 'Penghasilan Ibu wajib diisi!',
						'min_length' => 'Silahkan pilih terlebih dahulu Penghasilan Bulanan Ibu.'
					]
				],
			])) {
				$msg = [
					'error' => [
						'namaAyah'          => $validation->getError('nama_ayah'),
						'nikAyah'           => $validation->getError('nik_ayah'),
						'tahunLahirAyah'    => $validation->getError('tahun_lahir_ayah'),
						'pendidikanAyah'    => $validation->getError('pendidikan_ayah'),
						'pekerjaanAyah'     => $validation->getError('pekerjaan_ayah'),
						'penghasilanAyah'   => $validation->getError('penghasilan_ayah'),
						'namaIbu'           => $validation->getError('nama_ibu'),
						'nikIbu'            => $validation->getError('nik_ibu'),
						'tahunLahirIbu'     => $validation->getError('tahun_lahir_ibu'),
						'pendidikanIbu'     => $validation->getError('pendidikan_ibu'),
						'pekerjaanIbu'      => $validation->getError('pekerjaan_ibu'),
						'penghasilanIbu'    => $validation->getError('penghasilan_ibu'),
					],
				];

				echo json_encode($msg);
			} else {
				$ayah = [
					'no_regis'				 => $this->request->getVar('no_regis'),
					'nama_ayah'              => $this->request->getVar('nama_ayah'),
					'nik_ayah'               => $this->request->getVar('nik_ayah'),
					'tahun_lahir_ayah'       => $this->request->getVar('tahun_lahir_ayah'),
					'pendidikan_ayah'        => $this->request->getVar('pendidikan_ayah'),
					'pekerjaan_ayah'         => $this->request->getVar('pekerjaan_ayah'),
					'penghasilan_ayah'       => $this->request->getVar('penghasilan_ayah'),
					'created_at'       		 => date('Y-m-d H:i:s')
				];

				$ibu = [
					'no_regis'				=> $this->request->getVar('no_regis'),
					'nama_ibu'              => $this->request->getVar('nama_ibu'),
					'nik_ibu'               => $this->request->getVar('nik_ibu'),
					'tahun_lahir_ibu'       => $this->request->getVar('tahun_lahir_ibu'),
					'pendidikan_ibu'        => $this->request->getVar('pendidikan_ibu'),
					'pekerjaan_ibu'         => $this->request->getVar('pekerjaan_ibu'),
					'penghasilan_ibu'       => $this->request->getVar('penghasilan_ibu'),
					'created_at'       		=> date('Y-m-d H:i:s')
				];

				$this->pendaftarModel->addAyah($ayah);
				$this->pendaftarModel->addIbu($ibu);

				if ($this->request->getVar('haveWali') == 1) {
					$wali = [
						'no_regis'				 => $this->request->getVar('no_regis'),
						'nama_wali'              => $this->request->getVar('nama_wali'),
						'nik_wali'               => $this->request->getVar('nik_wali'),
						'tahun_lahir_wali'       => $this->request->getVar('tahun_lahir_wali'),
						'pendidikan_wali'        => $this->request->getVar('pendidikan_wali'),
						'pekerjaan_wali'         => $this->request->getVar('pekerjaan_wali'),
						'penghasilan_wali'       => $this->request->getVar('penghasilan_wali'),
						'created_at'       		 => date('Y-m-d H:i:s')
					];

					$this->pendaftarModel->addWali($wali);
				}

				$msg = [
					'sukses' => 'Data berhasil ditambahkan',
				];

				echo json_encode($msg);
			}
		}
	}

	public function addPeriodik()
	{

		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([
				'asal_sekolah'  => [
					'rules' 	=> 'required[asal_sekolah]',
					'errors'    => [
						'required'  => 'Asal Sekolah (SMP/MTs) wajib diisi!'
					]
				],
				'nopes_un'		=> [
					'rules'		=> 'required[nopes_un]',
					'errors'		=> [
						'required'	=> 'Nomor Peserta UN Wajib diisi!'
					]
				],
				'no_ijazah'		=> [
					'rules'		=> 'required[no_ijazah]',
					'errors'		=> [
						'required'	=> 'Nomor Ijazah Wajib diisi!'
					]
				],
				'tinggi_badan'  => [
					'rules' 	=> 'required[tinggi_badan]|numeric|max_length[3]',
					'errors'    => [
						'required'   => 'Tinggi Badan wajib diisi!',
						'numeric'    => 'Hanya boleh memasukan angka.',
						'max_length' => 'Jumlah angka yang boleh dimasukan hanya 3 digit angka.'
					]
				],
				'berat_badan'   => [
					'rules' 	=> 'required[berat_badan]|numeric|max_length[3]',
					'errors'    => [
						'required'   => 'Berat Badan wajib diisi!',
						'numeric'    => 'Hanya boleh memasukan angka.',
						'max_length' => 'Jumlah angka yang boleh dimasukan hanya 3 digit angka.'
					]
				],
				'hobi'    		=> [
					'rules' 	=> 'required[hobi]',
					'errors'    => [
						'required'  	=> 'Hobi wajib diisi!',
					]
				],
				'cita_cita'     => [
					'rules' 	=> 'required[cita_cita]',
					'errors'    => [
						'required'  	=> 'Cita - cita wajib diisi!',
					]
				],
				'jarak_rumah'   => [
					'rules' 	=> 'required[jarak_rumah]|numeric|max_length[10]',
					'errors'    => [
						'required'   => 'Jarak Rumah wajib diisi!',
						'numeric'    => 'Hanya boleh memasukan angka.',
						'max_length' => 'Jumlah angka yang boleh dimasukan hanya 10 digit angka.'
					]
				],
				'waktu_tempuh'  => [
					'rules' 	=> 'required[waktu_tempuh]|numeric|max_length[5]',
					'errors'    => [
						'required'   => 'Waktu Tempuh wajib diisi!',
						'numeric'    => 'Hanya boleh memasukan angka.',
						'max_length' => 'Jumlah angka yang boleh dimasukan hanya 5 digit angka.'
					]
				],
			])) {
				$msg = [
					'error' => [
						'asalSekolah'	=> $validation->getError('asal_sekolah'),
						'nopesUN'		=> $validation->getError('nopes_un'),
						'noIjazah'		=> $validation->getError('no_ijazah'),
						'tinggiBadan'   => $validation->getError('tinggi_badan'),
						'beratBadan'    => $validation->getError('berat_badan'),
						'hobi'    		=> $validation->getError('hobi'),
						'citaCita'      => $validation->getError('cita_cita'),
						'jarakRumah'   	=> $validation->getError('jarak_rumah'),
						'waktuTempuh'   => $validation->getError('waktu_tempuh'),
					],
				];

				echo json_encode($msg);
			} else {
				$periodik = [
					'no_regis'		=> $this->request->getVar('no_regis'),
					'asal_sekolah'  => $this->request->getVar('asal_sekolah'),
					'nopes_un'  	=> $this->request->getVar('nopes_un'),
					'no_ijazah'  	=> $this->request->getVar('no_ijazah'),
					'no_skhun' 		=> $this->request->getVar('no_skhun'),
					'tinggi_badan'  => $this->request->getVar('tinggi_badan'),
					'berat_badan'   => $this->request->getVar('berat_badan'),
					'hobi'        	=> $this->request->getVar('hobi'),
					'cita_cita'     => $this->request->getVar('cita_cita'),
					'jarak_rumah'   => $this->request->getVar('jarak_rumah'),
					'waktu_tempuh'  => $this->request->getVar('waktu_tempuh'),
					'created_at'    => date('Y-m-d H:i:s')
				];

				$this->pendaftarModel->addPeriodik($periodik);

				$msg = [
					'sukses' => 'Data berhasil ditambahkan',
				];

				echo json_encode($msg);
			}
		}
	}

	public function upload()
	{

		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([

				'fileIjazah'  => [
					'rules' 	=> 'uploaded[fileIjazah]|max_size[fileIjazah,1024]|is_image[fileIjazah]|mime_in[fileIjazah,image/png,image/jpg,image/jpeg,image/jpeg]',
					'errors'    => [
						'uploaded'  => 'Silahkan pilih lampiran Ijazah/Surat Keterangan Lulus terlebih dahulu!',
						'max_size'	=> 'Ukuran gambar tidak boleh lebih dari 1 Mb.',
						'is_image'	=> 'File yang anda masukan, bukan gambar.',
						'mime_in'	=> 'Ekstensi gambar hanya boleh jpg atau png.'
					]
				],
				'fileSKHUN'  => [
					'rules' 	=> 'uploaded[fileSKHUN]|max_size[fileSKHUN,1024]|is_image[fileSKHUN]|mime_in[fileSKHUN,image/png,image/jpg,image/jpeg]',
					'errors'    => [
						'uploaded'  => 'Silahkan pilih lampiran SKHUN/Transkrip Nilai terlebih dahulu!',
						'max_size'	=> 'Ukuran gambar tidak boleh lebih dari 1 Mb.',
						'is_image'	=> 'File yang anda masukan, bukan gambar.',
						'mime_in'	=> 'Ekstensi gambar hanya boleh jpg atau png.'
					]
				],
				'fileKK'  => [
					'rules' 	=> 'uploaded[fileKK]|max_size[fileKK,1024]|is_image[fileKK]|mime_in[fileKK,image/png,image/jpg,image/jpeg]',
					'errors'    => [
						'uploaded'  => 'Silahkan pilih lampiran Kartu Keluarga (KK) terlebih dahulu!',
						'max_size'	=> 'Ukuran gambar tidak boleh lebih dari 1 Mb.',
						'is_image'	=> 'File yang anda masukan, bukan gambar.',
						'mime_in'	=> 'Ekstensi gambar hanya boleh jpg atau png.'
					]
				],
				'fileKIP'  => [
					'rules' 	=> 'max_size[fileKIP,1024]|is_image[fileKIP]|mime_in[fileKIP,image/png,image/jpg,image/jpeg]',
					'errors'    => [
						'max_size'	=> 'Ukuran gambar tidak boleh lebih dari 1 Mb.',
						'is_image'	=> 'File yang anda masukan, bukan gambar.',
						'mime_in'	=> 'Ekstensi gambar hanya boleh jpg atau png.'
					]
				],
				'fileKIS'  => [
					'rules' 	=> 'max_size[fileKIS,1024]|is_image[fileKIS]|mime_in[fileKIS,image/png,image/jpg,image/jpeg]',
					'errors'    => [
						'max_size'	=> 'Ukuran gambar tidak boleh lebih dar 1 Mb.',
						'is_image'	=> 'File yang anda masukan, bukan gambar.',
						'mime_in'	=> 'Ekstensi gambar hanya boleh jpg atau png.'
					]
				],
				'filePKH'  => [
					'rules' 	=> 'max_size[filePKH,1024]|is_image[filePKH]|mime_in[filePKH,image/png,image/jpg,image/jpeg]',
					'errors'    => [
						'max_size'	=> 'Ukuran gambar tidak boleh lebih dar 1 Mb.',
						'is_image'	=> 'File yang anda masukan, bukan gambar.',
						'mime_in'	=> 'Ekstensi gambar hanya boleh jpg atau png.'
					]
				],


			])) {
				$msg = [
					'error' => [
						'fileIjazah'	=> $validation->getError('fileIjazah'),
						'fileSKHUN'		=> $validation->getError('fileSKHUN'),
						'fileKK'		=> $validation->getError('fileKK'),
						'fileAkte'		=> $validation->getError('fileAkte'),
						'fileKIP'		=> $validation->getError('fileKIP'),
						'fileKIS'		=> $validation->getError('fileKIS'),
						'filePKH'		=> $validation->getError('filePKH'),
					],
				];

				echo json_encode($msg);
			} else {
				$rawUpload = [
					'fileIjazah'	=> $this->request->getFile('fileIjazah'),
					'fileSKHUN'		=> $this->request->getFile('fileSKHUN'),
					'fileKK'		=> $this->request->getFile('fileKK'),
					'fileAkte'		=> $this->request->getFile('fileAkte'),
					'fileKIP'		=> $this->request->getFile('fileKIP'),
					'fileKIS'		=> $this->request->getFile('fileKIS'),
					'filePKH'		=> $this->request->getFile('filePKH'),
				];

				$ext = [
					'ijazah'	=> $rawUpload['fileIjazah']->getExtension(),
					'skhun'		=> $rawUpload['fileSKHUN']->getExtension(),
					'kk'		=> $rawUpload['fileKK']->getExtension(),
					'akte'		=> $rawUpload['fileAkte']->getExtension(),
					'kip'		=> $rawUpload['fileKIP']->getExtension(),
					'kis'		=> $rawUpload['fileKIS']->getExtension(),
					'pkh'		=> $rawUpload['filePKH']->getExtension(),
				];

				$namaBaru = $this->request->getVar('no_regis');

				if ($rawUpload['fileIjazah']->getError() == 4) {
					$final['ijazah'] = 'default.jpg';
				} else {
					$final['ijazah'] = $namaBaru . '-ijazah.' . $ext['ijazah'];
					$rawUpload['fileIjazah']->move('asset/img/ijazah', $final['ijazah']);
				}
				if ($rawUpload['fileSKHUN']->getError() == 4) {
					$final['skhun'] = 'default.jpg';
				} else {
					$final['skhun'] = $namaBaru . '-skhun.' . $ext['skhun'];
					$rawUpload['fileSKHUN']->move('asset/img/skhun', $final['skhun']);
				}
				if ($rawUpload['fileKK']->getError() == 4) {
					$final['kk'] = 'default.jpg';
				} else {
					$final['kk'] = $namaBaru . '-kk.' . $ext['kk'];
					$rawUpload['fileKK']->move('asset/img/kk', $final['kk']);
				}
				if ($rawUpload['fileAkte']->getError() == 4) {
					$final['akte'] = 'default.jpg';
				} else {
					$final['akte'] = $namaBaru . '-akte.' . $ext['akte'];
					$rawUpload['fileAkte']->move('asset/img/akte', $final['akte']);
				}
				if ($rawUpload['fileKIP']->getError() == 4) {
					$final['kip'] = 'default.jpg';
				} else {
					$final['kip'] = $namaBaru . '-kip.' . $ext['kip'];
					$rawUpload['fileKIP']->move('asset/img/kip', $final['kip']);
				}
				if ($rawUpload['fileKIS']->getError() == 4) {
					$final['kis'] = 'default.jpg';
				} else {
					$final['kis'] = $namaBaru . '-kis.' . $ext['kis'];
					$rawUpload['fileKIS']->move('asset/img/kis', $final['kis']);
				}
				if ($rawUpload['filePKH']->getError() == 4) {
					$final['pkh'] = 'default.jpg';
				} else {
					$final['pkh'] = $namaBaru . '-pkh.' . $ext['pkh'];
					$rawUpload['filePKH']->move('asset/img/pkh', $final['pkh']);
				}

				$upload = [
					'no_regis'		=> $this->request->getVar('no_regis'),
					'file_ijazah'	=> $final['ijazah'],
					'file_skhun'	=> $final['skhun'],
					'file_kk'		=> $final['kk'],
					'file_akte'		=> $final['akte'],
					'kip'			=> $this->request->getVar('kip'),
					'file_kip'		=> $final['kip'],
					'kis'			=> $this->request->getVar('kis'),
					'file_kis'		=> $final['kis'],
					'kks'			=> $this->request->getVar('pkh'),
					'file_kks'		=> $final['pkh'],
					'created_at'    => date('Y-m-d H:i:s')
				];

				$this->pendaftarModel->upload($upload);

				$msg = [
					'sukses' => 'Data berhasil ditambahkan',
				];

				echo json_encode($msg);
			}
		}
	}

	public function hapusPendaftar()
	{
		if ($this->request->isAjax()) {

			$no_regis = [
				'no_regis' => $this->request->getVar('no_regis'),
			];
			$this->pendaftarModel->hapusPendaftar($no_regis);

			$msg = [
				'sukses' => 'Data berhasil dihapus'
			];

			echo json_encode($msg);
		} else {
		}
	}
}
