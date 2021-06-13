<?php


function emptyInputSignup($fname,$lname,$email, $username, $pwd, $pwdRepeat){
  $result;
  if (empty($fname)||empty($lname) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
  	
        $result = true;

  }
  else{
  	$result = false;
  }
  return $result;
}


function invalidUid($username) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
  {
  	
        $result = true;

  }
  else{
  	$result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {
  	
        $result = true;

  }
  else{
  	$result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if ( $pwd !== $pwdRepeat) 
  {
  	
        $result = true;

  }
  else{
  	$result = false;
  }
  return $result;
}

function uidExist($conn, $username, $email) {
  
  $sql ="SELECT *FROM usersclnt WHERE usersUid = ? OR usersEmail =?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
  	# code...
  	header("location: ../signup.php?error=stmtfailed");
 	exit();
  }
  mysqli_stmt_bind_param($stmt,"ss", $username, $email);
  mysqli_stmt_execute($stmt);


  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
  	return $row;
  }
  else{
  	$result = false;
  	return $result; 
  }

  mysqli_stmt_close($stmt);

}

//input user to database
//change the insert table

function createUser($conn, $fname,$lname, $email, $username, $pwd) {
  
  $sql = " INSERT INTO usersclnt (usersFirstName,usersLastName, usersEmail, usersUid, usersPwd) VALUES(?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
  	# code...
  	header("location: ../signup.php?error=stmtfailed");
 	exit();
  }
  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt,"sssss", $fname,$lname,$email, $username,$hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  	header("location: ../signup.php?error=none");
 	exit();


}
function emptyInputLogin( $username, $pwd){
  $result;
  if (empty($username) || empty($pwd) ) {
  	
        $result = true;

  }
  else{
  	$result = false;
  }
  return $result;
}
 function loginUser($conn, $username, $pwd){
 
  $uidExists =  uidExist($conn, $username, $username);


  if (uidExists === false) {
  		header("location: ../login.php?error=wronglogin");
 	exit();
  }

  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd,$pwdHashed);

  if ($checkPwd === false) {
  header("location: ../login.php?error=wronglogin");
 	exit();

  }
  elseif ($checkPwd === true) {
  	session_start();
  	$_SESSION["userid"] = $uidExists["usersId"];
  	$_SESSION["useruid"] = $uidExists["usersUid"];
    $_SESSION["useremail"] = $uidExists["usersEmail"];
    $_SESSION["userfname"] = $uidExists["usersFirstName"];
    $_SESSION["userlname"] = $uidExists["usersLastName"];
    
  	 header("location: ../index.php");
 	exit();
  }

 }



 