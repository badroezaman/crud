<?php

class Pegawai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$config['tag_open'] = '<ul class="breadcrumb">';
		$config['tag_close'] = '</ul>';
		$config['li_open'] = '<li>';
		$config['li_close'] = '</li>';
		$config['divider'] = '<span class="divider"> » </span>';
		$this->breadcrumb->initialize($config);
		no_access();
		#levelsuper();
	}

	public function index()
	{
		$data = array(
			"title" => 'Pegawai',
			"menu" => getmenu(),
			"all" => $this->db->get('pegawai')->result(),
			"aktif" => "pegawai",
			"content" => "pegawai/index.php",
		);
		$this->breadcrumb->append_crumb('Pegawai', site_url('pegawai'));
		$this->load->view('admin/template', $data);
	}

	public function add_datadiri()
	{
		// $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$data = array(
			"title" => "Tambah Pegawai",
			"menu" => getmenu(),
			"aktif" => "pegawai",
			"content" => "pegawai/add.php",
			"form" => "1"
		);
		$this->breadcrumb->append_crumb('Tambah Pegawai', site_url('pegawai'));
		$this->load->view('admin/template', $data);
	}

	public function add_pekerjaan()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('hobi[]', 'Hobi', 'required');
		$this->form_validation->set_rules('hobis', 'Hobi', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			if ($_POST) {
				$checkbox = $this->input->post('hobi');
				$hobi = implode(", ", $checkbox);
				$hobis = $hobi . ", " . $this->input->post('hobis');
			}
			$data = array(
				"title" => "Tambah Pegawai",
				"menu" => getmenu(),
				"aktif" => "pegawai",
				"content" => "pegawai/add.php",
				"form" => "2",
				"nama2" => $_POST['nama'],
				"jk2" => $_POST['j_kelamin'],
				"hobi2" => $hobis,
			);
			// return var_dump($data);
			$this->breadcrumb->append_crumb('Tambah Pegawai', site_url('pegawai'));
			$this->load->view('admin/template', $data);
		}
	}

	public function add_pendidikan()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('hobi[]', 'Hobi', 'required');
		$this->form_validation->set_rules('hobis', 'Hobi', 'required|trim');

		$this->form_validation->set_rules('pekerjaan', 'Pilih Pekerjaan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				"title" => "Tambah Pegawai",
				"menu" => getmenu(),
				"aktif" => "pegawai",
				"content" => "pegawai/add.php",
				"form" => "3",
				"nama3" => $_POST['nama2'],
				"jk3" => $_POST['jk2'],
				"hobi3" => $_POST['hobi2'],
				"pekerjaan3" => $_POST['pekerjaan'],
			);
			// return var_dump($data);
			$this->breadcrumb->append_crumb('Tambah Pegawai', site_url('pegawai'));
			$this->load->view('admin/template', $data);
		}
	}

	public function add_berkas()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('hobi[]', 'Hobi', 'required');
		$this->form_validation->set_rules('hobis', 'Hobi', 'required|trim');

		$this->form_validation->set_rules('pekerjaan', 'Pilih Pekerjaan', 'required');

		$this->form_validation->set_rules('sd', 'Sekolah', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				"title" => "Tambah Pegawai",
				"menu" => getmenu(),
				"aktif" => "pegawai",
				"content" => "pegawai/add.php",
				"form" => "4",
				"nama4" => $_POST['nama3'],
				"jk4" => $_POST['jk3'],
				"hobi4" => $_POST['hobi3'],
				"pekerjaan4" => $_POST['pekerjaan3'],
				"sd4" => $_POST['sd'],
			);
			// return var_dump($data);
			$this->breadcrumb->append_crumb('Tambah Pegawai', site_url('pegawai'));
			$this->load->view('admin/template', $data);
		}
	}

	public function add_finish()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('hobi[]', 'Hobi', 'required');
		$this->form_validation->set_rules('hobis', 'Hobi', 'required|trim');

		$this->form_validation->set_rules('pekerjaan', 'Pilih Pekerjaan', 'required');

		$this->form_validation->set_rules('sd', 'Sekolah', 'required');

		$data = array(
			"title" => "Tambah Pegawai",
			"menu" => getmenu(),
			"aktif" => "pegawai",
			"content" => "pegawai/add.php",
			"form" => "5",
			"nama5" => $_POST['nama4'],
			"pekerjaan5" => $_POST['pekerjaan4'],
			"sd5" => $_POST['sd4'],
			"file_foto5" => $_POST['file_foto'],
		);
		$this->breadcrumb->append_crumb('Tambah Pegawai', site_url('pegawai'));
		$this->load->view('admin/template', $data);
	}

	public function edit_datadiri($id)
	{
		$data = array(
			"title" => 'Edit Data Pegawai',
			"menu" => getmenu(),
			"aktif" => "pegawai",
			"getrow" => $this->db->where('id_pegawai', $id)->get('pegawai')->row_array(),
			"id" => $id,
			"content" => "pegawai/edit.php",
			"form" => "1"
		);
		// $this->db->where('id_pegawai', $_POST['id']);
		// $this->db->update('pegawai', $data);
		// $this->session->set_flashdata('sukses', "Data Berhasil Diedit");
		// redirect('Pegawai');

		$this->breadcrumb->append_crumb('Edit Pegawai', site_url('pegawai'));
		$this->load->view('admin/template', $data);
	}
	public function edit_pekerjaan($id)
	{
		$data = array(
			"title" => 'Edit Data Pegawai',
			"menu" => getmenu(),
			"aktif" => "pegawai",
			"getrow" => $this->db->where('id_pegawai', $id)->get('pegawai')->row_array(),
			"id" => $id,
			"content" => "pegawai/edit.php",
			"form" => "2"
		);
		// $this->db->where('id_pegawai', $_POST['id']);
		// $this->db->update('pegawai', $data);
		// $this->session->set_flashdata('sukses', "Data Berhasil Diedit");
		// redirect('Pegawai');

		$this->breadcrumb->append_crumb('Edit Pegawai', site_url('pegawai'));
		$this->load->view('admin/template', $data);
	}

	// public function tambah_exe()
	// {
	// 	$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
	// 	$this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required');
	// 	$this->form_validation->set_rules('hobi[]', 'Hobi', 'required');
	// 	$this->form_validation->set_rules('hobi2', 'Hobi', 'required|trim');
	// 	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
	// 	$this->form_validation->set_rules('agama', 'Agama', 'required');
	// 	$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|trim');
	// 	$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
	// 	$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
	// 	$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
	// 	$this->form_validation->set_rules('lamakerja', 'Lama Kerja', 'required');
	// 	$this->form_validation->set_rules('sd', 'SD', 'required|trim');
	// 	$this->form_validation->set_rules('st_sd', 'Status SD', 'required');
	// 	$this->form_validation->set_rules('smp', 'SMP', 'required|trim');
	// 	$this->form_validation->set_rules('st_smp', 'Status SMP', 'required');
	// 	// $this->form_validation->set_rules('smaka', 'SMAKA');
	// 	// $this->form_validation->set_rules('st_smaka', 'Status SMAKA');
	// 	// $this->form_validation->set_rules('d3', 'D3');
	// 	// $this->form_validation->set_rules('st_d3', 'Status D3');
	// 	// $this->form_validation->set_rules('s1', 'S1');
	// 	// $this->form_validation->set_rules('st_s1', 'Status S1');
	// 	// $this->form_validation->set_rules('s2', 'S2');
	// 	// $this->form_validation->set_rules('st_s2', 'Status S2');
	// 	// $this->form_validation->set_rules('S3', 'S3');
	// 	// $this->form_validation->set_rules('st_s3', 'Status S3');

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->session->set_flashdata('error', "Data Anda Gagal Di Inputkan");
	// 		redirect('Pegawai');
	// 	} else {
	// 		$this->load->library('upload');

	// 		$config_foto['upload_path'] = './upload/pegawai/foto/';
	// 		$config_foto['allowed_types'] = 'jpeg|jpg|png';
	// 		$now = date('Y-m-d-H-i-s');
	// 		$config_foto['file_name'] = $_POST['nama'] . $now;
	// 		$config_foto['overwrite'] = true;
	// 		$config_foto['remove_space'] = true;
	// 		$config_foto['max_size'] = '512';

	// 		$this->upload->initialize($config_foto);
	// 		if (!$this->upload->do_upload('file_foto')) {
	// 			$error = array('error' => $this->upload->display_errors());
	// 			print_r($error);
	// 		} else {
	// 			$foto_data = $this->upload->data();
	// 		}

	// 		$config_ijazah['upload_path'] = './upload/pegawai/ijazah/';
	// 		$config_ijazah['allowed_types'] = 'pdf|doc|docx';
	// 		$now = date('Y-m-d-H-i-s');
	// 		$config_ijazah['file_name'] = $_POST['nama'] . $now;
	// 		$config_ijazah['overwrite'] = true;
	// 		$config_ijazah['remove_space'] = true;
	// 		$config_ijazah['max_size'] = '2048';

	// 		$this->upload->initialize($config_ijazah);
	// 		if (!$this->upload->do_upload('file_ijazah')) {
	// 			$error = array('error' => $this->upload->display_errors());
	// 			print_r($error);
	// 		} else {
	// 			$ijazah_data = $this->upload->data();
	// 		}

	// 		$checkbox = $this->input->post('hobi');
	// 		$hobi = implode(", ", $checkbox);
	// 		$hobi2 = $hobi . ", " . $this->input->post('hobi2');

	// 		$data = array(
	// 			"nama" => $_POST['nama'],
	// 			"j_kelamin" => $_POST['j_kelamin'],
	// 			"tgl_lahir" => $_POST['tgl_lahir'],
	// 			"hobby" => $hobi2,
	// 			"id_agama" => $_POST['agama'],
	// 			"alamat" => $_POST['alamat'],
	// 			"no_telp" => $_POST['no_telp'],
	// 			"id_pekerjaan" => $_POST['pekerjaan'],
	// 			"jabatan" => $_POST['jabatan'],
	// 			"lama_kerja" => $_POST['lamakerja'],
	// 			"sd" => $_POST['sd'],
	// 			"sd_status" => $_POST['st_sd'],
	// 			"smp" => $_POST['smp'],
	// 			"smp_status" => $_POST['st_smp'],
	// 			"sma" => $_POST['smaka'],
	// 			"sma_status" => $_POST['st_smaka'],
	// 			"d3" => $_POST['d3'],
	// 			"d3_status" => $_POST['st_d3'],
	// 			"s1" => $_POST['s1'],
	// 			"s1_status" => $_POST['st_s1'],
	// 			"s2" => $_POST['s2'],
	// 			"s2_status" => $_POST['st_s2'],
	// 			"s3" => $_POST['s3'],
	// 			"s3_status" => $_POST['st_s3'],
	// 			"foto" => $foto_data['file_name'],
	// 			"ijazah" => $ijazah_data['file_name']
	// 		);
	// 		$this->db->insert('pegawai', $data);
	// 		$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
	// 		redirect('Pegawai');
	// 	}
	// }
}
