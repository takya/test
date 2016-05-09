<?php
 class Entry_y_model extends CI_Model {
 	public $number;
    public $name;
    public $pass;
    public $time;
    // public $year;
    // public $month;
    // public $day;

    public function insert_entry()//データ挿入
    {
    	$this->number    = $this->input->post('number');
        $this->name      = $this->input->post('name');
        $this->pass      = $this->input->post('pass');
        $this->time      = $this->input->post('time');
        $this->time      =
        $this->db->insert('entry_test',$this);    
    }

    public function get_entry()//データ取得
    {
    	$date = $this->db->get('entry_test','all');
    	return $date->result();
       // if($one_days = date("Y-m-d H:i:s", strtotime("-1 day")));
    }

 }
