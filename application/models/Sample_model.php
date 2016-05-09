<?php
class Sample_model extends CI_Model {
    // public function __construct(){
        // $this->db->get(); 
        // echo 'test';
          // function __construct()
    // {
        // Model クラスのコンストラクタを呼び出す
        // parent::__construct();
    // }
    
    // function get_last_ten_entries()
    // {
        // $query = $this->db->get('entries', 10);
        // return $query->result();
    // }

    // function insert_entry()
    // {
        // $this->title   = $_POST['title']; // 下の Note を参照してください
        // $this->content = $_POST['content'];
        // $this->date    = time();

        // $this->db->insert('entries', $this);
    // }

    // function update_entry()
    // {
        // $this->title   = $_POST['title'];
        // $this->content = $_POST['content'];
        // $this->date    = time();

        // $this->db->update('entries', $this, array('id' => $_POST['id']));
    // }

    // public function get()
    // {
     // $this->db->get(第一引数はテーブル名、第二引数は取得するレコード数);
      // $query = $this->db->get('sample');
      // return $query->result();
    // }
    public function get()
    {
    // //  $this->db->get(第一引数はテーブル名、第二引数は取得するレコード数);
      $query = $this->db->get('yamamoto');
      return $query->result();
    }
// }
//     public $number;
//     public $name;
//     public $pass;

//     public function insert_entry() {
    
//     $this->number  = $this->input->post('number');
//     $this->name  = $this->input->post('name');
//     $this->pass  = $this->input->post('pass');

//         $this->db->insert('entries', $this);
//     }
}


