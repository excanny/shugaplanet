<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public $layout;
	public $layout3;

	public function __construct()
	{
	  parent::__construct();
	 //$this->load->model(['User_model']);
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';
	   $this->layout3 = 'layouts/master3';

		// if (!$_SESSION['email'])
		// {
		// 	redirect('user/login'); // the user is not logged in, redirect them!
		// }
	}

	public function index()
	{
		$data['title'] = 'HOME';
		$data['content'] = 'welcome/index';
	    $this->load->view($this->layout, $data);
	}
	
	
	public function videos()
	{
		$data['title'] = 'Videos';
		$data['content'] = 'welcome/videos';
	    $this->load->view($this->layout3, $data);
	}
	
	public function photos()
	{
		$data['title'] = 'photos';
		$data['content'] = 'welcome/photos';
	    $this->load->view($this->layout3, $data);
	}
	
	public function reports()
	{
		$data['title'] = 'reports';
		$data['content'] = 'welcome/reports';
	    $this->load->view($this->layout3, $data);
	}
	
	public function escorts()
	{
		$data['title'] = 'escorts';
		$data['content'] = 'welcome/escorts';
	    $this->load->view($this->layout3, $data);
	}
	
	
	
}
