<?php

class Level extends CI_Controller {
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
		levelsuper();
	}
	public function index()
	{
		$data=array(
			"title"=>'level',
			"menu"=>getmenu(),
			"all"=>$this->db->get('level')->result(),
			"aktif"=>"level",
			"content"=>"level/index.php",
		);
		$this->breadcrumb->append_crumb('Level', site_url('level'));
		$this->load->view('admin/template',$data);
	}
      
	public function add()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Inputkan");
			redirect('Level');
		}else{
			$data=array(
				"nama_level"=>$_POST['nama'],
			);
			$this->db->insert('level',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Level');
		}
	}
	public function edit()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Edit");
			redirect('Level');
		}else{
			$data=array(
				"nama_level"=>$_POST['nama'],
			);
			$this->db->where('id_level', $_POST['id']);
			$this->db->update('level',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Level');
		}
	}
	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Level');
		}else{
			$this->db->where('id_level', $id);
			$this->db->delete('level');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Level');
		}
	
}
}
