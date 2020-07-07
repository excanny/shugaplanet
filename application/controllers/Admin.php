<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public $layout;
	public $layout2;
	public $layout3;
	public $layout4;
    function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model(['User_model', 'Request_model']);
		$this->layout = 'layouts/master';
		$this->layout2 = 'layouts/master2';
		$this->layout3 = 'layouts/master3';
		$this->layout4 = 'layouts/master4';
		
		if (! $this->session->userdata('is_admin') == 1)
		{
			redirect('user/dashboard'); // the user is not logged in, redirect them!
		}

	}

	
	public function Index()
	{
		
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		$user = $this->User_model->FetchUserDetails($email);
		$data['requests'] = $this->Request_model->AllUserRequests($user->id);
		$data['latest_requests'] = $this->Request_model->LatestRequests();
		//var_dump($data['requests']);
		
		$data['title'] = 'Admin Dashboard';
		
		$data['content'] = 'users/admin';
	    $this->load->view($this->layout4, $data);
	 
	}
	
	public function Show($id)
	{
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		$data['title'] = 'Show User';
        $data['content'] = 'users/admin_show';
	    $this->load->view($this->layout4, $data);
	}
	
	public function Fund($id)
	{
		//$sub1 = $this->input->post('sub1');
		$subx = $this->User_model->GetUserBalance($id);
		$sub1 = $subx->sub;
		if($sub1)
		{
			$sub2 = $this->input->post('sub2');
			$data['sub'] = $sub1 + $sub2;
			
		    $uploaded = $this->User_model->FundBalance($data, $id);
		
			if($uploaded > 0)
			{
				$this->session->set_flashdata('success', 'Wallet Funded Successfully');
				redirect('admin/users');  
			}	
		}
		else
		{
			
			$this->session->set_flashdata('error', 'Try again');
			 redirect('admin/users'); 
			
		}		
	}
	
	public function Users()
	{
	
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		$user = $this->User_model->FetchUserDetails($email);
		$data['users'] = $this->User_model->AllUsers();
		$data['title'] = 'All Users';
		//var_dump($data['requests']);
	    $data['content'] = 'users/all_users';
	    $this->load->view($this->layout4, $data);
	}
	
	public function VIPs()
	{
	
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		$user = $this->User_model->FetchUserDetails($email);
		$data['vips'] = $this->User_model->AllVips();
		
		//var_dump($data['requests']);
		$data['title'] = 'All VIPs';
	    $data['content'] = 'users/admin_vip';
	    $this->load->view($this->layout4, $data);
	}
	
	
	public function GetRequestTypeWithID($id)
	{
        $request = $this->Request_model->GetRequestTypeWithID($id);
        return $request->value; 
	}
	
	public function logout()
	{
		session_destroy();
		redirect('/');
	}
}