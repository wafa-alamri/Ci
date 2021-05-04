


<?php 

  
class Home extends CI_controller {


	public function index(){

		//echo "Saudi Ports Authority";


	$this->load->view('home');


	}


	public function wafa(){
		echo "test";
	}

	public function rashed() {

		echo "Rashed";
		echo "<br>";
		$this->wafa();
	}

} 





?> 