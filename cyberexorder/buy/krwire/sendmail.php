<?php
# ----------------------------------------------------
# -----
# ----- This script was generated by PHP-Form Wizard 1.2.6 on 2011/12/04 at 19:17:53
# -----
# ----- http://www.tools4php.com
# -----
# ----------------------------------------------------


// Receiving variables
@$pfw_ip= $_SERVER['REMOTE_ADDR'];
@$name = addslashes($_POST['name']);
@$amount = addslashes($_POST['amount']);
@$currency = addslashes($_POST['currency']);
@$SenderName = addslashes($_POST['SenderName']);
@$email = addslashes($_POST['email']);

// Validation
if (strlen($name) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($amount) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($SenderName) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($email) == 0 )
{
header("Location: error.htm");
exit;
}

//Sending Email to form owner
$pfw_header = "From: $email\n"
  . "Reply-To: $email\n";
$pfw_subject = "Paid report Domestic deposit in Korea";
$pfw_email_to = "admin@cyberex.jp";
$pfw_message = "Visitor's IP: $pfw_ip\n"
. "name: $name\n"
. "amount: $amount\n"
. "currency: $currency\n"
. "SenderName: $SenderName\n"
. "email: $email\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

//Sending auto respond Email to visitor
$pfw_header = "From: admin@cyberex.jp\n"
  . "Reply-To: admin@cyberex.jp\n";
$pfw_subject = "Your order has been Approved !!";
$pfw_email_to = "$email";
$pfw_message = "Dear $name\n"
. "\n"
. "We review check in our bank account. \n"
. "\n"
. "To check your order status and transaction on this page\n"
. "https://cyberex.jp/tracking/\n"
. "\n"
. "\n"
. "Thanks and best regards\n"
. "\n"
. "+-----------------------------------------------------+\n"
. " Cyber Exchange Service Japan\n"
. " http://www.cyberex.jp/\n"
. " Mail admin@cyberex.jp\n"
. " Member of DGEC\n"
. " http://www.gdcaonline.com/business.php?memberid=167\n"
. "+-----------------------------------------------------+";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

header("Location: completed.htm");

?>