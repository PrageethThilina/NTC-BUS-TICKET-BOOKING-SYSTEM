<?php
/**
 * Created by PhpStorm.
 * User: Indushan Wijekoon
 * Date: 2/15/2018
 * Time: 5:22 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Mailjet
{
    protected $to;
    protected $subject;
    protected $message;
    protected $attachment;
    private $_CI; // make a private class variable here.

    public function __construct()
    {

    }

    public function to($email)
    {
        $this->to = $email;
        return $this;
    }

    public function subject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function send()
    {
        # This calls sends an email to the given recipient.
        $username = '1948e13718666ed4ddb41d01b11442bf';
        $password = 'dee56682cd04937ab40303661d8d9103';
        $mailjet_api = "https://api.mailjet.com/v3/send";

        $payload = array(
            'FromEmail' => 'prageeththilina8@gmail.com',
            'FromName' => 'TMS Service mail',
            'Recipients' => $this->to,
            'Subject' => $this->subject,
            //'Html-part' => $message,
        );
        $payload = json_encode($payload);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $mailjet_api);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        return true;
    }
}