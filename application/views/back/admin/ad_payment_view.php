<?php
    $payment_details = $this->db->select('user.firstname,user.lastname,advertisement_payment.advertisement_payment_id,advertisement_payment.package_id,advertisement_payment.offline_payment_comment,advertisement_payment.payment_type,advertisement_payment.payment_status,advertisement_payment.amount,advertisement_payment.purchase_datetime,advertisement_payment.expire_timestamp,advertisement_payment.payment_timestamp,advertisement_payment.payment_status,advertisement_payment.payment_details')
        
        ->join('user','user.user_id=advertisement_payment.user_id','left')
        ->get_where('advertisement_payment',array('advertisement_payment_id' => $payment_id))->row();
        //echo "<pre>";
        //print_r($payment_details);
?>
<div>
     <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                

                <tr>
                    <td><?php echo translate('payment_id');?></td>
                    <td>
                        <?php
                            
                            echo $payment_details->advertisement_payment_id;
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
                    <td><?php echo  $payment_details->amount; ?></td>
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
                    <td><?php echo translate('package_time_duration');?> </td>
                    <td>
                        <?php
                            switch ($payment_details->package_id) {
                                case '1':
                                    echo "1 Week";
                                    break;

                                case '2':
                                    echo "1 Month";
                                    break;

                                case '3':
                                    echo "6 Months";
                                    break;

                                case '4':
                                    echo "1 Year";
                                    break;

                                default:
                                    # code...
                                    break;
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo translate('payment_type');?></td>
                    <td><?php echo $payment_details->payment_type; ?></td>
                </tr>
                <tr>
                    <td><?php echo translate('details');?></td>
                    <td><?php echo $payment_details->offline_payment_comment; ?></td>
                </tr>
                
            </table>
        </div>
    </div>
</div>
