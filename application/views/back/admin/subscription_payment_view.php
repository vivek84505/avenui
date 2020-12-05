<?php
    //$payment_details = $this->db->get_where('subscription_payment',array('subscription_payment_id' => $payment_id))->row();

    $payment_details = $this->db->select('user.firstname,user.lastname,subscription_payment.subscription_payment_id,subscription_payment.offline_payment_comment,subscription_payment.payment_type,subscription_payment.payment_status,subscription_payment.amount,subscription_payment.purchase_datetime,subscription_payment.expire_timestamp,subscription_payment.payment_timestamp,subscription_payment.payment_status,subscription_payment.payment_details')
        
        ->join('user','user.user_id=subscription_payment.user_id','left')
        ->get_where('subscription_payment',array('subscription_payment_id' => $payment_id))->row();
 ?>
<div>
     <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                

                <tr>
                    <td><?php echo translate('payment_id');?></td>
                    <td>
                        <?php
                                echo $payment_details->subscription_payment_id;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td><?php echo translate('user');?></td>
                    <td>
                        <?php
                                echo $payment_details->firstname.' '.$payment_details->lastname;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo translate('amount');?></td>
                    <td><?php echo currency('','def').$payment_details->amount; ?></td>
                </tr>

                <tr>
                    <td><?php echo translate('purchase_datetime');?> </td>
                    <td><?php echo $payment_details->purchase_datetime; ?></td>
                </tr>

                <tr>
                    <td><?php echo translate('expiry_date');?> </td>
                    <td><?php echo $payment_details->expire_timestamp; ?></td>
                </tr>

                <tr>
                    <td><?php echo translate('payment_status');?> </td>
                    <td><?php echo $payment_details->payment_status; ?></td>
                </tr>


                <tr>
                    <td><?php echo translate('payment_type');?></td>
                    <td><?php echo $payment_details->payment_type; ?></td>
                </tr>
                <tr>
                    <td><?php echo translate('details');?></td>
                    <td><?php echo $payment_details->payment_details; ?></td>
                </tr>
                
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.modal-content').find('.enterer').hide();
    });
</script>
