<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// class Test extends CI_Controller {

// 	public function ten(){
// 		$this->load->library("pagination");
// 		$this->load->library("table");

// 		$config["base_url"] = 'http://localhost/code3/index.php/test/ten/';
// 		$config["total_rows"] = $this->db->get("yamamoto")->num_rows();
// 		$config["per_page"] = 10;
		
// 		$config['full_tag_open'] = '<ul class="pagination">';	
// 		$config['full_tag_close'] ='</ul>' ;

// 		$config['first_link'] = '最初';    
// 		$config['last_link'] = '最後';     
// 		$config['next_link'] = '次へ';    
// 		$config['prev_link'] = '戻る';
		
// 		$this->pagination->initialize($config);

// 		$data["records"] = $this->db->get("yamamoto", $config["per_page"], $this->uri->segment(3));
// 		$this->load->view("noa_view", $data);
	
// 	}
 	

	// function ten(){
	// 	$this->load->library("pagination");
	// 	$this->load->library("table");

	// 	$config["base_url"] = 'http://localhost/code3/index.php/noa_controller/noa/';
	// 	$config["total_rows"] = $this->db->get("yamamoto")->num_rows();
	// 	$config["per_page"] = 10;
		
	// 	$config['full_tag_open'] = '<ul class="pagination">';	
	// 	$config['full_tag_close'] ='</ul>' ;

	// 	$config['first_link'] = '最初';    
	// 	$config['last_link'] = '最後';     
	// 	$config['next_link'] = '次へ';    
	// 	$config['prev_link'] = '戻る';
		
	// 	$this->pagination->initialize($config);

	// 	$data["records"] = $this->db->get("yamamoto", $config["per_page"], $this->uri->segment(3));
	// 	$this->load->view("noa_view", $data);
	// }
	

// }




