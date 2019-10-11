<?php

class Menu extends CI_Controller {
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
			"title"=>'menu',
			"menu"=>getmenu(),
			"all"=>$this->db->get('menu')->result(),
			"aktif"=>"menu",
			"content"=>"menu/index.php",
		);
		$this->breadcrumb->append_crumb('Menu', site_url('menu'));
		$this->load->view('admin/template',$data);
	}
      
	public function add()
	{
		$this->form_validation->set_rules('nama_menu', 'nama_menu', 'required');
		$this->form_validation->set_rules('menu_aktif', 'menu_aktif', 'required');
		$this->form_validation->set_rules('link', 'link', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');
		$this->form_validation->set_rules('submenu', 'submenu', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Inputkan");
			redirect('Menu');
		}else{
			$data=array(
				"nama_menu"=>$_POST['nama_menu'],
                                "menu_aktif"=>$_POST['menu_aktif'],
                                "link"=>$_POST['link'],
                                "icon"=>$_POST['icon'],
                                "submenu"=>$_POST['submenu'],
                                "id_level"=>$_POST['level'],
			);
			$this->db->insert('menu',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Menu');
		}
	}
	public function edit($id){
            $data=array(
			"title"=>'Edit Menu',
			"menu"=>getmenu(),
			"aktif"=>"menu",
			"getrow"=>$this->db->where('id_menu',$id)->get('menu')->row_array(),
			"id"=>$id,
			"content"=>"menu/edit.php",
		);
		#$this->breadcrumb->append_crumb('Edit Data Arsip', site_url('arsip'));
		#$this->breadcrumb->append_crumb('Data Individu KK <i>'.getnamakk($kk).'</i>', site_url('entry/detailkk/'.$kk));
		#$this->breadcrumb->append_crumb('Edit Individu <i>'.getnama($id).'</i>', site_url('entry'));
		$this->load->view('admin/template',$data);
        }

        public function update()
	{
		$this->form_validation->set_rules('nama_menu', 'nama_menu', 'required');
		$this->form_validation->set_rules('menu_aktif', 'menu_aktif', 'required');
		$this->form_validation->set_rules('link', 'link', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');
		$this->form_validation->set_rules('submenu', 'submenu', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Edit");
			redirect('Menu');
		}else{
			$data=array(
				"nama_menu"=>$_POST['nama_menu'],
                                "menu_aktif"=>$_POST['menu_aktif'],
                                "link"=>$_POST['link'],
                                "icon"=>$_POST['icon'],
                                "submenu"=>$_POST['submenu'],
                                "id_level"=>$_POST['level'],
			);
			$this->db->where('id_menu', $_POST['id']);
			$this->db->update('menu',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Menu');
		}
	}
	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Menu');
		}else{
			$this->db->where('id_menu', $id);
			$this->db->delete('menu');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Menu');
		}
	
}
}
