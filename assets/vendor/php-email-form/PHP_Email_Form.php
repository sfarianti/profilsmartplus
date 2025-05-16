<?php
/**
 * PHP Email Form configuration and class
 */

class PHP_Email_Form {

  public $to;
  public $from_name;
  public $from_email;
  public $subject;
  public $ajax;

  public $message;

  public function add_message($content, $label = '', $newline = true) {
    $this->message .= $label ? "<strong>{$label}:</strong> " : '';
    $this->message .= $content;
    $this->message .= $newline ? "<br>" : '';
  }

  public function send() {
    $headers  = "From: {$this->from_name} <{$this->from_email}>\r\n";
    $headers .= "Reply-To: {$this->from_email}\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    return mail($this->to, $this->subject, $this->message, $headers);
  }

}
?>
