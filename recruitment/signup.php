<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
     foreach ($query as $key => $value) {
      if(!is_numeric($key))
        $_SESSION['setting_'.$key] = $value;
    }
    ob_end_flush();
    include('header.php');

	
    ?>

    <style>
    	header.masthead {
		  background: url(admin/assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
		.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;


    

}
form {
    display: block;
    margin-top: 0em;
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: none;
    border-radius: .25rem;
}
#login-right{
		position: relative;
		right:0;

		width:auto;
		padding-top: 10%;
		padding-bottom: 10%;
		padding-left: 20%;
		height: calc(100%);
		background:#cccccc;
		display: flex-inline;
		align-items: center;
	}
div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
    background:#cccccc;	}

    p{
    color: red;
}
#up{
    color: green;
}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./"><?php echo $_SESSION['setting_name'] ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                         <?php
                if (isset($_SESSION["useruid"])) {
                 
                   echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="includes/logout.inc.php">Log out</a></li>';

                }
                else {
                  echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="signup.php">Sign up</a></li>';
                  echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Log in</a></li>';

                }


               ?>
                        
                     
                    </ul>
                </div>
            </div>
        </nav>
       
      <section class="sign-up-form">
      	 <div id="login-right">
    <div class="card col-md-8"> 
 	<div class="card-body">
	<center><label for="" class="control-label"style="font-size:1.5rem;">Sign up</label></center> 
	<form action="includes/signup.inc.php" method="POST" class="card" >
		<div class="form-group">
            <label for="" class="control-label">First Name</label>
		<input type="text" name="fname" class="form-control" placeholder="First Name...">
		</div>
        <div class="form-group">
            <label for="" class="control-label">Last Name</label>
        <input type="text" name="lname" class="form-control" placeholder="Last Name...">
        </div>
		<div class="form-group">
            <label for="" class="control-label ">Email</label>
		<input type="email" name="email"  id="email"class="form-control" placeholder="Email..."></div>
		<div class="form-group">
            <label for="" class="control-label">Username</label>
		<input type="text" name="uid" class="form-control" placeholder="Username..."></div>
		<div class="form-group">
            <label for="" class="control-label">Password</label>
		<input type="password" name="pwd" class="form-control" id="signup-pwd" placeholder="Password..."></div>
		<div class="form-group">
            <label for="" class="control-label">Repeat Password</label>
		<input type="password" name="pwdrepeat" class="form-control" id="signup-pwdrepeat" placeholder="Repeat Password...">
            </div>
            <center>
		<button type="submit" name="submit" class="btn-sm btn-block btn-wave col-md-4 btn-primary">Sign Up</button>
        </center>
        <div>
             <a href="login.php">Log in?</a>
        </div>
	</form>

<?php

if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {

        echo "<p> Fill all Fields!</p>";
		# code...
	}
	elseif ($_GET["error"] == "invaliduid") {
		echo "<p>Choose proper username!</p>";
		# code...
	}
	elseif ($_GET["error"] == "invalidemail") {
		echo "<p>Choose proper Email!</p>";
		# code...
	}
	
	elseif ($_GET["error"] == "passworddontmatch") {
		echo "<p>Password doesn't match!</p>";
		# code...
	}
	elseif ($_GET["error"] == "stmtfailed") {
		echo "<p>Something went wrong,try again</p>";
		# code...
	}
	elseif ($_GET["error"] == "usernametaken") {
		echo "<p>Username already taken!</p>";
		# code...
	}

    elseif ($_GET["error"] == "none") {
		echo "<p id='up'>You have signed up!</p>";
		# code...
	}


}
?>
</div>
</div>	
</section>
</div>
  <div id="preloader"></div>
        <footer class="bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div><?php echo $_SESSION['setting_contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:<?php echo $_SESSION['setting_email'] ?>"><?php echo $_SESSION['setting_email'] ?></a>
                    </div>
                </div>
            </div>
            <br>
              <div id="no-display">
                   <div class="container"><div class="small text-center text-muted">Copyright © 2020 - <?php echo $_SESSION['setting_name'] ?> | <a href="https://www.sourcecodester.com/" target="_blank">Sourcecodester</a></div></div>
              </div>
         
        </footer>
        
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>



<script type="">
    
    bootstrapValidate('#signup-pwd', 'min:8:Enter atleast 8 characters!')
    bootstrapValidate('#signup-pwd','matches:#sign-pwdrepeatConfirm:Your Password should not match!')
    bootstrapValidate('#email', 'email:Enter Valid Email')

</script>












<?php
include_once 'header.php';

 ?>
 <!--connect to header-->


