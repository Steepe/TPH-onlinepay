<?php

    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 13-Jul-16
     * Time: 5:47 PM
     */
    class onlinepay_model extends CI_Model
    {
        function submit_step1($form_data){
            $this->db->insert('tbl_onlinepay', $form_data);

            if ($this->db->affected_rows() == '1'){
                return true;
            }
        }

        function submit_transaction_result($data, $transaction_id){
            $this->db->where('transaction_id', $transaction_id);
            $this->db->update('tbl_onlinepay', $data);
        }

    }