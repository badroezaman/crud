<?php

class Pengguna extends CI_Controller {
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
			"title"=>'pengguna',
			"menu"=>getmenu(),
			"all"=>$this->db->get('admin')->result(),
			"aktif"=>"pengguna",
			"content"=>"pengguna/index.php",
                       
			
		);
		$this->breadcrumb->append_crumb('Pengguna', site_url('pengguna'));
		$this->load->view('admin/template',$data);
	}
      
	public function add()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Inputkan");
			redirect('Pengguna');
		}else{
			$data=array(
				"username"=>$_POST['username'],
				"password"=>md5($_POST['password']),
				"nama_lengkap"=>$_POST['nama_lengkap'],
                                "id_level"=>$_POST['level'],
			);
			$this->db->insert('admin',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Pengguna');
		}
	}
	public function edit($id){
            #$kk=getKK($id);
		$data=array(
			"title"=>'Edit Pengguna',
			"menu"=>getmenu(),
			"aktif"=>"pengguna",
			"getrow"=>$this->db->where('id_admin',$id)->get('admin')->row_array(),
			"id"=>$id,
			"content"=>"pengguna/edit.php",
		);
		#$this->breadcrumb->append_crumb('Edit Data Arsip', site_url('arsip'));
		#$this->breadcrumb->append_crumb('Data Individu KK <i>'.getnamakk($kk).'</i>', site_url('entry/detailkk/'.$kk));
		#$this->breadcrumb->append_crumb('Edit Individu <i>'.getnama($id).'</i>', site_url('entry'));
		$this->load->view('admin/template',$data);
        }

        public function update()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Edit");
			redirect('Pengguna');
		}else{
			$data=array(
				"username"=>$_POST['username'],
				"password"=>md5($_POST['password']),
				"nama_lengkap"=>$_POST['nama_lengkap'],
                                "id_level"=>$_POST['level'],
			);
			$this->db->where('id_admin', $_POST['id']);
			$this->db->update('admin',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Pengguna');
		}
	}
	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Pengguna');
		}else{
			$this->db->where('id_admin', $id);
			$this->db->delete('admin');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Pengguna');
		}
	
}
}
