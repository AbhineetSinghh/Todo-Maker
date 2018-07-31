<?php
include_once 'libs/login_users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Todo Maker</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<!-- Form body container -->
<div class="fluid-container login-fixed-background">  
  <div class="panel panel-login col-lg-4">
    <span class="panel-heading">
        TODO &nbsp;Maker 
    </span>

    <?php
	    if (isset($error)) {
	    	echo '
	     <!-- The Message of form here -->
	        <div class="alert alert-danger" style="width: 100%; height: auto">'.$error.'</div>';
	    }
    ?>

    <!--!!!!!!!!!!!!!!!!!!!!!!!!!Panle body start-->
    <div class="panel-body">

    	<div class="row login_form">
			<div class="col-lg-12">
			  <!-- Login Form -->
			  <form method="post" role="form" action="login.php">
			    <div class="form-group">
			      <input type="text" name="login_username" id="username" class="form-control" placeholder="username">
			    </div>
			    <div class="form-group">
			      <input type="password" name="login_password" id="password" class="form-control" placeholder="Password">
			    </div> 
			    <div class="form-group">
			      <div class="row">
			        <div class="col-sm-6 offset-sm-3">
			          <input type="submit" name="Login" id="login" class="form-control btn btn-login" value="Login">
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="row">
			        <div class="col-lg-12 text-center">
			            <a href="" class="forgot-password">Forgot Password?</a>
			            <br>
			            <a href="#" id="show_register">Don't have an account?</a>
			        </div>
			      </div>
			    </div>
			  </form>            
			</div>
		</div>

		<div class="row register_form">
		<div class="col-lg-12">
		  <!-- Register Form -->
		  <form method="post" role="form" action="login.php">
		    <div class="form-group">
		      <input type="text" name="username" id="username" class="form-control" placeholder="username">
		    </div>
		    <div class="form-group">
		      <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="">
		    </div>
		    <div class="form-group">
		      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
		    </div> 
		    <div class="form-group">
		      <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Confirm Password">
		    </div> 
		    <div class="form-group">
		      <div class="row">
		        <div class="col-sm-6 offset-sm-3">
		          <input type="submit" name="register" id="register" class="form-control btn btn-login" value="Register">
		        </div>
		      </div>
		    </div>		    
		    <div class="form-group">
		      <div class="row">
		        <div class="col-lg-12 text-center">
		            <br>
		            <a href="#" id="show_login">Already have an account?</a>
		        </div>
		      </div>
		    </div>
		  </form>            
		</div>
      </div>
    </div>
      <!-- class panel body end -->
    </div>
</div>
</body>
<script type="text/javascript" src="js/custom-js.js"></script>
</html>