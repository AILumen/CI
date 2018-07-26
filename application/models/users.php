<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_users(){
    	// echo "gaurav from model";die();
		$data = $this->db->get('users')->result();
		return $data;
    }
}