<?php
/**
 * Created by PhpStorm.
 * User: Indushan Wijekoon
 * Date: 2/22/2018
 * Time: 10:22 AM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Sms
{
    public function dialogSms($params)
    {
        /**
        +-------------------------+---------------------------------------------+
        |         Response        |                 Description                 |
        +-------------------------+---------------------------------------------+
        | 0                       | Success                                     |
        +-------------------------+---------------------------------------------+
        | Parameter Missing       | One or more required parameter is missing   |
        +-------------------------+---------------------------------------------+
        | Invalid destination     | Invalid Receiver MSISDN                     |
        +-------------------------+---------------------------------------------+
        | Internal Error 500      | Internal server error                       |
        +-------------------------+---------------------------------------------+
        | Authentication failed   | Invalid password provided                   |
        +-------------------------+---------------------------------------------+
        | MT not allowed          | User has no privilege to send messages      |
        +-------------------------+---------------------------------------------+
        | Invalid message length  | Message length is exceed the allowed length |
        +-------------------------+---------------------------------------------+
        | Sending Failed          | SMS sending failed                          |
        +-------------------------+---------------------------------------------+
        | Invalid From Number     | Invalid Sender Number                       |
        +-------------------------+---------------------------------------------+
         */

        $dialog_sms_gateway = "https://cpsolutions.dialog.lk/index.php/cbs/sms/send";

        $params['q'] = "15523052554051"; //Authentication password
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$dialog_sms_gateway);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $output=curl_exec($ch);

        curl_close($ch);
        return $output;
    }


    function sendSms($params)
    {
        $data = array();
        $logger = array();
        $params['destination'] = array_unique($params['destination']);
        foreach ($params['destination'] as $key => $value) {
            $data['destination'] = $value;
            $data['message'] = $params['message'];
            $response = $this->dialogSms($data);

            if($response == 'Internal Error 500' || $response == 'Sending Failed'){
                for ($x = 0; $x <= 2; $x++) {
                    $response = $this->dialogSms($data);
                    if($response == '0'){
                        break; #breaks out of a loop
                    }
                }
            }elseif ($response == '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0/'){
                for ($x = 0; $x <= 4; $x++) {
                    $response = $this->dialogSms($data);
                    if($response == '0'){
                        break; #breaks out of a loop
                    }
                }
            }
            $logger['entries'][$key] = array('recipient'=>$value,'response'=>$response);
        }
        $logger['message'] = $params['message'];

//        print_r($logger);
//        die();
        return $logger;
    }

}