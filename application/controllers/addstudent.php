<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addstudent extends CI_Controller {
	public function __construct() 
	{
        parent:: __construct();

    }

	public function index()
	{
		$this->load->view('public/add_student');

	}
	public function insert()
	{
		//$this->load->library('form_validation');
		$this->form_validation->set_rules("s_n","Student Name","required|max_length[50]");
		$this->form_validation->set_rules("s_email","Student Email","required|valid_email");
		$this->form_validation->set_rules("s_phone","Student Phone","required|max_length[13]");
		$this->form_validation->set_rules("s_address","Student Address","required|max_length[255]");
		$this->form_validation->set_rules("s_age","Student Age","required|max_length[2]");
		$this->form_validation->set_rules("s_batch","Student Batch","required|max_length[9]");
		$this->form_validation->set_rules("s_dob","Student Date Of Birth","required|max_length[10]");
		$this->form_validation->set_rules("s_stream","Student Stream","required|max_length[10]");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">
                      <div class="mb-3">
                        <i class="bi bi-x-circle fs-1 me-2 lh-1"></i>
                      </div>
                      <h4 class="alert-heading">Error!</h4>
                      <p>', '</p>
                    </div>');
		if ($this->form_validation->run() == FALSE)
                {
                       $this->load->view('public/add_student');
                       //echo validation_errors();
                }
                else
                {
                        
                }
	}
}
?>