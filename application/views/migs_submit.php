<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 18-Feb-17
     * Time: 4:11 PM
     */
    require_once(APPPATH.'views/include/header.php');
   // echo "concat:";
    //var_dump($concat_data);
    //exit;
?>

<script>
    $(document).ready(function() {
$("#proceed").click();
    });
</script>


<form id="migs_form" action ="https://migs.mastercard.com.au/vpcpay">


    <input id="vpc_AccessCode" name="vpc_AccessCode" type="hidden" value="<?php echo $concat_data['vpc_AccessCode']; ?>">

<br><br>
    <input id="vpc_Amount" name="vpc_Amount" type="hidden" value="<?php echo $concat_data['vpc_Amount']; ?>">

    <br><br>
    <input id="vpc_Command" name="vpc_Command" type="hidden" value="<?php echo $concat_data['vpc_Command']; ?>">

    <br><br>
    <input id="vpc_Currency" name="vpc_Currency" type="hidden" value="<?php echo $concat_data['vpc_Currency']; ?>">
    <br><br>

    <input id="vpc_Locale" name="vpc_Locale" type="hidden" value="<?php echo $concat_data['vpc_Locale']; ?>">

    <br><br>
    <input id="vpc_MerchTxnRef" name="vpc_MerchTxnRef" type="hidden" value="<?php echo $concat_data['vpc_MerchTxnRef']; ?>">

    <br><br>

    <input id="vpc_Merchant" name="vpc_Merchant" type="hidden" value="<?php echo $concat_data['vpc_Merchant']; ?>">
    <br><br>


    <input id="vpc_OrderInfo" name="vpc_OrderInfo" type="hidden" value="<?php echo $concat_data['vpc_OrderInfo']; ?>">
    <br><br>


    <input id="vpc_ReturnAuthResponseData" name="vpc_ReturnAuthResponseData" type="hidden" value="<?php echo $concat_data['vpc_ReturnAuthResponseData']; ?>">

    <br><br>
    <input id="vpc_ReturnURL" name="vpc_ReturnURL" type="hidden" value="<?php echo $concat_data['vpc_ReturnURL']; ?>">

    <br><br>

    <input type="hidden" name="vpc_SecureHashType" value="SHA256">
    <br><br>

    <input type="hidden" name="vpc_SecureHash" value="<?php echo $concat_data['sha256_hmac']; ?>">

    <br><br>
    <input id="vpc_Version" name="vpc_Version" type="hidden" value="1">


    <input type="submit" name="proceed" id="proceed" value="proceed" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" >
    <b>
        Please wait...
        <div class="preload">
            <img src="<?php echo APPPATH.'assets/images/giphy.gif'; ?>" height="150">
        </div>

        <div class="content">

        </div>

</form>

