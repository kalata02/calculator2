<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

	// Controler, which create calculation its a simply code and we dont need other view.
	public function index()
	{
		$this->load->view("form_calc");
		$something = $this->input->post('equation');
		//verification!
		if(isset($something) && !empty($something) && strlen($something) > 2){
		$calc = eval("return " . $something . "; ");
		echo "<pre/>";
		echo "<mark>";
			print_r($calc);
		echo "</mark>";
		}
		else
		{
		echo "<p>Not Input data for calculation!</p>";
		}

	}
}
