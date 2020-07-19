<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data['title'] = "Gentelella Alela!";
		$data['body'] = "forms/general_form";
		$this->load->view('includes/master', $data);
    }
    
	public function advanced()
	{
		$data['title'] = "Gentelella Alela!";
		$data['body'] = "forms/advanced_form";
		$this->load->view('includes/master', $data);
	}
}
