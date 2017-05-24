<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {
	function calc($a,$b)
	{
		/*$this->load->view('add')
		$this->load->view('sub')
		$this->load->view('mul')*/
		$this->add ($a,$b);
		$this->sub ($a,$b);
		$this->mul ($a,$b);
	}
<meta hhtp-equi="Content-Type" content="text/html; charset=utf-8"/>
	
	function add($a,$b)
	{
		$sum = $a+$b;
		echo "addition of $a and $b is", $sum;

	}
	 function sub($a,$b)
 	{
 		$s=$a-$b;
 		echo "subtraction of $a and $b: ",$s; 

 	}
 	function mul($a,$b)
 	{
 		$mul=$a*$b;
 		echo "multiplication of $a and $b is : ",$mul;
 	}
 	
}

