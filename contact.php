<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zMarketing</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body>
<div class="wrap-body">

	<!--////////////////////////////////////Header-->
	<header class="zerogrid">
		<div class="logo"><img src="images/logo.png" alt=""/></div>
		<div id='cssmenu' class="align-center">
			<ul>
			   <li><a href='index.html'><span>Home</span></a></li>
			   <li class=' has-sub'><a href='#'><span>Menu</span></a>
				  <ul >
					 <li class='has-sub'><a href='#'><span>Item 1</span></a>
						<ul>
						   <li><a href='#'><span>Sub Item</span></a></li>
						   <li class='last'><a href='#'><span>Sub Item</span></a></li>
						</ul>
					 </li>
					 <li class='has-sub'><a href='#'><span>Item 2</span></a>
						<ul>
						   <li><a href='#'><span>Sub Item</span></a></li>
						   <li class='last'><a href='#'><span>Sub Item</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>
			   <li><a href='single.html'><span>About</span></a></li>
			   <li><a href='archive.html'><span>Blog</span></a></li>
			   <li class='last active'><a href='contact.html'><span>Contacts</span></a></li>
			</ul>
		</div>
	</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<div class='embed-container maps'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
				</div>
				<div class="zerogrid">
					<div class="contact">
						<h3>Contact Information</h3>
						<div class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									<i class="fa fa-home"></i>
									<h4>Address:</h4>
									<span>The Company Name Inc. 9870 St Vincent Place,Glasgow, DC 45</span>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<i class="fa fa-phone"></i>
									<h4>Address:</h4>
									<span>800-2345-7892;<br/>800-2345-7893</span>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<i class="fa fa-envelope"></i>
									<h4>Address:</h4>
									<span>mail@demolink.org</span>
								</div>
							</div>
						</div>
						<h3>Contact Form</h3>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="contact.php">
								<label class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</label>
								<label class="row">
									<div class="wrap-col">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>
								</label>
								<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
						
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						<span class="phone">CALL US:800-2345-6789</span><br/>
						<span>My Company , 4578 Marmora Road,Glasgow D04 89GR</span><br/>
						<span>Email: info@demolink.org</span><br/>
						<span>Copyright 20xx - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a></span>
					</div>
				</div>
				<div class="col-1-3">
					<div class="wrap-col">
						<ul class="social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
	
</div>
</body>
</html>