<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data($table)
	{
		return $this->db->get($table)->result();
	}

}