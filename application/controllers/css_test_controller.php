<?php
class Css_test_controller extends CI_Controller {
	 public function insert()  //データをDBに挿入コード
    {
        $this->load->model('css_test_model', '', true);

        $data = $this->css_test_model->insert_entry();

        // var_dump($data);
        $this->load->view('css_test_view',$data);
    }

    }