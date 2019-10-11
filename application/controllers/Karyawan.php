<?php

class Karyawan extends CI_Controller {
	function __construct(){

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
		$data=array(
			"title"=>'karyawan',
			"menu"=>getmenu(),
			"all"=>$this->db->get('karyawan')->result(),
			"aktif"=>"karyawan",
			"content"=>"karyawan/index.php",
		);
		$this->breadcrumb->append_crumb('Karyawan', site_url('karyawan'));
		$this->load->view('admin/template',$data);
	}
      
	public function add()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Inputkan");
			redirect('Karyawan');
		}else{
			$data=array(
				"nama"=>$_POST['nama'],
				"alamat"=>$_POST['alamat'],
				"jabatan"=>$_POST['jabatan'],
			);
			$this->db->insert('karyawan',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Karyawan');
		}
	}
	public function edit()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Edit");
			redirect('Karyawan');
		}else{
			$data=array(
				"nama"=>$_POST['nama'],
                                "alamat"=>$_POST['alamat'],
                                "jabatan"=>$_POST['jabatan'],
			);
			$this->db->where('id_karyawan', $_POST['id']);
			$this->db->update('karyawan',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Karyawan');
		}
	}
	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Karyawan');
		}else{
			$this->db->where('id_karyawan', $id);
			$this->db->delete('karyawan');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Karyawan');
		}
	
}
}
