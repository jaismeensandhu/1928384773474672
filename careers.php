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
	            	<a href="careers.php" class="current">Mentor Jobs</a>
					<a href="upload_resume.php">Upload Your Resume</a><center>
	    		</div><!-- /.sub_nav sub navigation -->
	    		<div>
	    		<center><h1>  </h1></center>
	    		</div>
				<input style="margin-left:1%;margin-right:1%;width:96%;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Jobs by Title, Location or Keywords " title="Type in a name">
				<div class="table-responsive" style="margin-left:1%;margin-right:1%;width:96%;">
					<table class="table" id="myTable">
					<thead>
						<tr>
							<td style="margin-left:50px;"><strong>Title</strong> </td>
							<td><strong>Job Type</strong> </td>
							<td><strong>Location</strong> </td>
							<td><strong>Experience</strong> </td>
							<td><strong>Apply</strong></td>
						</tr>
					</thead>
					<tbody>
					<?php
						include_once("dbconnection.php");
						$query="SELECT * FROM jobs ORDER BY addition_date DESC";
						$results = mysqli_query($bd,$query);
						$a = 0;

						while($row = mysqli_fetch_assoc($results)) {
						$a++;
						echo '<script type = "text/javascript">c++;</script>'
						?>
							<tr>
								<td>
								<?php print '<a href="viewJob.php?ID='.$row['jobId'].'">'.$row['title'].'</a>'; ?>
								</td>
								<td><?php echo $row['jobtype']?></td>
								<td><?php echo $row['location']?></td>
								<td><?php echo $row['experience']?></td>
								<td>
								<?php print '<a href="apply_jobs.php?jobId='.$row['jobId'].'">Apply</a>'; ?>
								</td>
							</tr>
						<?php
						}
						?>
    				</tbody>
    			</table>
				<center><p>Note: If you couldn't find the Job openings relevant to your job profile. <a href="upload_resume.php">You can submit resume as general application, Our HR team will contact you.</a></p></center>
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
		<script>
			function myFunction() {
				var input, filter, table, tr, td, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("myTable");
				tr = table.getElementsByTagName("tr");
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0];
					td1 = tr[i].getElementsByTagName("td")[1];
					td2 = tr[i].getElementsByTagName("td")[2];
					td3 = tr[i].getElementsByTagName("td")[3];
					if ((td)||(td1)||(td2)||(td3)) {
					if ((td.innerHTML.toUpperCase().indexOf(filter) > -1)||(td1.innerHTML.toUpperCase().indexOf(filter) > -1)||(td2.innerHTML.toUpperCase().indexOf(filter) > -1)||(td3.innerHTML.toUpperCase().indexOf(filter) > -1)) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
					}       
				}
			}
		</script>




	</body>
</html>
