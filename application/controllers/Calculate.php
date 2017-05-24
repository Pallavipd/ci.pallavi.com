<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Calculate extends CI_Controller {
        
       
	public function count() {
        
        $num1 = $this->input->post('num1');
        $num2 = $this->input->post('num2');
       // $op = $this->input->post('operate');
       // $num2 = $this->input->post('num2');
        echo $num1;
       echo "<input type='text'   value ='$num1' />";
       echo $num2;
       $this->load->view('calculate_view');
        
        
}
	
}

