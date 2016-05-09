<?php
class Entry_y extends CI_Controller{
	
	public function form_input()
	{
		$this->load->model('entry_y_model', '', true);
		$this->load->view('entry_y_input');
	}

	public function form_select()
	{
		$this->load->model('entry_y_model', '', true);
		$this->load->view('entry_y_select');
	}


	public function entry()
	{
		$this->load->model('entry_y_model', '', true);
		// $data = $this->entry_y_model->entry_test();
		$this->entry_y_model->insert_entry();
		// $this->load->view('entry_y_view');
		$this->get();
		
	}
	public function get()
	{
		$this->load->model('entry_y_model', '', true);
		$data['test'] = $this->entry_y_model->get_entry();
		// var_dump($data);
		$this->load->view('entry_y_list',$data);
	}	
}