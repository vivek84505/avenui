<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="false" data-show-toggle="false" data-show-columns="true" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no'); ?></th>
                
                <th><?php echo translate('name'); ?></th>
                <th><?php echo translate('contact'); ?></th>
                <th><?php echo translate('payment_date'); ?></th>
                <th><?php echo translate('Payment_Details'); ?></th>
                <th><?php echo translate('Amount'); ?></th>
                <th><?php echo translate('Package'); ?></th>
                 
                <th class="text-right"><?php echo translate('Payment status'); ?></th>
            </tr>
        </thead>				
        <tbody >
            <?php
            //  echo "<pre>";
            // print_r($payment_data); die();

            $i = 0;
            foreach ($payment_data as $row) {
                $i++;
                ?>                
                <tr>
                    <td><?php echo $i; ?></td>
                   
                    <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?>
                        <?php if($row['is_blogger'] == 'yes') {?>
                        <label class="label label-dark pull-right">
                            <?=translate('blogger')?>                                       
                        </label>
                        <?php
                            }
                        ?>
                    </td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo  $row['purchase_datetime']; ?></td>
                    
                    <td><?php 

                            echo $row['offline_payment_comment'];

                         ?>
                    </td>

                     <td><?php 

                            echo $row['amount'];

                         ?>
                    </td>
                    
                    <td><?php 

                            $package_type ="";
                            if(isset($row['advertisement_payment_id'])){
                                $package_type .="Advertisement ";
                            }
                            else if (isset($row['subscription_payment_id'])){
                                 $package_type .="Blogs ";
                            }
                            
                            $data = json_decode($row['package'],TRUE);
                           foreach ($data as $value) {
                               
                               if($value['index'] == $row['package_id']){
                                 $package_type .=$value['name'];
                               }
                           }

                           echo $package_type;
                           

                         ?>
                    </td>

                    <td class="text-right">
                        <?php

                        if(isset($row['subscription_payment_id'])){
                            $current_package_id = $row['subscription_payment_id'];
                            $pkg_type = 2;
                        }
                        else if(isset($row['advertisement_payment_id'])){
                            $current_package_id = $row['advertisement_payment_id'];
                             $pkg_type = 1;
                        }  


                        ?>
                        
                        <?php
                        if($row['offline_payment_verified'] == 0){ ?>

                            <button style="width:160px;" class="btn btn-info   pull-right mar-rgt" 
                                onclick="ajax_modal('verify_offline_payment', '<?php echo translate('verify_offline_payment'); ?>', '<?php echo translate('successfully_verified!'); ?>', 'offline_payment_verify_form', '<?php echo $current_package_id."-".$pkg_type; ?>')">
                                    <?php echo translate('verify_offline_payment'); ?>
                         </button>

                        <?php }
                        else{ ?>

                            <button style="width:160px;" class="btn btn-success   pull-right mar-rgt">Verified</button>
                         
                        <?php }

                        ?>                        
                        

                             

                         

                    </td>


                    
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<div id='export-div' style="padding:40px;">
    <h1 id ='export-title' style="display:none;"><?php echo translate('users'); ?></h1>
    <table id="export-table" class="table" data-name='users' data-orientation='p' data-width='1500' style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
            <tr>
                <th><?php echo translate('no'); ?></th>
                <th><?php echo translate('name'); ?></th>
                <th><?php echo translate('e-mail'); ?></th>
            </tr>
        </thead>



        <tbody >
            <?php
            $i = 0;
            foreach ($all_users as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['username']; ?> <?php echo $row['surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>           	
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
