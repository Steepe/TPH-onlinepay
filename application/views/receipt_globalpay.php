<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 11-Nov-16
     * Time: 1:20 PM
     */

    require_once(APPPATH.'views/include/header.php');
    //var_dump($form_data);
    //var_dump($this->session->all_userdata());
    //$email = $this->session->us

?>

<ol  class="breadcrumb" style="border:#ccc solid thin; width: 900px; margin-top: 10px; margin-left: 240px">
    <li> <i class="fa fa-home"></i><a href="http://www.thispresenthouse.org" style="color: #666 ">TPH home  </a></li>
    <li><a href="http://www.thispresenthouse.org/watch-online" target="_blank" style="color: #666 ">Watch Our Service Online </a></li>
</ol>


<div id="give_header" class="alert alert-info text-center col-md-12" style="margin-top: 50px;">
    <p class="fontstyle1"><em>In giving to the work of Gods Kingdom you contribute to advancing it here on earth.</br>

            Your financial involvement could also be the greatest investment you make in the lives of others.</br>

            Your generosity helps spread Christ's message of hope and healing.</em></></p>
</div>
<br>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-center"><strong>Transaction Details</strong></h3>
    </div>


    <div class="panel-body">

        <div class="col-md-4  " >
            <?php
                if(trim($form_data['status']) == "successful"){
                //$amt = $form_data['vpc_Amount']/100;

                $message = "Dear giver,<br>";
                $message .= "Your Donation of <strong>".//$amt."</strong> to THIS PRESENT HOUSE was successful.<br>";
                $message .= "Your Transaction Number is ".$form_data['txnref'].".<br>";
                $message .= "Thank you.";

                $sender = "web@thispresenthouse.org";
                $headers = "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                $headers .= "From:".$sender."\n";
                $headers .= "Message-Id: <".time()."@".$_SERVER['SERVER_NAME'].">\n";
                $headers .= "X-Mailer: php-mail-function-0.2\n";
                $mail = mail($form_data['email_address'], "TPH Give Online", $message, $headers);
                ?>
                <div class="result text-center text-primary" >
                    <i class="fa fa-check-circle fa-5x"></i><br/>
                    Payment Successful!
                </div>
                <?php
            }
                else{
            ?>
            <div class="result text-center text-primary" >
                <i class="fa fa-times-circle fa-5x"></i><br/>
                Payment Unsuccessful!
            </div>
        </div>

        <div class="col-md-8  " >
            <div class="table-responsive">
                <h4 class="margin_20"><?php echo $form_data['status'] ;?></h4>

                <h5>Transaction Reference: <?php echo $form_data['txnref'];?></h5>
            </div>
        </div>
        <?php
            }
        ?>
        <div class="clearfix"></div>
    </div>



</div>

<a href="print.html" class="btn btn-danger" onclick="window.print();return false;">Print me </a>

<a href="https://www.thispresenthouse.org/onlinepay" class="btn btn-danger">Make another donation <i class="fa fa-share"></i> </a>


</div>
