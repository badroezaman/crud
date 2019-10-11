<?php

class Arsip extends CI_Controller {
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
			"title"=>'arsip',
			"menu"=>getmenu(),
			"all"=>$this->db->get('arsip')->result(),
			"aktif"=>"arsip",
			"content"=>"arsip/index.php",
                       
			
		);
		$this->breadcrumb->append_crumb('Arsip', site_url('arsip'));
		$this->load->view('admin/template',$data);
	}
      
	public function add()
	{
		$this->form_validation->set_rules('nomor', 'nomor', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('box', 'box', 'required');
		$this->form_validation->set_rules('ruang', 'ruang', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Inputkan");
			redirect('Arsip');
		}else{
			$data=array(
				"nomor_arsip"=>$_POST['nomor'],
				"keterangan"=>$_POST['keterangan'],
				"id_box"=>$_POST['box'],
                                "id_ruang"=>$_POST['ruang'],
			);
			$this->db->insert('arsip',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Arsip');
		}
	}
	public function edit($id){
            #$kk=getKK($id);
		$data=array(
			"title"=>'Edit Arsip',
			"menu"=>getmenu(),
			"aktif"=>"arsip",
			"getrow"=>$this->db->where('id_arsip',$id)->get('arsip')->row_array(),
			"id"=>$id,
			"content"=>"arsip/edit.php",
		);
		#$this->breadcrumb->append_crumb('Edit Data Arsip', site_url('arsip'));
		#$this->breadcrumb->append_crumb('Data Individu KK <i>'.getnamakk($kk).'</i>', site_url('entry/detailkk/'.$kk));
		#$this->breadcrumb->append_crumb('Edit Individu <i>'.getnama($id).'</i>', site_url('entry'));
		$this->load->view('admin/template',$data);
        }

        public function update()
	{
		$this->form_validation->set_rules('nomor', 'nomor', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('box', 'box', 'required');
		$this->form_validation->set_rules('ruang', 'ruang', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Edit");
			redirect('Arsip');
		}else{
			$data=array(
				"nomor_arsip"=>$_POST['nomor'],
				"keterangan"=>$_POST['keterangan'],
				"id_box"=>$_POST['box'],
                                "id_ruang"=>$_POST['ruang'],
			);
			$this->db->where('id_arsip', $_POST['id']);
			$this->db->update('arsip',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Arsip');
		}
	}
	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Arsip');
		}else{
			$this->db->where('id_arsip', $id);
			$this->db->delete('arsip');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Arsip');
		}
	
}
}
