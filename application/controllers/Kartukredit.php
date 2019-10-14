<?php

class Kartukredit extends CI_Controller
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
            "title" => 'Kartu Kredit',
            "menu" => getmenu(),
            "all" => $this->db->get('kartukredit')->result(),
            "aktif" => "Kartukredit",
            "content" => "kartukredit/index.php",
        );
        $this->breadcrumb->append_crumb('Kartu Kredit', site_url('kartukredit'));
        $this->load->view('admin/template', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('jns_kartu', 'Jenis Kartu', 'required');
        $this->form_validation->set_rules('info', 'Info', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Inputkan");
            redirect('Kartukredit');
        } else {
            $data = array(
                "no_ktp" => $_POST['no_ktp'],
                "nama" => $_POST['nama'],
                "tmpt_lahir" => $_POST['tmpt_lahir'],
                "tgl_lahir" => $_POST['tgl_lahir'],
                "agama" => $_POST['agama'],
                "alamat" => $_POST['alamat'],
                "kota" => $_POST['kota'],
                "jns_kartu" => $_POST['jns_kartu'],
                "info" => $_POST['info']
            );
            // return var_dump($data);
            $this->db->insert('kartukredit', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Kartukredit');
        }
    }
}
