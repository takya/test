<?php
 class Radio_test_model extends CI_Model {

   	public $number;
    public $name;
    public $pass;

    public function insert_entry() //データ挿入コード
    {
            // $test['radio'] = array('one' => '1','two' => '2','three' => '3');

            // $this->number   = $this->input->post('radio'); 
            $this->number   = $this->input->post('radio01');
            // $this->number   = $this->input->post('two');
            // $this->number   = $this->input->post('three');
            // $this->number   = $this->input->post('number');
            $this->name     = $this->input->post('name');
            $this->pass     = $this->input->post('pass');
            $this->db->insert('radio_test', $this);
	}

    public function get_entry()//データ取得
    {
        $date = $this->db->get('radio_test','all');
        return $date->result();
    }


}