<?php

class Submenu extends CI_Controller {
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
			"title"=>'submenu',
			"menu"=>getmenu(),
			"all"=>$this->db->get('submenu')->result(),
			"aktif"=>"submenu",
			"content"=>"submenu/index.php",
                       
			
		);
		$this->breadcrumb->append_crumb('Submenu', site_url('submenu'));
		$this->load->view('admin/template',$data);
	}
      
	public function add()
	{
		$this->form_validation->set_rules('nama_submenu', 'nama_submenu', 'required');
		$this->form_validation->set_rules('submenu_aktif', 'submenu_aktif', 'required');
		$this->form_validation->set_rules('link', 'link', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');
		$this->form_validation->set_rules('menu', 'menu', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Inputkan");
			redirect('Pengguna');
		}else{
			$data=array(
				"nama_submenu"=>$_POST['nama_submenu'],
				"submenu_aktif"=>$_POST['submenu_aktif'],
				"link"=>$_POST['link'],
                                "icon"=>$_POST['icon'],
                                "id_menu"=>$_POST['menu'],
			);
			$this->db->insert('submenu',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Submenu');
		}
	}
	public function edit($id){
            #$kk=getKK($id);
		$data=array(
			"title"=>'Edit Sub Menu',
			"menu"=>getmenu(),
			"aktif"=>"submenu",
			"getrow"=>$this->db->where('id_submenu',$id)->get('submenu')->row_array(),
			"id"=>$id,
			"content"=>"submenu/edit.php",
		);
		#$this->breadcrumb->append_crumb('Edit Data Arsip', site_url('arsip'));
		#$this->breadcrumb->append_crumb('Data Individu KK <i>'.getnamakk($kk).'</i>', site_url('entry/detailkk/'.$kk));
		#$this->breadcrumb->append_crumb('Edit Individu <i>'.getnama($id).'</i>', site_url('entry'));
		$this->load->view('admin/template',$data);
        }

        public function update()
	{
		$this->form_validation->set_rules('nama_submenu', 'nama_submenu', 'required');
		$this->form_validation->set_rules('submenu_aktif', 'submenu_aktif', 'required');
		$this->form_validation->set_rules('link', 'link', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');
		$this->form_validation->set_rules('menu', 'menu', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Edit");
			redirect('Submenu');
		}else{
			$data=array(
				"nama_submenu"=>$_POST['nama_submenu'],
				"submenu_aktif"=>$_POST['submenu_aktif'],
				"link"=>$_POST['link'],
                                "icon"=>$_POST['icon'],
                                "id_menu"=>$_POST['menu'],
			);
			$this->db->where('id_submenu', $_POST['id']);
			$this->db->update('submenu',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Submenu');
		}
	}
	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Submenu');
		}else{
			$this->db->where('id_submenu', $id);
			$this->db->delete('submenu');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Submenu');
		}
	
}
}
