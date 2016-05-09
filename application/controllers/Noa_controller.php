<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noa_controller extends CI_Controller {

	public function noa(){
		$this->load->library("pagination");
		$this->load->library("table");

		$config["base_url"] = 'http://localhost/code3/index.php/noa_controller/noa/';
		$config["total_rows"] = $this->db->get("yamamoto")->num_rows();
		$config["per_page"] = 5;
		$config["uri_segment"] = 5;	
		// switch ($config["per_page"]) {
  //       case 10:
  //           function ten(){
  //           	$config["per_page"] = 10};
  //           break;
  //       case 20:
  //           function twenty(){
  //           	$config["per_page"] = 20};
  //           break;
  //       case 'all':
  //           function all(){
  //           	$config["per_page"] = 'all';
  //           break;
  //   }
		
		$config['full_tag_open'] = '<ul class="pagination">';	
		$config['full_tag_close'] ='</ul>' ;

		$config['first_link'] = '最初';    
		$config['last_link'] = '最後';     
		$config['next_link'] = '次へ';    
		$config['prev_link'] = '戻る';
		
		$this->pagination->initialize($config);

		$data["records"] = $this->db->get("yamamoto", $config["per_page"], $this->uri->segment(3));
		$this->load->view("noa_view", $data);
	

	  

	}

	function ten(){
		$this->load->library("pagination");
		$this->load->library("table");

		$config["base_url"] = 'http://localhost/code3/index.php/noa_controller/ten/';
		$config["total_rows"] = $this->db->get("yamamoto")->num_rows();
		$config["per_page"] = 10;
		
		$config['full_tag_open'] = '<ul class="pagination">';	
		$config['full_tag_close'] ='</ul>' ;

		$config['first_link'] = '最初';    
		$config['last_link'] = '最後';     
		$config['next_link'] = '次へ';    
		$config['prev_link'] = '戻る';
		
		$this->pagination->initialize($config);

		$data["records"] = $this->db->get("yamamoto", $config["per_page"], $this->uri->segment(3));
		$this->load->view("noa_view", $data);
	}
	
	function twenty(){
		$this->load->library("pagination");
		$this->load->library("table");

		$config["base_url"] = 'http://localhost/code3/index.php/noa_controller/twenty/';
		$config["total_rows"] = $this->db->get("yamamoto")->num_rows();
		$config["per_page"] = 20;
		
		$config['full_tag_open'] = '<ul class="pagination">';	
		$config['full_tag_close'] ='</ul>' ;

		$config['first_link'] = '最初';    
		$config['last_link'] = '最後';     
		$config['next_link'] = '次へ';    
		$config['prev_link'] = '戻る';
		
		$this->pagination->initialize($config);

		$data["records"] = $this->db->get("yamamoto", $config["per_page"], $this->uri->segment(3));
		$this->load->view("noa_view", $data);
	}

	function all(){
		$this->load->library("pagination");
		$this->load->library("table");

		$config["base_url"] = 'http://localhost/code3/index.php/noa_controller/all/';
		$config["total_rows"] = $this->db->get("yamamoto")->num_rows();
		$config["per_page"] = 'all';
		
		$config['full_tag_open'] = '<ul class="pagination">';	
		$config['full_tag_close'] ='</ul>' ;

		$config['first_link'] = '最初';    
		$config['last_link'] = '最後';     
		$config['next_link'] = '次へ';    
		$config['prev_link'] = '戻る';
		
		$this->pagination->initialize($config);

		$data["records"] = $this->db->get("yamamoto", $config["per_page"], $this->uri->segment(3));
		$this->load->view("noa_view", $data);
	}


}
