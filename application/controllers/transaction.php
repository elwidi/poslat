<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Master_model', 'm_master');
	}

	public function index()
	{
        $this->pelanggan();
	}

    public function penjualan(){
        $data['goods'] = $this->m_master->getAllGoods();
        $this->load->view('transaksi/penjualan', $data);
    }

    public function getKodeBarang(){
        $nama_barang = $this->input->post('nama_barang');

        $kode_barang = $this->m_master->getGoodsByName($nama_barang);

        if(!empty($kode_barang)){
            $data = array('status' => 'success','data' => $kode_barang);
        } else {
            $data = array('status' => 'success','data' => '');
        }

        echo json_encode($data);
        exit();
    }
}