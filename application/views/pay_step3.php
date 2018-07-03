<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 30-Jun-16
     * Time: 11:12 PM
     */

    require_once(APPPATH.'views/include/header.php');

    // var_dump($form_data);
    //$form_data = $this->session->all_userdata();
    //$usersPaymentData = $this->session->flashdata('UserData');
    //var_dump($usersPaymentData);
?>

<ol  class="breadcrumb" style="border:#ccc solid thin; width: 900px; margin-top: 10px; margin-left: 240px">
    <li> <i class="fa fa-home"></i><a href="http://www.thispresenthouse.org" style="color: #666 ">TPH home  </a></li>
    <li><a href="http://www.thispresenthouse.org/onlinepay/how-it-works.php" style="color: #666 ">How it works </a></li>
    <li><a href="http://www.thispresenthouse.org/watch-online" target="_blank" style="color: #666 ">Watch Our Service Online </a></li>
</ol>

<br><br>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-center">You are about to give <?php echo $form_data['currency'].number_format($form_data['total_transaction_amount'],2);?> </h3>
        <h4 class="text-center">Choose Payment Option</h4>
    </div>
    <?php
        if($form_data['currency'] == "NGN"){
            ?>
            <ul id="payoptions">
                <li>
                    <label>
                        <input name="vendorName" id="gtpay" class="method_btn" value="gtpay" type="radio">
                        <img class="method_logo" src="<?php echo  base_url('assets/images/gtpay.jpg');?>" alt="GTPay">
                    </label>
                </li>
<!--                <li>
                    <label>
                        <input name="vendorName" id="fcmbpay" class="method_btn" value="fcmbpay" type="radio">
                        <img class="method_logo" src="<?php /*echo  base_url('assets/images/fcmb.jpg');*/?>" alt="FCMB">
                    </label>
                </li>-->
                          <li>
                <label>
                    <input name="vendorName" id="globalpay" class="method_btn" value="globalpay" type="radio">
                    <img class="method_logo" src="<?php echo  base_url('assets/images/globalpaylogo.gif');?>" alt="Global Pay">
                </label>
            </li>

            </ul>

            <?php
        }
        else{
            ?>
            <li>
                <label>
                    <input name="vendorName" id="fcmbpayfx" class="method_btn" value="fcmbpayfx" type="radio">
                    <img class="method_logo" src="<?php echo  base_url('assets/images/fcmb2.jpg');?>" alt="FCMBFX">
                </label>
            </li>
            <?php
        }
    ?>
    <!--GTPAY FORM STARTS-->
    <div id="gtpay_div" style="display: none">
        <form name="submit2gtpay_form" action="https://ibank.gtbank.com/GTPay/Tranx.aspx" method="post" target="_parent">
            <input type="hidden" name="gtpay_mert_id" value="772" />
            <input type="hidden" name="gtpay_tranx_id" value="<?php echo $form_data['transaction_id'];?>" />
            <input type="hidden" name="gtpay_tranx_amt" value="<?php echo $form_data['total_transaction_amount']*100;?>" />
            <input type="hidden" name="gtpay_tranx_curr" value="566" />
            <input type="hidden" name="gtpay_cust_id" value="<?php echo $form_data['cust_id']; ?>" />
            <input type="hidden" name="gtpay_cust_name" value="<?php echo $form_data['names'];?>" />
            <input type="hidden" name="gtpay_echo_data" value="<?php echo $form_data['email_address']; ?>" />
            <input type="hidden" name="gtpay_no_show_gtbank" value="yes" />
            <input type="hidden" name="gtpay_hash" value="<?php echo $form_data['hash']; ?>" />
            <input type="hidden" name="gtpay_tranx_noti_url" value="<?php echo $form_data['gtpay_tranx_noti_url'];?>" />
            <input type="submit" id="cmdsubmit" class="btn btn-lg btn-danger" value="Continue »»" name="cmdsubmit">
        </form>
    </div>
    <!--GTPAY FORM ENDS-->

    <!-- FCMB LOCAL STARTS HERE -->
    <div id="fcmb_local_div" style="display: none;">

        <form method="POST" id="upay_form" name="upay_form" action="https://fcmbwebpay.firstcitygrouponline.com/customerportal/MerchantServices/MakePayment.aspx" " target="_top">
        <input type="hidden" name="mercId" value="04254" />
        <input type="hidden" name="currCode" value="566" />
        <input type="hidden" name="amt" value="<?php echo $form_data['total_transaction_amount'];?>" />
        <input type="hidden" name="orderId" value="<?php echo $form_data['cust_id']; ?>" />
        <input type="hidden" name="prod" value="<?php echo uniqid('GIVE_', false);?>" />
        <input type="hidden" name="email" value="<?php echo $form_data['email_address']; ?>" />
        <input type="hidden" name="hash" value="<?php echo $form_data['fcmb_hash']; ?>" />
        <input type="hidden" name="encryptedKey" value="zYERpk1e0OPRUYDg" />
        <input type="submit" id="cmdsubmit" class="btn btn-lg btn-danger" value="Continue »»" name="cmdsubmit" />
        </form>

    </div>
    <!-- FCMB LOCAL ENDS HERE -->

    <!--FCMBFX FORM STARTS-->
    <div id="fcmbfx_div" style="display: none">
        <form action="<?php echo base_url('do_fcmbfx');?>" id="form" method="post" name="form">

            <input id="vpc_AccessCode" name="vpc_AccessCode" type="hidden" value="4F450377" />
            <input id="vpc_Amount" name="vpc_Amount" type="hidden" value="<?php echo $form_data['total_transaction_amount'] * 100;?>" />
            <input id="vpc_Command" name="vpc_Command" type="hidden" value="pay" />

            <input id="vpc_Currency" name="vpc_Currency" type="hidden" value="<?php echo $form_data['currency'];?>" />

            <input type="hidden" name="vpc_Locale" value="en">

            <input id="vpc_MerchTxnRef" name="vpc_MerchTxnRef" type="hidden" value="<?php echo $form_data['transaction_id'];?>" />

            <input id="vpc_Merchant" name="vpc_Merchant" type="hidden" value="3214LAFCMB1N" />

            <input id="vpc_OrderInfo" name="vpc_OrderInfo" type="hidden" value="<?php echo time();?>" />

            <input id="vpc_ReturnAuthResponseData" name="vpc_ReturnAuthResponseData" type="hidden" value="N" />

            <input id="vpc_ReturnURL" name="vpc_ReturnURL" type="hidden" value="http://www.thispresenthouse.org/onlinepay/receipt2" />


            <input id="secret" name="secret" type="hidden" value="0FEEB5260D4783A211387565837D90DD" />

            <input id="vpc_Version" name="vpc_Version" type="hidden" value="1" />

            <input type="submit" value="Continue »»" class="btn btn-lg btn-danger">

        </form>
    </div>
    <!--FCMBFX FORM ENDS-->

    <!-- GLOBALPAY FORM STARTS HERE +++++++++++++++++++++++++++++ -->
    <div id="globalpay_div" style="display: none">

    <form method="post" action="https://demo.globalpay.com.ng/globalpay_demo/Paymentgatewaycapture.aspx" >
       <input type="hidden" id="names" name="names" value="<?php echo $form_data['names'];?>"> <br/>
        <input type="hidden" id="amount" name="amount" value="<?php echo $form_data['total_transaction_amount'];?>"> <br/>
        <input type="hidden" id="email_address" name="email_address" value="<?php echo $form_data['email_address']; ?>"> <br/>
        <input type="hidden" id="phone_number" name="phone_number" value="<?php echo $form_data['phone_number'];?>"> <br/>
        <!-- Please change the currency as suited to your merchant-->
        <input type="hidden" id="currency" name="currency" value="NGN"> <br/>
        <input type="hidden" id="merch_txnref" name="merch_txnref" value="<?php echo $form_data['transaction_id'];?>"> <br/><!-- Merchant reference number should be unique per transaction-->
        <!-- Merchant Id value should be changed to your merchant id-->
        <input type="hidden" id="merchantid" name="merchantid" value="10309"> <br/>

        <input type="submit" value="Continue »»" class="btn btn-lg btn-danger">

    </form>
        </div>
    <!-- GLOBALPAY FORM ENDS HERE************************************ -->
</div>
<?php //var_dump($form_data); ?>
<?php
    require_once(APPPATH.'views/include/footer.php');
?>
