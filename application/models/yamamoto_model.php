<?php
 class Yamamoto_model extends CI_Model {
    
    public $number;
    public $name;
    public $pass;
    
    // // public function __construct() {
    // //         // Call the CI_Model constructor
    // //         parent::__construct();
    // // }
    // // public function get_last_ten_entries() {
    // //         $query = $this->db->get('yamamoto', 10);
    // //         return $query->result();
    // // }
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

    public function get_list()
    {
    // //  $this->db->get(第一引数はテーブル名、第二引数は取得するレコード数);
      $query = $this->db->get('yamamoto',3);
        // $result = pg_query('SELECT name from yamamoto');
      return $query->result();
        //  if(!$result){
        //  print ("aaa");
        }
    //  $result = pg_query( "SELECT count(*) FROM yamamoto");
    //  $dbs = pg_fetch_result($result, 1,1);
    //  print "<p>作成済みのデータベースの数は「<strong>" . $dbs . "</strong>」です。</p>\1";
    // }
}
