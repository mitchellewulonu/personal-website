<?php include_once('form_process.php'); ?>


	<meta charset="UTF-8">
  	<meta name="description" content="">
  	<meta name="keywords" content="">
  	<meta name="author" content="Mitchell Ewulonu">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--using local bootstrap-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="web_css/about_me.css">
	<!--The link to social media icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="container" >
	<nav class="navbar navbar-inverse navbar-fixed-top" id="mynavbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
		   		<span class="icon-bar"></span>
		   		<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Mitchell's Corner</a>
			</div>	
			<div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
		    	<ul class="nav navbar-nav">
		    		<li><a href="#">Photography</a> 
		    		<li><a href="#">Videos</a>
		    		<li><a href="#">Home</a>
		    		<li><a href="contact.php">Contact</a>
		    		<li><a href="about_me">About me</a>
		    	</ul>	
		    </div>
		</div> <!--end container-->
	</nav> <!--end navbar-->
</div>	



<div class="jumbotron text-center" >
 	</br>
	<h2>Contact</h2>
</div>

<div>
	<section>
	 	<div class="row container">

	 		<center>

			<div class="col-sm-8">
				<form class="form-horizontal" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="form-group">
							<label for="user-name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="user-name" placeholder="Enter your name" name="name" value="<?= $name ?>">
								<span class="error" id="error"><?= $name_error ?></span>
							</div>

					</div>

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="user-email" placeholder="Enter your email" name="email" value="<?= $email ?>">
							<span class="error"><?= $email_error ?></span>
						</div>
					</div>

					<div class="form-group">
						<label for="subject" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="user-subject" placeholder="Enter the subject" name="subject" value="<?= $subject ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="messagearea" class="col-sm-2 control-label">Messsage</label>
						<div class="col-sm-10">
							<textarea   type="text" id="user-message" class="form-control"
							cols="20" rows="10" placeholder="Enter your messsage" name="message"></textarea>
							<span class="success"><?= $success ?></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary" data-submit="...Sending">Submit</button>
						</div>
					</div>
				</form>
			</div>
			</center>
	 	</div>


	 </section>

</div>




<footer>
	<hr>
	<div class="container text-center">
		<ul class="list-inline">
			<li><a href="#"><i class="fa fa-youtube" style="font-size:24px;color:red"></i></a></li>
			<li><a href="https://www.facebook.com"><i class="fa fa-facebook-official" style="font-size:24px"></i></a></li>
			<li><a href="https://www.linkedin.com/in/mitchell-ewulonu-9b376289/"><i class="fa fa-linkedin-square" style="font-size:24px" ></i></a></li>
		</ul>
		<p>&copy;Copyright 2016 - <span id="year"></span> | Mitchell Ewulonu | All Rights Reserved</p>
	</div>
</footer>


	<!--using local jquery stuff-->
	<script src="js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js" "></script>
	<!--This will update year automatically-->
	<script type="text/javascript">
		document.getElementById("year").textContent = new Date().getFullYear();
	</script>