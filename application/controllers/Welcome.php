<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);

	}


	public function index()
	{

		 $query_result=$this->db->get('product_add');
		 $result['data']=$query_result->result_array();

		$this->load->view('welcome_message',$result);
	}

		public function user_login()
	{
		$this->load->view('pages/user_login');
	}

  public function data_save()
	{
		$db=$this->load->database();
     
     $data=array(
     'email'=>$this->input->post('email')
     );

		   $this->load->library('email');
		   $config = Array(
		     'protocol' => 'smtp',
		     'smtp_host' => 'smtp.gmail.com',
		     'smtp_port' => 587,
		     'smtp_user' => 'md.shaon4100@gmail.com', // change it to yours
		     'smtp_pass' => 'Sh@on599', // change it to yours
		     'mailtype' => 'html',
		     'charset' => 'iso-8859-1',
		     'wordwrap' => TRUE
		  );


		   $email=$this->input->post('email');
		   
		  $this->load->library('email', $config);
		  $this->email->set_newline("\r\n");
		  $this->email->from('md.shaon4100@gmail.com', "Admin Team");
		  $this->email->to($email);  
		  $this->email->subject("Email Verification");
		  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email");
		  $this->email->send();
		

		$result=$this->db->insert('subscribe',$data);

        if($result){
        	echo "added successfully";
        }
	}


}
