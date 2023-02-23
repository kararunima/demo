<?php

include("conn.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["password"];
$pass=$_POST["password1"];
$mobile=$_POST["mobile"];
$addr=$_POST["addr"];
$addr1=$_POST["addr1"];
$name="/^[a-zA-Z]+$1";
$emailvalidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z{2,4}])$/";
$number="/^[0-9]+$/";

if(empty($fname)||empty($lname)||empty($lname)||empty($email)||empty($pass)||empty($mobile)||empty($addr)||empty($addr1)||)

echo"<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'> please fill all the fields
               
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>" ;


}
else{
	if(!preg_match($name,$fname)){
		echo"
		<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
		<b>this $fname is not valid..!</b>
		 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>";
		exit();
	}
	if(!preg_match($name,$lname)){
		echo"
		<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
		<b>this $lname is not valid..!</b>
		 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>";
		exit();
}

if(!preg_match($emailvalidation,$email)){
		echo"
		<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
		<b>this $email is not valid..!</b>
		 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>";
		exit();
}

if(strlen($pass)<9){
		echo"
		<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
		<b>password is weak</b>
		 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>";
		exit();
}

if(strlen($pass1)<9){
		echo"
		<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
		<b>password is weak</b>
		 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>";
		exit();
}

if(strlen($pass!=$pass1)){
		echo"
		<div class =' alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
		<b>password is not same</b>
		 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			   
			  </div>";
		
}













?>