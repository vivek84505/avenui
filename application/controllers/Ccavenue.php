<?php //include("securearea.php"); ?>
<?php include("crypto.php"); ?>

<?php

class Ccavenue extends CI_Controller
{



	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");	
		$this->load->helper('string');			
	  
		$this->load->library('session');
	}

      public function sendRequest()
   {

   
   		$this->load->view("front/request_view");


   }
   
     public function getResponse()
   {
   		 
   	
  		$this->load->view("front/response_view");


   }
   
  




}
?>
