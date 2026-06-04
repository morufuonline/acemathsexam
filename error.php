<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

ini_set('session.gc_maxlifetime', 86400);
session_start();

require_once("classes/db-class.php");
require_once("includes/functions.php");

function detectCurrUserBrowser($a,$b,$c){
$msie = stripos($_SERVER["HTTP_USER_AGENT"], "msie") ? true : false;
if($msie){
$msiePosition = stripos($_SERVER["HTTP_USER_AGENT"], "msie");
$msiePositionNew = $msiePosition+5;
$versionNumber = substr($_SERVER["HTTP_USER_AGENT"],$msiePositionNew,1);
if($versionNumber <= $c){
echo $a;
}
else{
echo $b;
}
}
else{
echo $b;
}
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
<base href="<?php directory(); ?>" target="_top">
<meta charset="UTF-8" />
<meta name="description" content="<?php echo $full_gen_name; ?>"/>
<meta name="robots" content="noodp"/>
<meta name="keywords" content="<?php echo $full_gen_name; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>Error - <?php echo $full_gen_name; ?></title>

<meta property="og:url" content="<?php directory(); ?>" /> 
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $full_gen_name; ?>" /> 
<meta property="og:description" content="<?php echo $full_gen_name; ?>" /> 
<meta property="og:image" content="<?php directory(); ?>images/general-reliance-wisdom-digital-logo.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="210" />
<meta property="og:image:height" content="210" />

<link rel="shortcut icon" href="images/favicon.png"/>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script>
<!--
var img1 = new Image();
img1.src = "images/home_bg.jpg";
//-->
</script>

<style>
<!--
.error-header, .error-header *{
font-size:50px;
color:#900;
}
.error-message{
font-size:50px;
}
-->
</style>

</head>
<?php detectCurrUserBrowser('<table width="100%"><tr><td>','',7); ?>
<body>

<div class="header-wrapper header-wrapper1" id="bodyDiv">
<div class="header header1"></div>
</div>

<div class="header-wrapper header-wrapper2">
<div class="header header2">
<button class="collapse"><span></span><span></span><span></span></button>
<ul>
<li><a href="<?php directory(); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li><a href="privates/testimonials/"><i class="fa fa-comments" aria-hidden="true"></i> Testimonials</a></li>
<li><a href="privates/about-the-author/"><i class="fa fa-user" aria-hidden="true"></i> About Morufu Bello</a></li>
<?php if(isset($_SESSION["admin_login"])){  ?>
<li><a href="<?php echo $admin; ?>profile/"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
<li><a onClick="javascript:my_confirm('Logout Confirmation','Are you sure you want to log out?','<?php echo $directory . $admin; ?>index/logout/1/');"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
<?php } ?>
</ul>
</div>
</div>

<div class="container both-border" style="height:500px;"> 

<div class="error-header"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error</div>

<div class="error-message">Hello! We are sorry. Your request is not available.</div>

</div>

<?php require_once("includes/footer.php"); ?>