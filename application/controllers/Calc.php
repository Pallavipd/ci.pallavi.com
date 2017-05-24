<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {
	 function index() {
                
                $this->load->view('calculate_view');
            }

	
	function add($a,$b)
	{
		$sum = $a+$b;
		echo $sum;

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
 		function div($a,$b)
 	{
 		$mul=$a/$b;
 		echo "divison of $a and $b is : ",$mul;
 	}
 
}