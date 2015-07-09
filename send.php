<?php
$oops = "Location: http://meadomus.net/oops.php";
$thx = "Location: http://meadomus.net/thanks.php";

function nl2br2($string) { 
  $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string); 
  return $string; 
}
function clean($input) {
  if (get_magic_quotes_gpc()) { $input = stripslashes($input); }
  $input = htmlentities($input, ENT_QUOTES, "UTF-8");
  $input = nl2br2($input); //nullify header injection
  return $input;
}

if($_POST['comment']) {
  header($oops);
} else {
  $phone = clean($_POST['phone']);
  $match = preg_match("/\d{3}-\d{3}-\d{4}/", $phone); //0 if no match
  if ($match != true) {
    header($oops);
  } else {
    $first = clean($_POST['first']);
    $last = clean($_POST['last']);
    $email = clean($_POST['email']);
    $msg = clean($_POST['msg']);
    
    $mail_to = file_get_contents('config/addr.txt');
    $subject = 'Message from visitor at meadomus.net.';
    
    $body = 'From: '.$first." ".$last."\n";
    $body .= 'E-mail: '.$email."\n";
    $body .= 'Phone: '.$phone."\n";
    $body .= 'Message: '.$msg;
    $body = nl2br2($body); //so it looks nice
    
    $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
    if (!$email) { $email = "none"; }
    $headers .= 'From: '.$email."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $mail_status = mail($mail_to, $subject, $body, $headers);

    if ($mail_status) {
      header($thx);
    } else {
      header($oops);
    }
  }
}
?>