<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 30-Jun-16
     * Time: 10:10 PM
     */

    date_default_timezone_set('Africa/Lagos');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>This Present House</title>

    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet">
    <!--        <link href="https://localhost/globalpay/asset/css/custom.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="icon" href="<?php echo base_url('assets/images/favicon.jpg');?>">

    <link href="<?php echo base_url('assets/css/londinium-theme.css');?>" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sky-forms.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sky-forms-orange.css');?>">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sky-forms-ie8.css');?>">
    <![endif]-->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


    <!--[if lt IE 10]>
    <script src="<?php echo base_url('assets/js/jquery.placeholder.min.js');?>"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo base_url('assets/js/sky-forms-ie8.js');?>"></script>
    <![endif]-->

    <script type="text/javascript" src="<?php echo base_url('assets/js/select2.min.js');?>"></script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/datepicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-timepicker/compiled/timepicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-colorpicker/css/colorpicker.css');?>" />



    <script>
        $(document).ready(function() {
            $("#gtpay").click(function () {
                $("#fcmbfx_div").hide();
                $("#fcmb_local_div").hide();
                $("#globalpay_div").hide();
                $("#gtpay_div").show();
            });

            $("#fcmbpayfx").click(function () {
                $("#gtpay_div").hide();
                $("#fcmb_local_div").hide();
                $("#globalpay_div").hide();
                $("#fcmbfx_div").show();
            });

            $("#fcmbpay").click(function () {
                $("#gtpay_div").hide();
                $("#fcmbfx_div").hide();
                $("#globalpay_div").hide();
                $("#fcmb_local_div").show();
            });

            $("#globalpay").click(function () {
                $("#gtpay_div").hide();
                $("#fcmbfx_div").hide();
                $("#fcmb_local_div").hide();
                $("#globalpay_div").show();
            });



            $('.enabler').change(function(){
                var alt = $(this).attr("alt")
                $("#"+alt).prop("disabled", !$(this).is(':checked'));
            });

        });


    </script>

    <script type="text/javascript">
    </script>

        </head>
<body class="bg-orange">

<div class="col-md-12  container" >
    <h2 style="float: left;"><a href="#"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="This present House Logo"></a></h2>
