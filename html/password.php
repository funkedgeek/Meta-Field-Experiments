<?php
require_once 'text.php';

class CEDCF_Password_Html extends CEDCF_Text_Html {
	public $type = 'password';
	function normalize_attributes( $attributes ) {			
		$attributes = parent::normalize_attributes( $attributes );
		$attributes['type'] ='password';			
		return $attributes;	
	}
}