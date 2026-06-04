<?php require_once("../includes/header.php"); ?>

<div class="home-body-wrapper"> 
<div class="container"> 

<style>
<!--
.author{
float:left;
margin-right:10px;
margin-bottom:10px;
padding:5px;
border:1px solid #eee;
}
-->
</style>

<div class="col-md-8">
<div class="body-header">About <span>Morufu Bello</span></div>

<img src="images/testimonies/jackcanfield.jpg" class="author">

<p>Morufu Babatunde Bello is an academia per excellence, an experienced professional mathematics teacher for over 20 years. An enthusiastic and determined teacher with working experiences gained from various schools in United Kingdom and abroad. He is currently a private tutor at Education Wise Limited and Funder and Chief Executive Director of Personal Success, an expert in one-on-one tutoring at all levels of education, a highly devoted, indefatigable and focused teacher who specialises in Mathematics within Key Stages 2, 3 and 4; and also an expert in Adult Education, especially; Driving Theory Test, Citizenship, Skill for Life, Customer service and Employability.  He grasps new concepts, innovations and creativity quickly to problems solving. A motivational teacher, who is adept at creating and managing a productive environment to enable student attain and achieve their full potential. He adopts self-possessed approach to customer liaison by using excellent communication and interpersonal skills to build mutually beneficial internal and external relationships. He is a recipient of many awards and commendations.</p>

<p>Has an academia, he belongs to different academic unions and associations which includes; National Union of Teacher (NUT), UK; The Teachers' Union (NASUWT); Association of Teachers and Lecturers (ATL), UK; Mathematical Association (MA); National Teaching Council (NTC), UK and GTC – registered.</p>

<p>He has his M.A in Education (Teaching and Learning) in 2012 at Hope University UK; PGCE/QTS;  Mathematics Secondary at Keele University, UK (2009), PGD: Computer Science at Abubakar Tafawa Balewa University; Nigeria (2002), IELTS: English Language (2004), BSc. Hons: Education and Mathematics at University of Ilorin Kwara State Nigeria (1998). He has added to knowledge by attaining different Trainings like Level 2 in Health and Social Care, Level 2 in Computer Maintenance, Certificate in Food and Hygiene, Certificate in Health & Safety and Certificate in Fire Management and Control. Also have IT Proficiency in Word, Excel, Internet, Email, Interactive White Board (Active studio Professional), Graphic Calculator, Autograph, Geometric Sketch Pad, Power Point and Geogebra.</p>

<p>Morufu Babatunde Bello hails from the Aresa lineage in Ibadan, Oyo state, Nigeria. He speaks English and Yoruba Fluently and also good at reading and writing Arabic language. If he is not teaching, he spends his leisure time playing Table Tennis, Football and spending time with friends and family. He is married and blessed with beautiful kids.</p>

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

<?php require_once("../includes/footer.php"); ?>