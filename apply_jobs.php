<html>
	<head>
		<title>Mentor Tech Source - Apply Jobs</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<script type="text/javascript" src="js/jscript.js"></script> 		
		<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/>
	       <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="canonical" href="http://www.mentortechsource.com/apply_jobs/"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="description" itemprop="description" content="Mentor Tech Source is a leading IT service provider that provides Staff Augumentation, Managed Services, Digital Lab services and many more to leading IT enterprises. We promise exceptional service commitment," />

    <meta name="keywords" itemprop="keywords" content="Canada IT, IT support, IT services, IT support Toronto, private server, Staffing Solutions, Mentor, Mentor Tech Source, IT staff provider, Toronto-based IT, IT management firm, IT support companies, IT consulting, Outsourced IT, VoIP Toronto, Toronto IT service,Canada IT Consulting, VOIP, IT Jobs" />

    <meta property="og:title" content="Mentor" />
    <meta property="og:url" content="http://www.mentortechsource.com/" />
    <link rel='shortcut icon' href='images/fevicon16.png' type='image/x-icon'/>
    <meta property="og:site_name" content="Mentor techSource Inc." />
	
	    	<script src="js/jquery.js"></script>
	        <!-- Bootstrap Core JavaScript -->
	        <script src="js/bootstrap.min.js"></script>
	        <!-- Scrolling Nav JavaScript -->
	        <script src="js/jquery.easing.min.js"></script>
	</head>
	<body>
		<section id="banner">
			<div class="wrapper">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        				<div class="container">
            					<div class="navbar-header page-scroll">
                					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					                    	<span class="sr-only">Toggle navigation</span>
					                    	<span class="icon-bar"></span>
					                    	<span class="icon-bar"></span>
					                    	<span class="icon-bar"></span>
                					</button>
               						<a class="navbar-brand page-scroll" href="index.php"><img id="logo" src="images/mentor_tech_logo.png" alt="mentor_tech_source_logo"></a>
            					</div>
            					<!-- Collect the nav links, forms, and other content for toggling -->
            					<div class="collapse navbar-collapse navbar-ex1-collapse" style="float:right;">
                					<ul class="nav navbar-nav">
					                	<!-- Hidden li included to remove active class from about link when scrolled up past about section
					                	--><li><a class="page-scroll" href="index.php">Home</a></li>
				    				<li><a class="page-scroll" href="aboutus.php">About Us</a></li>
					    			<li><a class="page-scroll" href="services.php">Services</a></li>
						    		<li><a class="page-scroll" style="color:blue;" href="careers.php">Careers</a></li>
							    	<li><a class="page-scroll active" href="contactus.php">Locations</a></li>
									<li><?php include_once("includes/sicons.php"); ?></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container -->
					</nav>
					<!-- Modal Starts -->
					<?php include_once("includes/modal.php"); ?>
		            <!-- / Modal Ends -->

		        	<div class="video-container" style="position:relative;margin-top:100px;height:100px;">
					    <center><h1>Apply for Jobs</h1></center>
							<!-- <div class="text">
				            </div> -->
		        	<!--    <video autoplay loop class="fillWidth">
			        	    <source src="videos/In-And-Out/MP4/Meeting-Room.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		     	       		<source src="videos/In-And-Out/WEBM/Meeting-Room.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
				 	    </video>-->
				 	        <!-- <img src="images/banner/apply_jobs_banner.jpg" alt="apply_jobs_banner"> -->
				    </div>
				<!-- /.video-container -->
                    
				<!-- /.text Header Headings -->
	    		</div>
	    		<!-- /.Wrapper -->
		</section>
		<!-- /#banner -->
		<section id="servicespg">
        		<div class="subnav"><center>
					<a href="careers.php">Mentor Jobs</a>
					<a href="upload_resume.php" class="current">Upload Your Resume</a><center>
	    		</div><!-- /.sub_nav sub navigation -->
	    		<div>
	    			<center><h1> Mentor Careers </h1></center>
	    		</div>
	    		<div>
					<?php 
					include_once("apply_jobs_form.php");?></div>
        		</div>

		</section><!-- /#servicespg Services Page Section Closed-->
		<!-- footer --><?php include_once("includes/footer.php"); ?>
	</body>

</html>
