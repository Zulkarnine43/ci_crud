<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_controller extends CI_Controller {


	public function admin_login()
	{
		$this->load->view('pages/admin_login');
	}


public function admin_register()
	{
		$this->load->view('pages/admin_register');
	}

public function admin_dashboard()
	{
		$this->load->view('pages/admin_dashboard');
	}

public function a_reg_db()
	{

		if ($this->input->post('password')==$this->input->post('confirm_password')) {
		$data=array(
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password')
		);
		}

	
		 $db=$this->load->database();
		if($this->db->insert('admin_register', $data)){
			  redirect('/admin_login', 'refresh');
		}
	}

	public function admin_login_check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
        
        $db=$this->load->database();

	   	$this->db->select('*');
		$data = $this->db->get_where('admin_register',array('email' => $email, 'password' =>$password));

		 // $result['data']=$dat->result_array();

	        foreach ($data->result_array() as $row)
				{
				  
				  $this->session->set_userdata(array(
		               'first_name' =>  $row['first_name'],
					));
				}

		 // $this->load->view('pages/admin_dashboard');
				redirect('/admin_dashboard');
	}


}