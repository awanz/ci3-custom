<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['title'] = "Gentelella Alela!";
		$data['body'] = "dashboard";
		$this->load->view('includes/master', $data);
	}
	
	public function v2()
	{
		$data['title'] = "Gentelella Alela!";
		$data['body'] = "dashboardv2";
		$this->load->view('includes/master', $data);
	}

	public function v3()
	{
		$data['title'] = "Gentelella Alela!";
		$data['body'] = "dashboardv3";
		$this->load->view('includes/master', $data);
	}
}
