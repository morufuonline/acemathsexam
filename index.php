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
<title>Home - <?php echo $full_gen_name; ?></title>

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
<li><a href="<?php directory(); ?>" class="current"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li><a href="privates/testimonials/"><i class="fa fa-comments" aria-hidden="true"></i> Testimonials</a></li>
<li><a href="privates/about-the-author/"><i class="fa fa-user" aria-hidden="true"></i> About Morufu Bello</a></li>
<?php if(isset($_SESSION["admin_login"])){  ?>
<li><a href="<?php echo $admin; ?>profile/"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
<li><a onClick="javascript:my_confirm('Logout Confirmation','Are you sure you want to log out?','<?php echo $directory . $admin; ?>index/logout/1/');"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
<?php } ?>
</ul>
</div>
</div>

<div class="header-wrapper header-wrapper3">
<div class="header header3">

<div class="col-md-7">
<img src="images/front-man.png">
</div>
<div class="col-md-5">
<img src="images/ame-book.png">
</div>

</div>
</div>


<div class="home-body-wrapper"> 
<div class="container"> 

<div class="col-md-8">
<div class="body-header">You are <span>Welcome</span></div>

<p>Morufu Babatunde Bello is an academia per excellence, an experienced professional mathematics teacher for over 20 years. An enthusiastic and determined teacher with working experiences gained from various schools in United Kingdom and abroad. He is currently a private tutor at Education Wise Limited and Funder and Chief Executive Director of Personal Success, an expert in one-on-one tutoring at all levels of education, a highly devoted, indefatigable and focused teacher who specialises in Mathematics within Key Stages 2, 3 and 4; and also an expert in Adult Education, especially; Driving Theory Test, Citizenship, Skill for Life, Customer service and Employability.  He grasps new concepts, innovations and creativity quickly to problems solving. A motivational teacher, who is adept at creating and managing a productive environment to enable student attain and achieve their full potential. He adopts self-possessed approach to customer liaison by using excellent communication and interpersonal skills to build mutually beneficial internal and external relationships. He is a recipient of many awards and commendations.</p>

<p>Has an academia, he belongs to different academic unions and associations which includes; National Union of Teacher (NUT), UK; The Teachers' Union (NASUWT); Association of Teachers and Lecturers (ATL), UK; Mathematical Association (MA); National Teaching Council (NTC), UK and GTC – registered.</p>

<div class="body-header align-center">Receive These FREE Gifts When You Get<br>
<span>"Ace Maths Exam"</span></div>

<p>
<table class="table table-hover table-striped checked-table">
<tbody>
<tr><td style="width:20px;"><i class="fa fa-check" aria-hidden="true"></i></td><td>Subscribe to our newsletters and get free update that would aid your understanding of mathematics</td></tr>
<tr><td><i class="fa fa-check" aria-hidden="true"></i></td><td>Buy this book (Ace Maths Exam) and get a free video mathematics tutorial link which will be sent to you via your email.</td></tr>
<tr><td><i class="fa fa-check" aria-hidden="true"></i></td><td>Amazing gift awaits your purchase of ace maths exam! Get 50 pounds worth of maths lessons and 20 pounds downloadable maths worksheet from the same author.</td></tr>
</tbody>
</table>
</p>

<p>Now, why are we giving you these bonuses? Simple: Morufu's vision is to give everyone he can the tools they need to have proper understanding of mathematics... So Order Your Copy of "Ace Maths Exam" right now to receive these FREE gifts...</p>

</div>
<div class="col-md-4">

<div class="body-header">Order the book <span>and receive free book</span></div>

<p><a href="https://www.amazon.com/dp/1517261333" target="_blank"><button class="gen-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order now</button></a></p>

<div class="body-header">Get <span>Free Stuff</span></div>

<div class="general-result"></div>

<div class="subscribe">
<form  action="<?php directory(); ?>privates/process-data/" class="newsletter" method="post" runat="server" autocomplete="off" enctype="multipart/form-data">

<input type="hidden" name="newsletter" value="1">
<div class="subscription-details">Just submit the form below to receive valuable free gifts</div>

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa"><label for="name">Name</label></i></span>
<input type="text" name="name" id="name" class="form-control" value="" placeholder="Your name" required>
</div>

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa"><label for="email">Email</label></i></span>
<input type="text" name="email" id="email" class="form-control" value="" placeholder="Your email" required>
</div>
<div style="text-align:right">
<button  name="subscribe" id="subscribe"><i class="fa fa-send" aria-hidden="true"></i> Subscribe</button>
</div>	
</form>
</div>

</div>

</div>
</div>

<?php require_once("includes/footer.php"); ?>