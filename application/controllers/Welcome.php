<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = [
			'content' => $this->load->view('pages/home.php', '', true)
		];

		$this->load->view('welcome_message', $data);
	}
}
