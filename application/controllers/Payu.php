
<?php

class Payu extends CI_Controller
{



	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");	
		$this->load->helper('string');			
	  
		$this->load->library('session');
	}

      public function success()
      {
         echo "<pre>";
         print_r($_REQUEST);

      


      }

      public function fail()
      {


        echo "<pre>";
         print_r($_REQUEST);


      }

      public function cancel()
      {


         echo "<pre>";
         print_r($_REQUEST);


      }
   
  




}
?>
