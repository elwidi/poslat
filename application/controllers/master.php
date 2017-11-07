<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Master_model', 'm_master');
	}

	public function index()
	{
        $this->pelanggan();
	}

	public function pelanggan_dt(){
        $this->load->library('Datatable', array('model' => 'Pelanggan_dt', 'rowIdCol' => 'id'));

        $jsonArray = $this->datatable->datatableJson(array(
        ));

        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($jsonArray));
    }

    public function pelanggan(){
        if ($this->input->post('submit_btn') == 'true'){
            if($this->m_master->saveNewCust()){
                $this->session->set_flashdata('message', 'Data pelanggan baru telah disimpan');
                redirect('master/pelanggan');
            }
            // var_dump($this->input->post(null, true));
            // exit();
        }
        $this->load->view('pelanggan');
    }

    /*function insert_dumy(){
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
    }*/
}