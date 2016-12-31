<?php

// Test send mail with PHP
// TODO encrypt email with Transport Layer Security (TLS)
// Example
// http://cyberstarweb.com/send-encrypted-email-using-certificates-in-php/

// 3rd service
// https://gsuite.google.com/pricing.html
echo 'TEST SENDMAIL SERVER: '.$_SERVER['HTTP_HOST'];
echo '<br />';
$sender_ip = $_SERVER['REMOTE_ADDR'];
$admin = "le.hung@givery.co.jp" ;

if (isset($_REQUEST['email']) && $_REQUEST['email']!="")
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ."\r\n"
                .'This email was sent from IP:'.$sender_ip ."\r\n"
                .'Please, contact admin if something went wrong '.$admin ;
  $from = $_REQUEST['from'] ;

  $headers = 'From: '.$_REQUEST['from'] . "\r\n" .
    'Reply-To: ' .$_REQUEST['from'] . "\r\n" .
    'Bcc: ' .$admin . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($email, $subject, $message, $headers);
  echo "Mail sent";
  echo "<br />";
  echo 'Your IP will be saved: '.$sender_ip;
  }
else {
 //if "email" is not filled out, display the form
 # echo "From:".$from;
#        echo "<br />";
         echo "
        <form method='post' action='index.php'>
        From: <input name='from' type='text' value='".$admin."'><br />
        To Email: <input name='email' type='text'><br />
        Subject: <input name='subject' type='text'><br />
        Message:<br>
        <textarea name='message' rows='15' cols='40'>
        </textarea><br>
        <input type='submit'>
        </form>";
  }
?>
