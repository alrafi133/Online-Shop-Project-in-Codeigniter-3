<?php

    class Model_kategori extends CI_Model
    {
        public function data_elektronik()
        {
            return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
        }
        
        public function data_sepatu()
        {
            return $this->db->get_where("tb_barang", array('kategori' => 'sepatu'));
        }
        
        public function data_buku()
        {
            return $this->db->get_where("tb_barang", array('kategori' => 'buku'));
        }
        
        public function data_peralatan_olahraga()
        {
            return $this->db->get_where("tb_barang", array('kategori' => 'peralatan olahraga'));
        }
    }
?>