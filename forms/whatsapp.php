<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'financeiro@clinicathaysebrito.com.br';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $receiving_email_address;
  $contact->from_email = $receiving_email_address;
  $contact->subject = 'Celular para lista de transmissão de WhatsApp';

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['phone'], 'WhatsApp');

  echo $contact->send();
?>
