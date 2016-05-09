<?php
class Radio_test extends CI_Controller {
	

	public function radio_input()
	{

		$this->load->model('radio_test_model', '', true);
		$this->load->view('radio_test_view');
	}

	public function radio_entry()
	{
		$this->load->model('radio_test_model', '', true);
		$this->radio_test_model->insert_entry();
		// $this->load->view('entry_y_view');
		$this->radio_get();
		
	}
	public function radio_get()
	{
		$this->load->model('radio_test_model', '', true);
		$data['test'] = $this->radio_test_model->get_entry();
		// var_dump($data);
		$this->load->view('radio_result',$data);
	}	



}
