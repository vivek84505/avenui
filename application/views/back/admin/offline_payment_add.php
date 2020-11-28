<div>
    <?php
    echo form_open(base_url() . 'admin/offline_payment/do_add/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'category_add',
        'enctype' => 'multipart/form-data'
    ));
   
 

                        // echo "<pre>";
                        // print_r($ad_package_data);

    ?>
    <div class="panel-body">
        <div class="form-group">

            <!-- select User-->
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('select_user'); ?>
            </label>

            <div class="col-sm-6">
                <select name="user_id" id="user_id" class="form-control required" >
                    <option value=''>Select User</option>
                    <?php
                    foreach ($users as $user) { ?>

                        <option value='<?php  echo $user['user_id'] ; ?>'> <?php  echo $user['username'] ; ?>  </option>

                        <?php }  ?>

                    </select>

            </div>


                <div  class="clearfix">

                </div>
                <br>

                <!-- select package Type-->
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    <?php echo translate('select_package_type'); ?>
                </label>

                <div class="col-sm-4">
                    <label for="1">Avertisement</label> 
                    <input type="radio" id="1" value="1" class="required" name="package_type"   >

                </div>

                <div class="col-sm-4">
                    <label for="2" >Blog</label>
                    <input type="radio" id="2" value="2" class="required" name="package_type"    >
                </div>

                <div  class="clearfix">  </div>  <br>

               
                <!-- select package-->
                <div class="adv_pkg_list" style="display:none">
                    <label class="col-sm-4 control-label" for="demo-hor-1">
                        <?php echo translate('select_package'); ?>
                    </label>

                    <div class="col-sm-6">
                    <select name="adv_package_id" id="adv_package_id" class="form-control required">
                        <option value=''>Select Package</option>
                        <?php
                        foreach ($ad_package_data as $package) { ?>

                            <option value='<?php  echo $package['package_id'] ; ?>'> <?php  echo $package['package_details'] ; ?>  </option>

                            <?php }  ?>

                        </select> 
                    </div>
                

                  <div  class="clearfix">  </div>  <br>

                
                    <label class="col-sm-4 control-label" for="demo-hor-1">
                        <?php echo translate('select_duration'); ?>
                    </label>

                    <div class="col-sm-6">
                    <select name="pkg_subtype" id="pkg_subtype" class="form-control required">
                        <option value=''>Select Duration</option>
                        <option value='1'>Weekly</option>
                        <option value='2'>Monthly</option>
                        <option value='3'>Half Yearly</option>
                        <option value='4'>Yearly</option>
                        
                        </select> 
                    </div>
                </div>

                <div  class="clearfix">  </div>  <br>


                 <div class="blog_pkg_list" style="display:none" >
                    <label class="col-sm-4 control-label" for="demo-hor-1">
                        <?php echo translate('select_package'); ?>
                    </label>

                    <div class="col-sm-6">
                    <select name="blog_package_id" id="blog_package_id" class="form-control required">
                        <option value=''>Select Package</option>
                        <?php
                        foreach ($blog_package_data as $package) { ?>

                            <option value='<?php  echo $package['subscription_id'] ; ?>'> <?php  echo $package['name'] ; ?>  </option>

                            <?php }  ?>

                        </select> 
                    </div>
                

                  <div  class="clearfix">  </div>  <br>

                
                    
                    
                </div>

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