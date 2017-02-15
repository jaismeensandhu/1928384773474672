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
				    				<li><a class="page-scroll" href="aboutus.php">About Us</a></li>
					    			<li><a class="page-scroll" href="services.php">Services</a></li>
						    		<li><a class="page-scroll active" style="color:blue;" href="careers.php">Careers</a></li>
							    	<li><a class="page-scroll" href="contactus.php">Locations</a></li>
                                    <li><?php include_once("includes/sicons.php"); ?></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container -->
					</nav>
                
					<!-- Modal Contact -->
					<?php include_once("includes/modal.php"); ?>
					<!-- / Modal Ends -->

		        	<div class="video-container" style="position:relative;margin-top:100px;height:100px;">
					    <center><h1>Apply for Jobs</h1></center>
				    </div>
				<!-- /.video-container -->
                    
				<!-- /.text Header Headings -->
	    		</div>
	    		<!-- /.Wrapper -->
		</section>
		<!-- /#banner -->
		<section id="servicespg">
        		<div class="subnav"><center>
	            	<a href="careers.php" class="current">Mentor Jobs</a>
					<a href="upload_resume.php">Upload Your Resume</a><center>
	    		</div><!-- /.sub_nav sub navigation -->
	    		<div>
	    		<center><h3>Job Description</h3></center>
			</div>
			<div>
				<center><table class="table table-striped" style="font-size:1.1em;border:1px solid #D3D3D3;width:auto;margin:1% 2% 1% 2%;">
					<?php
						include_once("dbconnection.php");
							//if (isset($_GET['applicationId'])){
							$jobId=$_GET['ID'];
							$rquery="SELECT * FROM jobs where jobId =  '" .$jobId. "' ";
							$rresults = mysqli_query($bd,$rquery);
							$row = mysqli_fetch_assoc($rresults);
							$desciption = nl2br($row['description']);
							$company="<br><br><b>Why Mentor Tech Source?</b> <br><br><p style='line-height:140%;'>Mentor Tech Source is the result of 25 plus years of extensive experience in providing Hybrid Model Staffing and Engineering Services in the ever evolving Software Economy.<br>
							<ul>
								<li>We have a unique hybrid contingent staffing service composed of domestic and international sourcing</li>
								<li>We have a 24/7 recruitment cycle due to the fact that Mentor has offices in many different time zones</li>
								<li>We work day and night to provide our consultants and employees with best working environment</li>
							</ul><p>"
					?>
					<tbody>
					<?php 
						if($row['jobId']) 
						{ 
					?>
						<tr>
							<td><strong>Job ID</strong> </td>
							<td><?php echo $row['jobId']?></td>
						</tr>
					<?php 
						} 
						if($row['title']) 
						{ 
					?>
						<tr>
							<td><strong>Title</strong> </td>
							<td><?php echo $row['title']?></td>
						</tr>
					<?php 
						} 
						if($row['jobtype']) 
						{ 
					?>
						<tr>
							<td><strong>Job Type</strong> </td>
							<td><?php echo $row['jobtype']?></td>
						</tr>
					<?php 
						} 
						if($row['addition_date']) 
						{
							$dt = $row['addition_date'];
					?>
						<tr>
							<td><strong>Posted On</strong> </td>
							<td><?php echo date("F j, Y ", strtotime($row["addition_date"])); ?></td>
						</tr>
					<?php 
						} 
						if($row['location']) 
						{ 
					?>
						<tr>   
							<td><strong>Location</strong></td>
							<td><?php echo $row['location']?></td>
						</tr>
					<?php 
						} 
						if($row['experience']) 
						{ 
					?>
						<tr>        
							<td><strong>Experience</strong> </td>
							<td><?php echo $row['experience']?></td>
						</tr>
					<?php 
						} 
						if($row['positions']) 
						{ 
					?>
						<tr>   
							<td><strong>Positions</strong></td>
							<td><?php echo $row['positions']?></td>
						</tr>
					<?php 
						} 
						if($row['salary']) 
						{ 
					?>
						<tr>   
							<td><strong>Salary</strong></td>
							<td><?php echo $row['salary']?></td>
						</tr>
					<?php
						}
						if($row['description']) 
						{ 
					?>
						<tr>
							<td><strong>Description</strong> </td>
							<td><?php echo $desciption.$company?></td>
						</tr>
					<?php 
						}
						if($row['qualification']) 
						{ 
					?>
						<tr>
							<td><strong>Qualifications</strong></td>
							<td><?php echo nl2br($row['qualification'])?></td>
						</tr>
					<?php 
						} 
						if($row['skills']) 
						{ 
					?>
						<tr>   
							<td><strong>Skills</strong></td>
							<td><?php echo  nl2br($row['skills'])?></td>
						</tr>
					<?php } ?>
						<tr>
							<td>
							<a href="careers.php"><button class="btn btn-primary">&lt; Back</button></a>
							</td>
							<td>
								<?php print '<center><a href="apply_jobs.php?jobId='.$row['jobId'].'"><button type="button" class="btn btn-primary">Apply Now</button></a></center>'; ?>		
							</td>
						</tr>
						</tbody>
						</table></center>  
			</div>
		</section>
        <!-- #servicespg Services Page Section Closed-->
        <section id="footer">
			<div class="row">
				<div class="col-sm-12">
					<p>
						<a href="index.php">Home </a>|<a href="aboutus.php"> About Us </a>|<a href="sitemap.php"> Sitemap </a>|<a href="clients.php"> Partners </a>|<a href="services.php"> Services </a>|<a href="contactus.php"> Contact Us </a>
					</p>
					<p>&copy;2016 Mentor Tech Source</p>
				</div>
			</div>
		</section>
	</body>
</html>
