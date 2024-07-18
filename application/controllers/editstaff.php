<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editstaff extends CI_Controller {
	public function __construct() 
	{
        parent:: __construct();

    }

	public function index()
	{
		$this->load->view('public/edit_staff');

	}
}
?>