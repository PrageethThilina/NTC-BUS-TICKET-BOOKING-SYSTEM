<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


class Notification
{
    public function getFormattedMessage()
    {

        $message = array();


        $message['email_subject'] = 'Successfully Register to NTC Sri Lanka';
        $message['email_body'] = '<H3>Thank you for Register to NTC Sri Lanka</H3>';
        
        return $message;

    }


}