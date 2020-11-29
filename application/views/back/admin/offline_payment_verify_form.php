<div>
    <?php
    echo form_open(base_url() . 'admin/offline_payment/do_verify_offline_payment/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'offline_payment_verify_form',
        'enctype' => 'multipart/form-data'
    ));
   
 

                        // echo "<pre>";
                        // print_r($ad_package_data);

    ?>
    <div class="panel-body">
        <div class="form-group">

            <!-- select User-->
            
 
 
                <!-- select package Type-->

                <input type="hidden" name="package_id" id="package_id" value="<?php echo $package_id ?>">
                <input type="hidden" name="pkg_type" id="pkg_type" value="<?php echo $pkg_type ?>">


                 

                  <div  class="clearfix">  </div>  <br>

                <label class="col-md-6 control-label" for="demo-hor-1">
                    <?php echo translate('add_payment_details'); ?>
                </label>

                <div class="col-md-6">
                   
                   <input type="text" class="form-control required"  value="" name="offline_payment_comment">

               
                

                </div>



                 

              

               
               
                <!-- select package-->
                

                <div  class="clearfix">  </div>  <br>


                  

            </div>


               <!--  <input type="text" name="name" id="demo-hor-1" 
                       class="form-control required" placeholder="<?php //echo translate('news_category_name'); ?>" > -->
           
        </div>
    </div>
</form>
</div>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
</script>

    <script type="text/javascript">
        
        $('input[type=radio][name=package_type]').on('change', function() {
          

          value =$(this).val();
          if(value == 1){
            $(".blog_pkg_list").hide();
            $(".adv_pkg_list").show();
            $("#blog_package_id").removeClass("required");

             $("#adv_package_id").addClass("required");
             $("#pkg_subtype").addClass("required");

          }
          else if(value == 2){
            $(".blog_pkg_list").show();
            $(".adv_pkg_list").hide();

            $("#blog_package_id").addClass("required");
            
            $("#adv_package_id").removeClass("required");
            $("#pkg_subtype").removeClass("required");
          }


    });
    </script>