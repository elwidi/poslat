<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pelanggan');
	}

	public function dt(){
		$this->load->library('Datatable', array('model' => 'Pelanggan_dt', 'rowIdCol' => 'id'));

		$jsonArray = $this->datatable->datatableJson(array(
			//'a.delivery_date' => 'date',
			//'a.unit_price' => 'currency'
		));

		$this->output->set_header("Pragma: no-cache");
		$this->output->set_header("Cache-Control: no-store, no-cache");
		$this->output->set_content_type('application/json')->set_output(json_encode($jsonArray));
        // exit();
	}

    function insert_dumy(){
        // jumlah data yang akan di insert
        $jumlah_data = 100;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
                'name' => 'Pelanggan ke - '.$i,
                'address' => 'Jalan Tambak No. '.$i,
                'contact1' => '089898090'.$i,
                'contact2' => 'pelangganke'.$i.'@mail.com',
                'dob' => '1991-01-01',
                'created_date' => date('Y-m-d'),
                'created_by' => 'system'
                );
            $this->db->insert('pelanggan',$data); 
        }
        echo $i.' Data Berhasil Di Insert';
    }
}