<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
if (! function_exists('SendMail')) {
    function SendMail($email, $name, $to, $subject, $message)
    {
        // get main CodeIgniter object
        $CI =& get_instance();
       
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'godson.ihemere@gmail.com',
            'smtp_pass' => 'excanny2',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );

        $CI->load->library('email', $config);
        $CI->email->set_newline("\r\n");

        $CI->email->from($email, $name);

        $CI->email->to($to);

        $CI->email->subject($subject);
        $CI->email->message($message);

        $CI->email->send();
        
    }
}

?>