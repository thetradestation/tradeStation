<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{echo asset_url();
		$this->load->view('Home/home');
	}
}
