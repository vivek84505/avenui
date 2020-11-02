<?php include('crypto.php'); ?>

<html>
<head>
<title> CCAvenue Payment</title>
</head>
<body>
<center>


<?php 
	

 	error_reporting(0);
 
	$merchant_data='';
	$working_key='74C80A82D8781370E799927473776F3A';//Shared by CCAVENUES
	$access_code='AVIA89HA67AE71AIEA';//Shared by CCAVENUES
	 
	foreach ($_POST as $key => $value){
		 
		$merchant_data.=$key.'='.$value.'&';
	}

	echo $encrypted_data;
	die();

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
	
	 
?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

