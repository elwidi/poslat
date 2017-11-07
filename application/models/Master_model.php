
<?php

class Master_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function saveNewCust(){
    	/**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        $this->db->trans_begin();

        $created_by = 'admin';

        //TODO: Save to pelanggan table
        $data = array(
            'name' => $this->input->post('name'),
            'contact1' => $this->input->post('contact1'),
            'contact2' => $this->input->post('contact2'),
            'address' => $this->input->post('address'),
            'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
            'created_date' => date('Y-m-d')
        );

        $this->db->insert('pelanggan', $data);


        /**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }

        return true;
    }
}