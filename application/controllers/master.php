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

    public function view_pelanggan($id){
    	$this->load->theme('metronics-modal');
    	$data['costumer'] = $this->m_master->getCustDataById($id);
        $this->load->view('view_pelanggan',$data);
    }

    public function edit_pelanggan($id){
        $this->load->view('edit_pelanggan');
    }

    public function pelangganExcel(){

        $this->load->library("PHPExcel/PHPExcel");

        //membuat objek PHPExcel
        $objPHPExcel = new PHPExcel();

        $filename = 'data_pelanggan.xlsx';

        if (file_exists($path)) {
          @unlink($path);
        }

        $objPHPExcel->getProperties()
                ->setLastModifiedBy("")
                ->setTitle("Office 2007 XLSX Test Document")
                ->setSubject("Office 2007 XLSX Test Document")
                ->setDescription("Document for Office 2007 XLSX, generated using LinovHR.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("");

        $objPHPExcel->getActiveSheet()->getSheetView()->setZoomScale(90);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . 1, 'Created By System');

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C1:G1');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C' . 1, "DATA PELANGGAN");
        /*=============================Header Data================================*/
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . 3, "No");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B' . 3, "Nama");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C' . 3, "Nomor Handphone");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D' . 3, "Alamat Email");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E' . 3, "Alamat");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F' . 3, "Tanggal Lahir");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G' . 3, "Bergabung sejak");

        //get data
        $all_customer = $this->m_master->getAllCust();

        $row = 4;
        $no  = 1;
        //set data into each column
        foreach ($all_customer as $key => $value) { 
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . $row, $no);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B' . $row, $value->name);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C' . $row, $value->contact1);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D' . $row, $value->contact2);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E' . $row, $value->address);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F' . $row, date('d M y', strtotime($value->dob)));
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G' . $row, date('d M y', strtotime($value->created_date)));
            $row++;
            $no++;
        }

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        ob_end_clean();
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        $objWriter->save($path);
        $content = file_get_contents($path);

        if ($this->force_download($filename, $content)) {
          $this->download_evaluation_form("True");
        } else {
          $this->download_evaluation_form("False");
        }
        //===========================================================================================================
        //END PHP EXCEL
        }
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