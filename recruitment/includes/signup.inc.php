<?php


if (isset($_POST["submit"])) {
	# code...
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $email = $_POST["email"];
   $username = $_POST["uid"];	
   $pwd = $_POST["pwd"];	
   $pwdRepeat = $_POST["pwdrepeat"];	
   
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

 if (emptyInputSignup($fname,$lname,$email, $username, $pwd, $pwdRepeat) !== false) {

 	header("location: ../signup.php?error=emptyinput");
 	exit();
 	# code...
 }

 if (invalidUid($username) !== false) {

 	header("location: ../signup.php?error=invaliduid");
 	exit();
 	# code...
 }
  if (invalidEmail($email) !== false) {

 	header("location: ../signup.php?error=invalidemail");
 	exit();
 	# code...
 }
 if (pwdMatch($pwd, $pwdRepeat) !== false) {

 	header("location: ../signup.php?error=passworddontmatch");
 	exit();
 	# code...
 }
if (uidExist($conn, $username, $email) !== false) {

 	header("location: ../signup.php?error=usernametaken");
 	exit();
 	# code...
 }
  createUser($conn, $fname,$lname,$email, $username, $pwd);

}
else{
	header("location: ../index.php?page=signup");
      exit();
}