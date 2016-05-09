<?php
class Yamamoto extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
	}

	public function abc()
	{
		$this->load->view('Sample_view');
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

    public function get_yamamoto_list()
    {
        $this->load->model('yamamoto_model', '', true);

        $data = $this->yamamoto_model->get_list();

        var_dump($data);

    }

    public function test() 
    {
        $this->load->model('yamamoto_model', '', true);

        $data = $this->yamamoto_model->insert_entry();

        var_dump($data);
        $this->load->view('yamamoto_view');
    }




    public function insert() //データ挿入コード
    {
        $this->load->model('entry_y_model', '', true);
        // $data = $this->entry_y_model->entry_test();
        $this->entry_y_model->insert_entry();
        // $this->load->view('entry_y_view');
        
    }

    public function java(){
        $this->load->view('javascript_h');
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
//     { 
//         // $num = 20;
//     // hensu = new Array(3);       
//         // $data['num'] = '20';
//     $this->load->view('yamamoto_view', $data);
//     }
// public function test_data()
//     {
//         // $data['title'] = 'My Page Title';
        
//         $data['heading'] = 'takuya';
//         $this->load->view('yamamoto_view', $data);
//     }




    function sola()
    {
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";

        $this->load->view('sample_view', $data);
 
    }






}
?>

