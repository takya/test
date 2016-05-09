<?php
 class Blog_model extends CI_Model {
    
    public $number;
    public $name;
    public $pass;
    
    // public function __construct() {
    //         // Call the CI_Model constructor
    //         parent::__construct();
    // }
    // public function get_last_ten_entries() {
    //         $query = $this->db->get('yamamoto', 10);
    //         return $query->result();
    // }
    public function insert_entry() {
            $this->number   = $this->input->post('number');
            $this->name     = $this->input->post('name');
            $this->pass     = $this->input->post('pass');
            $this->db->insert('yamamoto', $this);
    }
    // public function update_entry() {
    //         $this->number   = $this->input->post('number');
    //         $this->name     = $this->input->post('name');
    //         $this->pass     = $this->input->post('pass');
    //         $this->db->update('yamamoto', $this, array('id' => $_POST['id']));
    // }   
    // }

    //     class Blog_model extends CI_Model {
    //     public $name;
    //     public $;
    //     public $date;
    //     public function __construct() {
    //         // Call the CI_Model constructor
    //         parent::__construct();
    //     }
    //     public function get_last_ten_entries() {
    //         $query = $this->db->get('entries', 10);
    //         return $query->result();
    //     }
    //     public function insert_entry() {
    //         $this->title    = $this->input->post('title');
    //         $this->content = $this->input->post('content');
    //         $this->date     = time();
    //         $this->db->insert('entries', $this);
    //     }
    //     public function update_entry() {
    //         $this->title    = $this->input->post('title');
    //         $this->content = $this->input->post('content');
    //         $this->date     = time();
    //         $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
