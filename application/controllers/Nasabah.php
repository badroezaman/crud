<?php

class Nasabah extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
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
			"title" => 'Nasabah',
			"menu" => getmenu(),
			"all" => $this->db->get('nasabah')->result(),
			"aktif" => "nasabah",
			"content" => "nasabah/index.php",
		);
		$this->breadcrumb->append_crumb('Nasabah', site_url('nasabah'));
		$this->load->view('admin/template', $data);
	}

	public function add()
	{
		// date_default_timezone_set('Asia/Jakarta');
		// $date=date("Y-m-d");
		// $tgl_lahir=date("Y-m-d");
		// $tgl_lahir = $_POST['tgl_lahir'];
		// $bln = substr($tgl_lahir, 0, 2);
		// $tgl = substr($tgl_lahir, 3, 2);
		// $thn = substr($tgl_lahir, 6, 4);
		// $tanggal1 = $thn . '-' . $bln . '-' . $tgl;

		$this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('j_kelamin', 'j_kelamin', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_rules('info', 'info', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', "Data Gagal Diinput");
			redirect('Nasabah');
		} else {
			$data = array(
				"no_ktp" => $_POST['no_ktp'],
				"nama" => $_POST['nama'],
				"tmpt_lahir" => $_POST['tmpt_lahir'],
				"tgl_lahir" => $_POST['tgl_lahir'],
				// "tgl_lahir" => $tanggal1,
				// "tgl_lahir" => date('Y-m-d'),
				//"tgl_lahir" => date_format(date_create($this->input->post('tanggal_mulai')), 'Y-m-d'),
				"j_kelamin" => $_POST['j_kelamin'],
				"status" => $_POST['status'],
				"info" => $_POST['info'],
				// "foto" => $_POST['foto']
				// "foto" => 'default.jpg'
			);
			// $bln = substr($tgl_lahir, 0, 2);
			// $tgl = substr($tgl_lahir, 3, 2);
			// $thn = substr($tgl_lahir, 6, 4);
			// $tanggall = $thn . '-' . $bln . '-' . $tgl;
			return var_dump($data);
			$this->db->insert('nasabah', $data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
			redirect('Nasabah');
		}
	}
}
