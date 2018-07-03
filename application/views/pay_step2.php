<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 30-Jun-16
     * Time: 10:42 PM
     */

    require_once(APPPATH.'views/include/header.php');
    //var_dump($form_data);

    ?>

<ol  class="breadcrumb" style="border:#ccc solid thin; width: 900px; margin-top: 10px; margin-left: 240px">
    <li> <i class="fa fa-home"></i><a href="http://www.thispresenthouse.org" style="color: #666 ">TPH home  </a></li>
    <li><a href="https://www.thispresenthouse.org/watch-online" target="_blank" style="color: #666 ">Watch Our Service Online </a></li>
</ol>

<br><br>
    <div class="row">
        <div class="col-md-6">
            <!-- Callout -->
            <div class="callout callout-default fade in" >
                <span style="font-size: large;"> <strong>Member Information</strong></span><br>
                <p><strong>Full Name:</strong> <?php echo $form_data['names'];?></p>
                <p><strong>Email Address:</strong> <?php echo $form_data['email_address'];?></p>
                <p><strong>Telephone:</strong> <?php echo $form_data['phone_number'];?></p>
            </div>
            <!-- /callout -->
        </div>
        <div class="col-md-6">
            <!-- Callout -->
            <div class="callout callout-default fade in" style="text-align: right">
                <span style="font-size: large;"> <strong>TRANSACTION REF #</strong><br> <?php echo strtoupper($form_data['transaction_id']);?></span>
               <br> <p>Please, Keep Track of your transaction Reference code above</p>
            </div>
            <!-- /callout -->
        </div>
    </div>



<br>



<!--      receipt table          -->
<!--      receipt table          -->


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Offering Details</strong></h3>
                </div>




                <table class="table table-condensed table-striped table-responsive" style="text-transform:uppercase">
    <thead>
    <tr>
        <td>#</td>
        <td>Offering Type</td>
        <td>Amount</td>
    </tr>
    </thead>
    <tr>
        <td>1</td>
    <td>Main Offering</td>
    <td ><?php echo (isset($form_data['offering']) ? number_format($form_data['offering'], 2) : '0.00'); ?></td>
    </tr>

    <tr>
        <td>2</td>
    <td>Tithe:</td>
        <td ><?php echo (isset($form_data['tithe']) ? number_format($form_data['tithe'], 2) : '0.00'); ?></td>
    </tr>
    <tr>
        <td>3</td>
    <td>Freedom Center:</td>
        <td ><?php echo (isset($form_data['freedom_center']) ? number_format($form_data['freedom_center'], 2) : '0.00'); ?></td>
    </tr>

     <tr>
         <td>4</td>
         <td>Freedom Foundation:</td>
         <td ><?php echo (isset($form_data['freedom_foundation']) ? number_format($form_data['freedom_foundation'], 2) : '0.00'); ?></td>
     </tr>
                    <tr>
                        <td>5</td>
                        <td>Thanksgiving:</td>
                        <td ><?php echo (isset($form_data['thanksgiving']) ? number_format($form_data['thanksgiving'], 2) : '0.00'); ?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Pledges:</td>
                        <td ><?php echo (isset($form_data['pledges']) ? number_format($form_data['pledges'], 2) : '0.00'); ?></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Others:</td>
                        <td ><?php echo (isset($form_data['others']) ? number_format($form_data['others'], 2) : '0.00'); ?></td>
                    </tr>
    <tr>
    <td class="emptyrow"><strong>Total Transaction Amount:</strong></td>
        <td></td>
    <td class="emptyrow"><strong><?php echo $form_data['currency'].number_format($form_data['total_transaction_amount'],2);?></strong></td>
    </tr>
    <tr>
        <td class="emptyrow"><br /><a href="http://www.thispresenthouse.org/onlinepay/" class="btn btn-lg btn-danger">&laquo;&laquo; Back </a></td>
        <td></td>
        <td class="emptyrow">
            <br>
            <form action="<?php echo base_url('paymentOptions');?>" method="post">
                <input type="hidden" name="transaction_id" value="<?php echo $form_data['transaction_id'];?>" />
                <input type="hidden" name="total_transaction_amount" value="<?php echo $form_data['total_transaction_amount'];?>" />
                <input type="hidden" name="cust_id" value="<?php echo $form_data['cust_id']; ?>" />
                <input type="hidden" name="names" value="<?php echo $form_data['names'];?>" />
                <input type="hidden" name="email_address" value="<?php echo $form_data['email_address']; ?>" />
                <input type="hidden" name="phone_number" value="<?php echo $form_data['phone_number']; ?>" />
                <input type="hidden" name="hash" value="<?php echo $form_data['hash']; ?>" />
                <input type="hidden" name="gtpay_tranx_noti_url" value="<?php echo $form_data['gtpay_tranx_noti_url'];?>" />
                <input type="hidden" name="currency" value="<?php echo $form_data['currency'];?>" />
                <input type="hidden" name="fcmb_hash" value="<?php echo $form_data['fcmb_hash'];?>" />
                <input type="submit" id="cmdsubmit" class="btn btn-lg btn-danger" value="Continue »»" name="cmdsubmit">
            </form>
        </td>
    </tr>

    </tbody>
    </table>

            </div>
</div>

<?php
    require_once(APPPATH.'views/include/footer.php');
?>

