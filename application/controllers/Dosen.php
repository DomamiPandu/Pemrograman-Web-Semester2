<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Dosen extends CI_Controller {
        public function index(){
            $this->load->model('Dosen_model','dsn1');
            $this->dsn1->nidn='011030022';
            $this->dsn1->pendidikan='S2 Teknik Informatika';

            $this->load->model('Dosen_model','dsn2');
            $this->dsn2->nidn='230010023';
            $this->dsn2->pendidikan='S1 Sistem Informasi';
            
            $this->load->model('Dosen_model','dsn3');
            $this->dsn3->nidn='011032005';
            $this->dsn3->pendidikan='S3 Psikologi';
            
            $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
            $data['list_dsn']=$list_dsn;
            $this->load->view('dosen/index',$data);
        }
    }
?>