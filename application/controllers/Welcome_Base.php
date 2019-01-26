<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_Base extends CI_controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->config->load('form_validation',TRUE);
	}
}