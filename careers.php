<html>
	<head>
		<title>Mentor Tech Source - Careers</title>
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
				    				<li><a class="page-scroll" href="aboutus.html">About Us</a></li>
					    			<li><a class="page-scroll" href="services.html">Services</a></li>
						    		<li><a class="page-scroll" href="clients.html">Our Clients</a></li>
							    	<li><a class="page-scroll active" href="contactus.html">Locations</a></li>
									<li><div class="page-scroll socialicons">
											<a href="https://www.facebook.com/mentortechsource/" target="_blank"><img src="images/logo_facebook.png" alt="logo_facebook"></a>
											<a href="https://www.linkedin.com/in/mentorrecruitment" target="_blank"><img src="images/logo_linkedin.png" alt="logo_linkedin"></a>
											<a href="#" data-toggle="modal" data-target="#MTSContact"><img src="images/logo_call.png" alt="logo_call"></a>
											<a href="index.php#request"><img src="images/logo_email.png" alt="logo_email"></a>
										</div> <!-- /.socialicons -->
									</li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container -->
					</nav>
					<!-- Modal -->
					<div class="modal fade" id="MTSContact" role="dialog">
						<div class="modal-dialog modal-sm">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 class="modal-title">Call Us @</h3>
								</div>
								<div class="modal-body">
									<h4>Office : +1 (905) 530-2280</h4>
								</div>
							</div>
						</div>
					</div>
		            	<div class="video-container">
		        		<video autoplay loop class="fillWidth">
			        		<source src="videos/In-And-Out/MP4/Meeting-Room.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		     	         		<source src="videos/In-And-Out/WEBM/Meeting-Room.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
				 	</video>
				 	<!-- <img src="images/banner/apply_jobs_banner.jpg" alt="apply_jobs_banner"> -->
				</div>
				<!-- /.video-container -->
                    		<div class="text">
					    <h1>Apply for Jobs</h1><p></p>
				</div>
				<!-- /.text Header Headings -->
	    		</div>
	    		<!-- /.Wrapper -->
		</section>
		<!-- /#banner -->
		<section id="servicespg">
        		<div class="subnav"><center>
	                	<a href="it_staffing.html">IT Staffing</a>
				<a href="apply_jobs.html">Apply Jobs</a>
				<a href="upload_resume.html">Upload Resume</a><center>
	    		</div><!-- /.sub_nav sub navigation -->
	    		<div>
	    			<center><h1> Positions Available </h1></center>
	    		</div>
	    		<div>
					<table class = "table">
<thead>
    <tr>
        <td><center><strong>Job Id</strong></center> </td>
        <td><center><strong>Job Title</strong></center> </td>
        <td><center><strong>Job Type</strong> </center></td>
        <td><center><strong>Experience</strong> </center></td>
        <td><center><strong>Apply</strong></center></td>
    </tr>
</thead>
<tbody>
<?php
    include_once("dbconnection.php");
    $query="SELECT * FROM jobs";
    $results = mysqli_query($bd,$query);
    $a = 0;

    while($row = mysqli_fetch_assoc($results)) {
      $a++;
      echo '<script type = "text/javascript">c++;</script>'
    ?>
        <tr>
            <td><center><?php echo $row['jobId']?></center></td>
            <td><center><?php echo $row['title']?></center></td>
            <td><center><?php echo $row['jobtype']?></center></td>
            <td><center><?php echo $row['experience']?></center></td>
            
            <td>
			<?php
			 print '<center><a href="apply_jobs.php?jobId='.$row['jobId'].'">Apply</a></center>';  
			 ?>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table
        		</div>

		</section><!-- /#servicespg Services Page Section Closed-->

		<section id="footer">
			<div class="row"><div class="col-sm-12">
				<p>
	    				<a href="index.php">Home </a>|<a href="aboutus.html"> About Us </a>|<a href="sitemap.html"> Sitemap </a>|<a href="clients.html"> Partners </a>|<a href="services.html"> Services </a>|<a href="contactus.html"> Contact Us </a>
				</p>
				<p>&copy;2016 Mentor Tech Source</p>
			</div></div>
		</section>
	</body>

</html>
