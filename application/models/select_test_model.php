<?php
 class Select_test_model extends CI_Model {

 	public $number;
    public $name;
    public $pass;

    public function insert_entry() //データ挿入コード
    {
            $this->number   = $this->input->post('number');
            $this->name     = $this->input->post('name');
            $this->pass     = $this->input->post('pass');
            $this->db->insert('yamamoto', $this);
    }
    

    public function get_select_test()//セレクトボックステスト
    {
            $query = $this->db->get('select_test',6);
            // var_dump($query->result());
            return $query->result();
    }
    
} 
