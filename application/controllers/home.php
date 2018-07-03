<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * Author: Oluwamayowa Steepe
 * Date: 30-Jun-16
 * Time: 10:01 PM
 */

class Home extends CI_Controller{

    //public $transaction_id;
    //public $cust_id;

    public function __construct(){
        parent::__construct();
    }



    public function index(){
        $this->session->sess_destroy();
        //var_dump($this->session->all_userdata());
        $this->load->view('pay_step1');
    }


    public function do_step1(){
        $form_data = $this->input->dump_post();
       // var_dump($form_data);
      //  exit;
        $hashkey = "C4AA6F34DA9750D2553892456B47CE1AABE791DB501C8CDFF7365C5A5DB148E474444A5B389CFB2504D23F9B54677AD1ECC4B1D43FE6B0F5AE658C53126FEA58";
        $merchant_id = "772";


        $giving = array();

        if(isset($form_data['offering'])){
            array_push($giving, $form_data['offering']);
        }
        if(isset($form_data['tithe'])){
            array_push($giving, $form_data['tithe']);
        }
        if(isset($form_data['freedom_center'])){
            array_push($giving, $form_data['freedom_center']);
        }
        if(isset($form_data['freedom_foundation'])){
            array_push($giving, $form_data['freedom_foundation']);
        }
        if(isset($form_data['others'])){
            array_push($giving, $form_data['others']);
        }
        if(isset($form_data['thanksgiving'])){
            array_push($giving, $form_data['thanksgiving']);
        }
        if(isset($form_data['pledges'])){
            array_push($giving, $form_data['pledges']);
        }


        $form_data['total_transaction_amount'] = array_sum($giving);




        $form_data['transaction_id'] = uniqid('TPH', false);
        $form_data['cust_id'] = uniqid($form_data['phone_number'], false);
        $form_data['gtpay_tranx_noti_url'] = "https://www.thispresenthouse.org/onlinepay/receipt1";
        $form_data['gt_currency'] = "566";
        $form_data['gt_currency_name'] = "NGN";

        $totamount_kobo = $form_data['total_transaction_amount'] * 100;

        $string_to_hash = $merchant_id.$form_data['transaction_id'].$totamount_kobo.$form_data['gt_currency'].$form_data['cust_id'].$form_data['gtpay_tranx_noti_url'].$hashkey;


        $hash = hash('sha512', $string_to_hash);
        $form_data['hash'] = $hash;

        $fcmb_private_key = "zYERpk1e0OPRUYDg";
        $fcmb_mercid = "04254";
        $fcmb_string_to_hash = $fcmb_mercid.$form_data['cust_id'].$form_data['total_transaction_amount'].'566'.$fcmb_private_key;
        $fmcb_hash = hash('sha256', $fcmb_string_to_hash);

        $form_data['fcmb_hash'] = $fmcb_hash;


        $this->session->set_userdata($form_data);

        $db_form_data = $form_data;
        unset($db_form_data['gtpay_tranx_noti_url']);
        unset($db_form_data['gt_currency']);
        unset($db_form_data['gt_currency_name']);
        unset($db_form_data['hash']);
        unset($db_form_data['fcmb_hash']);

        //var_dump($form_data);
       // exit;

        $this->onlinepay_model->submit_step1($db_form_data);



        redirect(base_url('summary'));
    }


    public function summary(){
        $data['form_data'] = $this->session->all_userdata();
        //var_dump($data['form_data']);
        $this->load->view('pay_step2', $data);
    }


    public function paymentOptions(){
        $data['form_data'] = $this->input->dump_post();

        // $data['form_data'] = $this->session->all_userdata();
       // var_dump($data);
        //exit;
        $this->load->view('pay_step3', $data);
    }


    public function pay(){
        $form_data = $this->input->dump_post();
        //var_dump($form_data);
        if($form_data['vendorName'] == "gtpay"){

        }
    }

    public function do_fcmbfx(){

        $form_data = $this->input->dump_post();

        $data =


        "vpc_AccessCode=".$form_data['vpc_AccessCode']."&".
        "vpc_Amount=".$form_data['vpc_Amount']."&".

        "vpc_Command=".$form_data['vpc_Command']."&".
        "vpc_Currency=".$form_data['vpc_Currency']."&".
        "vpc_Locale=".$form_data['vpc_Locale']."&".
        "vpc_MerchTxnRef=".$form_data['vpc_MerchTxnRef']."&".
        "vpc_Merchant=".$form_data['vpc_Merchant']."&".

        "vpc_OrderInfo=".$form_data['vpc_OrderInfo']."&".


        "vpc_ReturnAuthResponseData=".$form_data['vpc_ReturnAuthResponseData']."&".
        "vpc_ReturnURL=".$form_data['vpc_ReturnURL']."&".
        "vpc_Version=".$form_data['vpc_Version']
        ;

        $form_data['secret'] = strtoupper($form_data['secret']);

        $form_data['sha256_hmac'] = strtoupper(hash_hmac('sha256',$data, pack('H*', $form_data['secret'])));


        $new_data['concat_data'] =  $form_data;

        $this->load->view('migs_submit', $new_data);


        //echo "welcome here";
    }

    public function receipt1(){
            $form_data = $this->input->dump_post();
        $form_data['email_address'] = $this->session->userdata('email_address');
        //var_dump($form_data);
        //exit;

        $db_form_data['tranx_status_code'] = $form_data['gtpay_tranx_status_code'];
        $db_form_data['tranx_status_msg'] = $form_data['gtpay_tranx_status_msg'];
        $db_form_data['bank'] = "GTBank";

        $this->onlinepay_model->submit_transaction_result($db_form_data, $form_data['gtpay_tranx_id']);

        $data['form_data'] = $form_data;
        $this->load->view('receipt_gtpay', $data);
    }

    public function receipt2(){
        $form_data = $this->input->dump_get();
        $form_data['email_address'] = $this->session->userdata('email_address');

       // var_dump($form_data);
        //exit;
        $db_form_data['tranx_status_code'] = $form_data['vpc_TxnResponseCode'];
        $db_form_data['tranx_status_msg'] = $form_data['vpc_Message'];
        $db_form_data['bank'] = "FCMBFX";

        $this->onlinepay_model->submit_transaction_result($db_form_data, $form_data['vpc_MerchTxnRef']);

        $data['form_data'] = $form_data;
        $this->load->view('receipt_fcmbfx', $data);
    }

    public function receipt3(){
        $form_data = $this->input->dump_get();
        $form_data['email_address'] = $this->session->userdata('email_address');

        $db_form_data['tranx_status_code'] = '00';
        $db_form_data['tranx_status_msg'] = $form_data['status'];
        $db_form_data['bank'] = "GlobalPay";

        $this->onlinepay_model->submit_transaction_result($db_form_data, $form_data['txnref']);

        $data['form_data'] = $form_data;
        $this->load->view('receipt_globalpay', $data);
    }


    }