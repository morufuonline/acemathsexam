<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
ini_set('session.gc_maxlifetime', 86400);
session_start();

require_once("../classes/db-class.php");
require_once("../includes/functions.php");

$name = tp_input("name");
$email = tp_input("email");
$newsletter = tp_input("newsletter");

///////////////Newsletter///////////////////////
if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($newsletter) && !empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){

$result = $db->select("newsletter", "Where email = '{$email}'", "*", "");

if(count_rows($result) < 1){

$data_array = array(
"name" => "'$name'",
"email" => "'$email'"
);

$act = $db->insert($data_array, "newsletter");

if($act){

$to = "{$email}";
$subject = "Newsletter Subscription";
$message = "<p>Thank you for signing up for subscribing for our newsletters.</p>
<p>We will keep you updated as soon as possible.</p>";
$message = message_template();
$headers = "{$gen_name} <no-reply@{$domain}>";
send_mail();

echo "<div class='success'>Sales letter subscription was successful.</div>";
}else{
echo "<div class='not-success'>Error occured.</div>";
}
}else{
echo "<div class='not-success'>Not Successful. Email already exists.</div>";
}

}

if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($newsletter) && (empty($name) || empty($email))){
echo "<div class='not-success'>Not Successful. All fields are required.</div>";
}else if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($newsletter) && !empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "<div class='not-success'>Not Successful. Invalid email format.</div>";
}
///////////////////////////////////////////
?>