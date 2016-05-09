<?php

class Form extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('sola_model');
    }
    public function index(){
        $this->load->view('myform');
    }
}
