<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftar extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('pagination');
		$this->load->model('m_models');
		$this->load->library('email');
	}

	public function pendaftar(){
		$this->load->view('pendaftar/menu_pendaftar');
		$this->load->view('themes/header');
		$this->load->view('themes/footloader');
	}

	public function beranda(){
		$this->load->view('pendaftar/menu_pendaftar');
		$this->load->view('themes/header');
		$this->load->view('themes/footloader');
	}

	public function update_pendaftar(){
		$this->load->view('pendaftar/menu_pendaftar');
		$this->load->view('themes/header');
		$nisn=$this->session->userdata['nisn'];	
		$no_daftar=$this->session->userdata['username'];
		$data['d_siswa'] = $this->m_models->getwhere("*", "calon_siswa", "no_daftar", $no_daftar, "nama_lengkap", "asc");

		$data['provinsi'] = $this->m_models->getTabelOrder("*", "provinsi", "nama", "asc");
		$data['kabupaten'] = $this->m_models->getTabelOrder("*", "kabupaten", "nama", "asc");
		$data['kecamatan'] = $this->m_models->getTabelOrder("*", "kecamatan", "nama", "asc");
		$data['kelurahan'] = $this->m_models->getTabelOrder("*", "kelurahan", "nama", "asc");
		$this->load->view('pendaftar/update_pendaftar',$data);
		$this->load->view('themes/footloader');
	}
	
	public function data_pendaftar(){
		$this->load->view('pendaftar/menu_pendaftar');
		$this->load->view('themes/header');
		$username=$this->session->userdata['username'];
		$data['calon_siswa'] = $this->m_models->getwhere("*", "calon_siswa", "no_daftar", $no_daftar, "nama_lengkap", "asc");
		foreach ($data['calon_siswa'] as $key => $value) {
			# code...
		}
		$data['kode_pendaftaran'] = $this->m_models->getwhere("*", "kode_pendaftaran", "kode", $kode, "jenjang_am", "asc");
		$this->load->view('pendaftar/data_pendaftar');
		$this->load->view('themes/footloader');
	}
	
	public function simpan_update_pendaftar(){
		$this->load->view('pendaftar/menu_pendaftar');
		$this->load->view('themes/header');
		$no_daftar = strtoupper(addslashes($this->input->post('no_daftar')));
		$ukuran_baju = strtoupper(addslashes($this->input->post('ukuran_baju')));
		$nisn = strtoupper(addslashes($this->input->post('nisn')));
		$nama_lengkap = strtoupper(addslashes($this->input->post('nama_lengkap')));
		$jk = strtoupper(addslashes($this->input->post('jk')));
		$tempat_lahir = strtoupper(addslashes($this->input->post('tempat_lahir')));
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$prov = $this->input->post('prov');
		$kab = $this->input->post('kab');
		$kec = $this->input->post('kec');
		$kel = $this->input->post('kel');
		$alamat = strtoupper(addslashes($this->input->post('alamat')));
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$telp = $this->input->post('telp');
		$email = strtolower(addslashes($this->input->post('email')));
		$jenjang_am = $this->input->post('jenjang_am');
		$sumber_info = $this->input->post('sumber_info');
		$warga_negara = $this->input->post('warga_negara');
		$agama = $this->input->post('agama');
		$gol_darah = $this->input->post('gol_darah');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$berat_badan = $this->input->post('berat_badan');
		$bahasa = $this->input->post('bahasa');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		$anakke = $this->input->post('anakke');
		$sdr_kandung = $this->input->post('sdr_kandung');
		$sdr_tiri = $this->input->post('sdr_tiri');
		$sdr_angkat = $this->input->post('sdr_angkat');
		$nama_ayah = strtoupper(addslashes($this->input->post('nama_ayah')));
		$tempat_lahir_ayah = $this->input->post('tempat_lahir_ayah');
		$tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
		$agama_ayah = $this->input->post('agama_ayah');
		$telp_ayah = $this->input->post('telp_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$penghasilan_ayah = $this->input->post('penghasilan_ayah');
		$nama_ibu = strtoupper(addslashes($this->input->post('nama_ibu')));
		$tempat_lahir_ibu = $this->input->post('tempat_lahir_ibu');
		$tanggal_lahir_ibu = $this->input->post('tanggal_lahir_ibu');
		$agama_ibu = $this->input->post('agama_ibu');
		$telp_ibu = $this->input->post('telp_ibu');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$penghasilan_ibu = $this->input->post('penghasilan_ibu');
		$hariini=date("Y-m-d");
		if (($no_daftar != "") && ($ukuran_baju != "")){
			$arrwhere=array('nama_lengkap' =>$nama_lengkap, 'jk' => $jk, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'agama' => $agama, 'warga_negara' => $warga_negara, 'email' => $email, 'bahasa' => $bahasa, 'gol_darah' => $gol_darah, 'tinggi' => $tinggi_badan, 'berat_badan' => $berat_badan, 'rt' => $rt, 'rw' => $rw, 'alamat' => $alamat, 'desa' => $kel, 'kec' => $kec, 'kab' => $kab, 'prov' => $prov, 'anakke' => $anakke, 'sdr_kandung' => $sdr_kandung, 'sdr_tiri' => $sdr_tiri, 'sdr_angkat' => $sdr_angkat, 'telepon' => $telp, 'ukuran_baju' => $ukuran_baju, 'riwayat_penyakit' => $riwayat_penyakit, 'nama_ayah' => $nama_ayah, 'tmp_lahir_ayah' => $tempat_lahir_ayah, 'tgl_lahir_ayah' => $tanggal_lahir_ayah, 'agama_ayah' => $agama_ayah, 'telp_ayah' => $telp_ayah, 'pekerjaan_ayah' => $pekerjaan_ayah, 'penghasilan_ayah' => $penghasilan_ayah, 'nama_ibu' => $nama_ibu, 'tmp_lahir_ibu' => $tempat_lahir_ibu, 'tgl_lahir_ibu' => $tanggal_lahir_ibu, 'agama_ibu' => $agama_ibu, 'telp_ibu' => $telp_ibu, 'pekerjaan_ibu' => $pekerjaan_ibu, 'penghasilan_ibu' => $penghasilan_ibu, 'nis_saudara' => "", 'tgl_update' => $hariini);
			$data['update_data'] = $this->m_models->update_data($no_daftar, "no_daftar", $arrwhere, "calon_siswa");
			redirect('pendaftar/data_pendaftar');

			for ($j=1; $j<=5; $j++){
				$jenis_prestasi = $this->input->post('jenis_prestasi'.$j); 
				$tingkat_prestasi = $this->input->post('tingkat_prestasi'.$j);
				$nama_prestasi = $this->input->post('nama_prestasi'.$j);
				$tahun_prestasi = $this->input->post('tahun_prestasi'.$j);
				$peringkat_prestasi = $this->input->post('peringkat_prestasi'.$j);

				$arrwhere=array('no_daftar' =>$no_daftar, 'nisn' => $nisn, 'jenis_prestasi' => $jenis_prestasi, 'tingkat_prestasi' => $tingkat_prestasi, 'nama_prestasi' => $nama_prestasi, 'tahun_prestasi' => $tahun_prestasi, 'peringkat' => $peringkat_prestasi);
				$data['prestasi'] = $this->m_models->save_data($arrwhere, "prestasi_siswa_pendaftar");
			}



		} else {
			$this->load->view('pendaftar/update_pendaftar');
		}
		$this->load->view('themes/footloader');
	}

		

}

?>