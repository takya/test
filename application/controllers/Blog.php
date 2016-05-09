<?php
class Blog extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
	}

	public function abc()
	{
		$this->load->view('yamamoto_view');
	}
	public function takuya()
	{
		$this->load->model('Sample_model');
     

	}
    #public function name()
	// {
        // $this ->load->$name="yamamoto";
        // echo $this->name;
    // }

    // public function test()
    // { 
        // $num = 20;
       
        // $data['num'] = '20';
        // $this->load->view('yamamoto_view', $data);

    // public function test() {
        // $this->load->model('sample_model', '', true);

        // $data = $this->sample_model->get_last_two_entries();

    //     var_dump($data[0]->name);
    // }

    public function test() {
    $this->load->model('blog_model', '', true);

    $data = $this->blog_model->insert_entry();

    var_dump($data);
    $this->load->view('yamamoto_view');
    }

//     public function task() {

//     <table>
//     <tr>
    
//     <th>番号</th>
//     <th>名前</th>
//     <th>性別</th>
//     </tr>
//     <tr>
    
//     <td>1</td>
//     <td>aoki</td>
//     <td>men</td>
//     </tr>
//     </table>
// }
// }
// public function sola()
}

