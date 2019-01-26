<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Welcome_Base {
	protected $validation_group_prefix = 'bestellung_dsl';

	public function index()	{
		// if ($this->is_valid_step('bestellung_dsl_step' . $this->current_step))
		// function is_valid_step($validation_goup) {
		// 		$this->form_validation->add_validation_group($validation_group);	
		// }
		// 
		$this->form_validation->add_validation_group('foo1');
		
		if (method_exists($this, 'before_validation')) {
			$this->step3_before_validation();
		}
		
		if ($this->form_validation->run() == TRUE) {
			echo 'Form validated successfully';
		}
		
		$this->load->view('welcome_message');
	}

	public function step3_before_validation() {
		if (1 == 2) {
			$this->form_validation->add_validation_group('foo2');
		}
	}
}