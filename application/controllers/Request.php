<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $layout2;

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model(['Request_model', 'User_model']);
	  $this->load->library('form_validation');
	  $this->load->library("pagination");
	  $this->layout2 = 'layouts/master2';

	}


	public function Paginate()
	{
		
		$config['full_tag_open'] = '<ul class="pagination pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = array('class' => 'page-link');
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
        
	}

	public function Flingmw()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingmw/";
        $config["total_rows"] = $this->Request_model->GetCountFMW();
        $config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();
		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFMW($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Men Seeking Women';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function Flingwm()
	{

		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingwm/";
        $config["total_rows"] = $this->Request_model->GetCountFWM();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFWM($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
			$data['title'] = 'Women Seeking Men';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function Flingmm()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingmm/";
        $config["total_rows"] = $this->Request_model->GetCountFMM();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFMM($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Men Seeking Men';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function Flingww()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingww/";
        $config["total_rows"] = $this->Request_model->GetCountFWW();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFWW($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
			$data['title'] = 'Women Seeking Women';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function Flingcm()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingcm/";
        $config["total_rows"] = $this->Request_model->GetCountFCM();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFCM($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Couple Seeking Men';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function Flingcw()
	{

		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingcw/";
        $config["total_rows"] = $this->Request_model->GetCountFCW();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFCW($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
			$data['title'] = 'Couple Seeking Women';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function Flingf()
	{

		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/flingf/";
        $config["total_rows"] = $this->Request_model->GetCountFF();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedFlingResultsFF($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Fetishes';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function ltmw()
	{

		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/ltmw/";
        $config["total_rows"] = $this->Request_model->GetCountLMW();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedResultsLMW($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Men Seeking Women';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function ltwm()
	{

		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/ltwm/";
        $config["total_rows"] = $this->Request_model->GetCountLWM();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedResultsLWM($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Women Seeking  Men';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function ltmm()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/ltmm/";
        $config["total_rows"] = $this->Request_model->GetCountLMM();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedResultsLMM($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Men Seeking Men';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

    public function ltww()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$config = array();
        $config["base_url"] = base_url() . "request/ltww/";
        $config["total_rows"] = $this->Request_model->GetCountLWW();
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['requests'] = $this->Request_model->GetPaginatedResultsLWW($config["per_page"], $page);

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		//var_dump($data["links"]);
		$data['title'] = 'Women Seeking Women';
		$data['content'] = 'users/lists';
	    $this->load->view($this->layout2, $data);
	}

	public function VIP()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		$data['title'] = 'VIP';
        $data['content'] = 'users/vip';
	    $this->load->view($this->layout2, $data);
	}


	public function Insert()
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$data['request_nature'] = $this->input->post('request_nature');
		$data['request_type'] = $this->input->post('request_type');
		$data['age'] = $this->input->post('age');
		$data['religion'] = $this->input->post('religion');
		$data['state'] = $this->input->post('state');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		$data['contact'] = $this->input->post('contact');
		$data['userID'] = $this->input->post('userID');
		$data['color'] = $this->input->post('color');
		$data['created_at'] = date('Y-m-d');
		
		
		//var_dump($data);
		$inserted = $this->Request_model->Insert($data);
		// if($inserted > 0)
		// {
		// 	$this->session->set_flashdata('success', 'Request Created Successfully');
		// 	redirect('index.php/post');  
		// }		
	}

	public function Search()
	{
		
		$request_type = $this->input->post('request_type');
		$request_nature = $this->input->post('request_nature');
		$age1 = $this->input->post('age1');
		$age2 = $this->input->post('age2');
		if($this->input->post('state') == "Any")
		{
		  $state = "";
		}
		else
		{
		   $state = $this->input->post('state');
		}

		$query = array(
			'request_type' => $request_type,
			'request_nature' => $request_nature,
			'age1' => $age1,
			'age2' => $age2,
			'state' => $state,
		);

		 //var_dump($email);

		 $config = array();
        $config["base_url"] = base_url() . "request/search/";
        $config["total_rows"] = $this->Request_model->GetCountSearch($request_nature, $request_type, $age1, $age2, $state);
		$config["per_page"] = 15;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['search'] = $this->Request_model->GetPaginatedResults($request_nature, $request_type, $age1, $age2, $state, $config["per_page"], $page);
		
		//var_dump($data['search']);
		
		
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		$data['title'] = 'Search';
		$data['content'] = 'users/search';
	    $this->load->view($this->layout2, $data);
	}


	public function DateSearch()
	{
		
		
		$start_date = date('Y-m-d', strtotime($this->input->post('start_date')));
		$end_date = date('Y-m-d', strtotime($this->input->post('end_date')));
	

		 $config = array();
        $config["base_url"] = base_url() . "request/datesearch/";
        $config["total_rows"] = $this->Request_model->GetCountDateSearch($start_date, $end_date);
		$config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $config["total_rows"];
		$config['use_page_numbers'] = false;
		
		$this->Paginate();

		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $page;
        $data["links"] = $this->pagination->create_links();

		$data['search'] = $this->Request_model->GetPaginatedResultsDates($start_date, $end_date, $config["per_page"], $page);
		
		//var_dump($data['search']);
		
		
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		$data['title'] = 'Search';
		$data['content'] = 'users/search';
	    $this->load->view($this->layout2, $data);
	}

	public function Show($id)
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$data['request'] = $this->Request_model->FetchRequestDetails($id);
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		$data['title'] = 'Show';
        $data['content'] = 'users/show';
	    $this->load->view($this->layout2, $data);
	}

	public function Edit($id)
	{
		if (! $this->session->userdata('email'))
		{
			redirect('/'); // the user is not logged in, redirect them!
		}

		$data['request'] = $this->Request_model->FetchRequestDetails($id);
		$email = $this->session->email;
		$data['user'] = $this->User_model->FetchUserDetails($email);
		
		$data['title'] = 'Edit';
        $data['content'] = 'users/edit';
	    $this->load->view($this->layout2, $data);
	}

	public function Update($id)
	{
		$data['request_nature'] = $this->input->post('request_nature');
		$data['request_type'] = $this->input->post('request_type');
		$data['age'] = $this->input->post('age');
		$data['religion'] = $this->input->post('religion');
		$data['state'] = $this->input->post('state');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		$data['contact'] = $this->input->post('contact');
		$data['userID'] = $this->input->post('userID');
		$data['color'] = $this->input->post('color');
		
		
		var_dump($data);
		//$updated = $this->Request_model->Update($data);
		// if($updated > 0)
		// {
		// 	$this->session->set_flashdata('success', 'Request Created Successfully');
		// 	redirect('index.php/post');  
		// }
	}

	public function Delete($id)
	{
		$deleted = $this->Request_model->Delete($id);
		if($deleted > 0)
		{
            $this->session->set_flashdata('success', 'Record Deleted Successfully');
		    redirect('user/dashboard');
		}
		
	}

	public function Contact()
	{
		 $c_name = $this->input->post("c_name");
		 $c_email = $this->input->post("c_email");
		 $c_subject = $this->input->post("c_subject");
		 $c_msg = $this->input->post("c_msg");
		 //var_dump($data);

		        $email = "godson.ihemere@gmail.com";
    			
				$name = "ShugaPlanet";
    			$subject = "i have A Concern for ShugaPlanet";
				$message = "

				Name: $c_name  <br>
				Email:  $c_email <br>
				Subject: $c_subject <br>
				Message: $c_msg

				";

			
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
		
	}


	public function Newsletter()
	{
		 $data['name'] = $this->input->post("n_name");
		 $data['email'] = $this->input->post("n_email");
		 //var_dump($data);

		 $inserted = $this->Request_model->NewsletterInsert($data);
		
	}



	public function GetRequestTypeWithID($id)
	{
        $request = $this->Request_model->GetRequestTypeWithID($id);
        return $request->value; 
	}
}

