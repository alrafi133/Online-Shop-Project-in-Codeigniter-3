<?php

    class Kategori extends CI_Controller
    {
        public function elektronik()
        {
            $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('elektronik', $data);
            $this->load->view('templates/footer');
        }
        
        public function sepatu()
        {
            $data['sepatu'] = $this->model_kategori->data_sepatu()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('sepatu', $data);
            $this->load->view('templates/footer');
        }
        
        public function buku()
        {
            $data['buku'] = $this->model_kategori->data_buku()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('buku', $data);
            $this->load->view('templates/footer');
        }
        
        public function peralatan_olahraga()
        {
            $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('peralatan_olahraga', $data);
            $this->load->view('templates/footer');
        }
    }
?>