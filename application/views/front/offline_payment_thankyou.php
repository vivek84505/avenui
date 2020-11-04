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

          .offline-message{

          
              font-size: 35px;
              margin-top: 100px;
              margin-bottom: 300px;
              margin-left: 15px;
              text-align: center;
           
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
            


       <div class="offline-message">
       Dear Customer we have shared Account Details for offline Payment. Please check your email.
       </div>









            <?php include 'footer/footer-1.php' ;?>

        </div>
        <!-- /WRAPPER -->
        <?php
            include 'script_texts.php';
        ?>
        <?php include 'includes/bottom/index.php' ;?>
    </body>
</html>