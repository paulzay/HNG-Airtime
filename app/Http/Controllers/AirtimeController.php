<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirtimeController extends Controller
{
    //


  public  function airtime(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sandbox.wallets.africa/account/resolvebvn/details",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{\r\n  \"bvn\": \"22231485915\",\r\n  \"secretKey\": \"apisecret\"\r\n}",
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

    }
}
