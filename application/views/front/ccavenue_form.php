<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'includes/top/index.php' ;?>

        <style type="text/css">

            .btn-payment {
              background: #009614;
              border: #038214 1px solid;
              padding: 11px 30px;
              color: #FFF;
              cursor: pointer;margin: 10px 2%;width: 96%;
              text-transform: uppercase;
              font-weight: bold;
          }
        

        </style>
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <?php include 'preloader.php' ;?>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">
			<?php include 'header/header-1.php' ;?>
            


         <form class = "form-horizontal" method="post"  action="<?php echo base_url()."ccavenue/sendrequest"; ?>" role = "form">

         <div class = "form-group">
            <label for = "billing_name" class = "col-sm-2 control-label">Billing Name</label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_name ?>"class = "form-control" id = "billing_name" name="billing_name" value=""  >
            </div>
         </div>

         <input type="hidden" name="merchant_id" value="<?php echo 243505; ?>"> 
         <input type="hidden" name="language" value="EN"> 
         <input type="hidden" name="amount" value="<?php echo $amount; ?>">
         <input type="hidden" name="currency" value="INR"> 
         <input type="hidden" name="redirect_url" value="<?php echo base_url()."Ccavenue/getResponse"; ?>"> 
         <input type="hidden" name="cancel_url" value="http://youdomain.com/payment-cancel.php"> 


         <div class = "form-group">
            <label for = "billing_address" class = "col-sm-2 control-label">Billing Address</label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_address ?>" class = "form-control" id = "billing_address" name="billing_address" value=""  >
            </div>
         </div>

          <div class = "form-group">
            <label for = "billing_state" class = "col-sm-2 control-label">Billing State</label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_state ?>"  class = "form-control" id = "billing_state" name="billing_state" value=""  >
            </div>
         </div>

          <div class = "form-group">
            <label for = "billing_zip" class = "col-sm-2 control-label">Billing Zip</label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_zip ?>"  class = "form-control" id = "billing_zip" name="billing_zip" value=""  >
            </div>
         </div>

          <div class = "form-group">
            <label for = "billing_country" class = "col-sm-2 control-label">Billing Country</label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_country ?>" class = "form-control" id = "billing_country" name="billing_country" value=""  >
            </div>
         </div>

          <div class = "form-group">
            <label for = "billing_tel" class = "col-sm-2 control-label">Billing Contact Number</label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_tel ?>" class = "form-control" id = "billing_tel" name="billing_tel" value=""  >
            </div>
         </div>



          <div class = "form-group">
            <label for = "billing_email" class = "col-sm-2 control-label">Billing Email </label>
            <div class = "col-sm-4">
               <input type = "text" value = "<?php echo $billing_email ?>" class = "form-control" id = "billing_email" name="billing_email" value=""  >
            </div>
         </div>

       
         <div class = "form-group">
            <div class = "col-sm-offset-2 col-sm-4">
               <button type = "submit" class = "btn btn-default btn-payment">Pay Now</button>
            </div>
         </div>
      </form>










            <?php include 'footer/footer-1.php' ;?>

        </div>
        <!-- /WRAPPER -->
        <?php
            include 'script_texts.php';
        ?>
        <?php include 'includes/bottom/index.php' ;?>
    </body>
</html>