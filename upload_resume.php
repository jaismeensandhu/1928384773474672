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
						    		<li><a class="page-scroll" href="clients.php">Our Clients</a></li>
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
		            	<div class="video-container">
		        		<video autoplay loop class="fillWidth">
			        		<source src="videos/In-And-Out/MP4/Meeting-Room.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		     	         		<source src="videos/In-And-Out/WEBM/Meeting-Room.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
				 	</video>
				 	<!-- <img src="images/banner/apply_jobs_banner.jpg" alt="apply_jobs_banner"> -->
				</div>
				<!-- /.video-container -->
                    		<div class="text">
					    <h1>Upload Resume</h1><p></p>
				</div>
				<!-- /.text Header Headings -->
	    		</div>
	    		<!-- /.Wrapper -->
		</section>
		<!-- /#banner -->
		<section id="servicespg">
        		<div class="subnav"><center>
	            <a href="it_staffing.php">IT Staffing</a>
				<a href="apply_jobs.php">Apply Jobs</a>
				<a href="upload_resume.php">Upload Resume</a><center>
	    		</div><!-- /.sub_nav sub navigation -->
	    		<div>
	    			<center><h1> Mentor Careers </h1></center>
	    		</div>
	    		<div>
				<form id="contact" action="apply_jobs_insert.php" method="post" enctype="multipart/form-data"><center>
            <table class="jobsform">
             <?php
             $jobId = "0";
             ?>
                <tr>
                    <td>Job ID</td>
                    <td>
                    <?php
                    print '<input type="text" name="jobId" id="jobId" value="'.$jobId.'"/>'; 
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="name" id="name"/></td>
                </tr>
                <tr>
                    <td>Email ID</td>
                    <td><input type="text" name="email" id="email" onClick="return chkmail();"/></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><input type="text" name="contactNumber" id="contactNumber"/></td>
                </tr>
                </tr>
                    <tr><td>Country</td>
                    <td><input type="text" name="country" id="country"/></td>
                </tr>
                <tr>
                    <td>Expected Salary</td>
                    <td><input type="text" name="expectedSalary" id="expectedSalary"/></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><input type="text" name="experience" id="experience"/></td>
                <tr>
                    <td>Cover Letter</td>
                    <td><textarea name="coverLetter" id="coverLetter"></textarea></td>
                </tr>
                <tr>
                    <td>Upload Resume</td>
                    <td><input type="file" name="resume" id="resume"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><input type="submit" name="submit" value="Submit"/></center>
                    </td>
                </tr>
            </table>
        </center></form>
        		</div>

		</section><!-- /#servicespg Services Page Section Closed-->
		<!-- footer --><?php include_once("includes/footer.php"); ?>
	</body>

</html>
