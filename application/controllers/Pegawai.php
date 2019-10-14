<?php

class Pegawai extends CI_Controller 
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
        $data=array(
			"title"=>'Pegawai',
			"menu"=>getmenu(),
			"all"=>$this->db->get('pegawai')->result(),
			"aktif"=>"pegawai",
			"content"=>"pegawai/index.php",
		);
		$this->breadcrumb->append_crumb('Pegawai', site_url('pegawai'));
		$this->load->view('admin/template',$data);
    }

    public function tambah()
    {
        $data = array(
            "title" => "Tambah Pegawai",
            "menu" => getmenu(),
            "all"=>$this->db->get('pegawai')->result(),
            "aktif" => "pegawai",
            "content" => "pegawai/tambah.php"
        );
        $this->breadcrumb->append_crumb('Tambah Pegawai', site_url('pegawai'));
		$this->load->view('admin/template',$data);
    }
}