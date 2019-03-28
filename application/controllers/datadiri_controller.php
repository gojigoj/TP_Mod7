<?php

class datadiri_controller extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->model("datadiri_model");
    }

    public function index(){
        $user = $this->datadiri_model->cekUser();

        if ($user) {
            $dataUser = array (
                'nim' => $user->nim,
                'nama' => $user->nama,
            );
        }
        $this->session->set_userdata($dataUser);
        $this->load->view("datadiri");
    }

    public function daftarTeman(){
        $hasil = $this->datadiri_model->getTeman();
        $data['data_view'] = $hasil;

        $this->load->view("daftarTeman",$data);
    }

}