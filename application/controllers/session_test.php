<?php

class Session_test extends CI_Controller{
	function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		// $this->session->session_entry();
		$new_session = array('number_data' => $this->input->post('number'),
							 'name_data' => $this->input->post('name'),
							 'pass_data' => $this->input->post('pass'),
							 'time_data' => $this->input->post('time'));

		$this->session->set_userdata($new_session);
	}


	public function session_input()
	{
		// $this->session->userdata(‘セッション名’)
		$this->load->model('session_model', '', true);
		$this->load->view('session_a');
	}

	public function session_v_con()
	{
		// $this->session->userdata(‘セッション名’)
		$this->load->model('session_model', '', true);
		$this->load->view('session_v');
	}


	public function session_entry()
	{
		$this->load->model('session_model', '', true);
		$this->session_model->insert_entry();
		$this->session_get();
		
	}
	public function session_get()
	{
		$this->load->model('session_model', '', true);
		$data['test'] = $this->session_model->get_entry();
		// var_dump($data);
		$this->load->view('session_b',$data);
	}	


}