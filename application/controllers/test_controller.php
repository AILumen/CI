<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('users');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function comments()
	{
		echo 'ENVIRONMENT : '.ENVIRONMENT."<br>";
		echo 'EXT : '.EXT."<br>";
		echo 'FCPATH : '.FCPATH."<br>";
		echo 'SELF : '.SELF."<br>";
		echo 'BASEPATH : '.BASEPATH."<br>";
		echo 'APPPATH : '.APPPATH."<br>";
		echo 'CI_VERSION : '.CI_VERSION."<br>";
		echo 'FILE_READ_MODE : '.FILE_READ_MODE."<br>";
		echo 'FILE_WRITE_MODE : '.FILE_WRITE_MODE."<br>";
		echo 'DIR_READ_MODE : '.DIR_READ_MODE."<br>";
		echo 'DIR_WRITE_MODE : '.DIR_WRITE_MODE."<br>";
		echo 'FOPEN_READ : '.FOPEN_READ."<br>";
		echo '$this->uri->segment(1) : '.$this->uri->segment(2)."<br>";
		echo 'DEVELOPER_NAME : '.DEVELOPER_NAME."<br>";
		// print_r(get_instance());
	}


	public function get_user_data(){
		$User = new Users;
		echo "<pre>";
		print_r($User->get_users());
	}
}

