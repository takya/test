<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noa_lib extends CI_controller
{
	function __construct()
	{
		parent::__construct();
	// $this->load->database();
	$this->load->library('pagination');
	$this->load->library('upload');
}
function init_paging($className, $function_no ='0', $total = 0,$limit =20){
	$config['base_url'] = '/' . $classname . '/' . $function_no . '/list_index';
	$config['total_rows'] = $toatl;
	$config['per_page'] = $limit;
	$config['url_segment'] = 4;

	$config['full_tag_open'] = '<ul class= "pagination">';
	$config['full_tag_close'] = '</ul>';

	$config['first_link'] = '&laquo; 最初';
	$config['first_tag_open'] = '<li class="prev page">';
	$config['first_tag_close'] = '</li>';

	$config['last_link'] = '最後 &raquo;';
	$config['last_tag_open'] = '<li class="next page">';
	$config['last_tag_close'] = '</li>';

	$config['next_link'] = '次;';
	$config['next_tag_open'] = '<li class="next page">';
	$config['next_tag_close'] = '</li>';

	$config['prev_link'] = '前;';
	$config['prev_tag_open'] = '<li class="prev page">';
	$config['prev_tag_close'] = '</li>';

	$this->pagination->initialize($config);

}

}