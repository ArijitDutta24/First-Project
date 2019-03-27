<?php
class Email_model extends CI_Model {

public function __construct(){
  $this->load->library('email');
 }


 function sendVerificatinEmail($email,$verificationText){
  
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'localhost',
     'smtp_port' => 465,
     'smtp_user' => 'amritas@digitalaptech.com', // change it to yours
     'smtp_pass' => 'hiVf8eF7swJ2', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
  
  
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");
  $this->email->from('admin@steelbay.com', "Admin Team");
  $this->email->to($email);  
  $this->email->subject("Email Verification");
  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n <?php echo base_url()?>/registration/verify/".$verificationText."\n"."\n\nThanks\nAdmin Team");
  $this->email->send();
  
 }
}
?>