<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Form_validation extends CI_Form_validation {
	
	public function set_error($field, $error){
        $this->_field_data[$field]['error'] = $error;
    }

    public function add_validation_group($group) {
		if (!isset($this->_config_rules[$group])) return false;
		$this->set_rules($this->_config_rules[$group]);
	}
}
