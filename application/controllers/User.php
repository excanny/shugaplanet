<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public $layout;
	public $layout2;
	public $layout3;
    function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model(['User_model', 'Request_model']);
		$this->layout = 'layouts/master';
		$this->layout2 = 'layouts/master2';
		$this->layout3 = 'layouts/master3';

	}
	

    public function RegisterAction()
	{
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('dobday', 'Dy Of Birth', 'trim|required');
		$this->form_validation->set_rules('dobmonth', 'Month Of Birth', 'trim|required');
		$this->form_validation->set_rules('dobyear', 'Year Of Birth', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('sexuality', 'Sexuality', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',
        array(
                'is_unique' => 'This %s address already exists. Choose another email address.'
        ));
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password2', 'Retype Password', 'trim|required|matches[password2]');
        if ($this->form_validation->run() == FALSE)
        {
			$this->session->set_flashdata('error', validation_errors());
			redirect('/');
        }
        else
     	{
			$hash = openssl_random_pseudo_bytes(16);
			$hash = bin2hex($hash);

			$dobday = $this->input->post('dobday');
			$dobmonth = $this->input->post('dobmonth');
			$dobyear = $this->input->post('dobyear');
			$dob = date('Y-m-d', strtotime($dobyear . "-" . $dobmonth . "-" .  $dobday));

			
            $data = array(
                'first_name' => strip_tags($this->input->post('first_name')),
				'last_name' => strip_tags($this->input->post('last_name')),
				'user_name' => strip_tags($this->input->post('username')),
				'email' => strip_tags($this->input->post('email')),
				'pass_word' => password_hash($this->input->post('password2'),PASSWORD_DEFAULT),
				'gender' => strip_tags($this->input->post('gender')),
				'sexuality' => strip_tags($this->input->post('sexuality')),
				'dob' => $dob, 
				'country' => strip_tags($this->input->post('country')),
				'hash' => $hash,
				
			);

			 //var_dump($data);
			
			 $inserted = $this->User_model->InsertUser($data);

			if($inserted > 0)
			{
				$logindata = array(
					'id' => $row->id,
					'first_name' => strip_tags($this->input->post('first_name')),
					'last_name' => strip_tags($this->input->post('last_name')),
					'email' => strip_tags($this->input->post('email')),
					'username' => strip_tags($this->input->post('username')),
					'logged_in' => TRUE
					);
					
					
					 $this->session->set_userdata($logindata);

					 redirect('/user/dashboard');
		
			}
			else 
			{
				$this->session->set_flashdata('error', 'Registration failed');
				redirect('/');
			}
			
		 }
	}
	
    

    public function LoginAction()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('pass_word', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
			$this->session->set_flashdata('error', validation_errors());
			redirect('/');
        }
        else
        {
            $email  = $this->input->post('email');
            $pass_word = $this->input->post('pass_word');
            
			 $validate = $this->User_model->LoginValidate($email, $pass_word);
			
            if($validate)
            {
				$row = $this->User_model->FetchUserDetails($email);
			
			    $logindata = array(
					'id' => $row->id,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'email' => $row->email,
					'username' => $row->user_name,
					'is_admin' => $row->is_admin,
					'logged_in' => TRUE
					);
					
					
					 $this->session->set_userdata($logindata);
                
					if($row->is_admin == 1)
					{
						redirect('admin');
					}
					else
					{
				
					  redirect('user/dashboard');
		
					}
		
             }
        	 else
			 {
				$this->session->set_flashdata('error', 'Username or Password is Wrong or Unactivated account.');
				redirect('/');
			 }
    
        }    
	}
	
    public function GetDeptWithDeptID($dept_ID)
	{
        $dept = $this->Department_model->GetDeptWithDeptID($dept_ID);
        return $dept->name; 
	}

	public function ResetPassword()
	{
		// if (!$this->session->userdata('create-password'))
		// {
		//     $this->session->set_flashdata('error','Wrong or invalid token.'); 
		// 	redirect('/'); // the user is not logged in, redirect them!
		// }

	   $data['content'] = 'users/forget-password';
	   $this->load->view($this->layout3, $data);

	}
	
	public function ForgetPasswordAction()
	{
	    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
			$this->session->set_flashdata('error', validation_errors());
			redirect('/');
        }
        else
        {
	    
    	    $email = $this->input->post("email");
    	    $row = $this->User_model->FetchUserDetails($email);
    	    //var_dump($row);
    	    if($row == null)
    	    {
				$this->session->set_flashdata('error','Email is not registered in the system.'); 
    	        redirect('/');
    	    }
    	    else
    	    {
    	        $token2 = openssl_random_pseudo_bytes(16);
                $data['token'] = bin2hex($token2);
                $data['email'] = $row->email;
                //var_dump($data);
                $token = $data['token'];
                
    	        $inserted = $this->User_model->InsertPasswordResetToken($data);
    	        if($inserted > 0)
    	        {
    	            $email = $row->email;
    	            $to = $row->email;
        			$name = 'Shuga Planet';
        	
        			$subject = "Shuga Planet | Password Reset";
        			$message = "Click on link to reset password or copy link into your browser's address bar. http://shugaplanet.com/user/VerifyToken/$email/$token";
        		    
        		    $config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => 'godson.ihemere@gmail.com',
						'smtp_pass' => 'excanny2',
						'mailtype'  => 'html', 
						'charset'   => 'iso-8859-1'
					);
		
					// Load email library and passing configured values to email library
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
		
					// Sender email address
					$this->email->from('ShugaPlanet', $name);
					// Receiver email address
					$this->email->to($email);
					// Subject of email
					$this->email->subject($subject);
					// Message in email
					$this->email->message($message);
					$this->email->send();
        		    
        			$this->session->set_flashdata('success', 'Reset link sent successfully. Check your mail.');
        			redirect('/');
    	        }
    	    }
       }
	}
	
	public function VerifyToken()
	{
	   $email = $this->uri->segment(3);
	   $token = $this->uri->segment(4);
	   $row = $this->User_model->VerifyToken($email, $token);
	   //var_dump($row);
	   if($row == true)
	   {
		  $this->session->set_flashdata('create-password');
		  $this->session->set_tempdata('recover_email', $email, 3007); 
		  redirect('user/ResetPassword');
	   }
	   else
	   {
		   $this->session->set_flashdata('error','Wrong or invalid token.'); 
    	   redirect('/');
	   }
	}
	
	public function UpdatePassword()
	{
	    $this->form_validation->set_rules('pssd', 'Password', 'trim|required');
        $this->form_validation->set_rules('pssd2', 'Retype Password', 'trim|required|matches[pssd]');
        if ($this->form_validation->run() == FALSE)
        {
			$this->session->set_flashdata('error', validation_errors());
			redirect('user/ResetPassword');	
        }
        else
        {
              $email = $_SESSION['recover_email'];
              $new_password = password_hash($this->input->post('pssd'),PASSWORD_DEFAULT);
              $updated = $this->User_model->UpdatePassword($email, $new_password);
              if($updated > 0)
			  {
				$this->session->set_flashdata('success', 'Password changed successfully. You can now login');
				redirect('/');
			  }
			  else
			  {
				$this->session->set_flashdata('error', 'Error occured. Retry.');
				redirect('/');
			  }
        }
	}

	public function Dashboard()
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
		
		$data['title'] = 'User Dashboard';
		$data['content'] = 'users/dashboard';
	    $this->load->view($this->layout2, $data);
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