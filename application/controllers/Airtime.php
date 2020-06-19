<?php
ob_start();
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '-1');
defined('BASEPATH') OR exit('No direct script access allowed');
class Airtime extends CI_Controller {
    function __construct() {
        parent::__construct();
        // ini_set('memory_limit','-1');
        $this->load->helper('form');
        $this->load->library('curl');

        // $this->load->model('model_insertvalues');
        // $this->load->model('model_getvalues');
        // $this->load->model('model_deletevalues');
        // $this->load->model('model_updatevalues');
        // if (!isset($_SESSION['username']) || !isset($_SESSION['usertype'])) {
        //     $this->session->set_flashdata("error", " <div class='alert alert-danger'><h6>You have to login to view this page</h6></div> ");
        //     redirect('admin/index');
        // }
    }

    public function index(){
        $curl = curl_init();
        if(isset($_POST['submit'])){
            $PhoneNumber = $_POST['PhoneNumber'];
            $Amount = $_POST['Amount'];

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://sandbox.wallets.africa/bills/airtime/purchase",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{\r\n  \"Code\": \"airtel\",\r\n  \"Amount\": \"$Amount\",\r\n  \"PhoneNumber\": \"'.$PhoneNumber'\",\r\n  \"SecretKey\": \"hfucj5jatq8h\"\r\n}",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            'Authorization: Bearer uvjqzm5xl6bw'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

         $tranx = json_decode($response,true);

         $hey =   $tranx['Message'];

        $this->session->set_flashdata("error", '<div class="alert alert-danger">'.$hey.'</div>');
    }
        $this->load->view('add');


    }

}
