<?php

	function user_register(){

		global $dbconn;

		$uname = validate($_POST['uname']);
		$email = validate($_POST['email']);
		$password = validate($_POST['psw']);
		$phonenumber = validate($_POST['pnumber']);
		$location = validate($_POST['location']);
		$timeperiod = validate(_$_POST['time_period']);

		insertdata("INSERT INTO users (name, email, password, phone, location, time-period)
					VALUES ('$uname', '$email', '$password', '$phonenumber', '$location','$timeperiod') " );

	}

function validate($value) {

  global $dbconn;

  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  $value = mysqli_escape_string($dbconn, $value);

  return $value;

}

function insertdata($param){


 	global $dbconn;

 	$result = mysqli_query($dbconn,$param);

 	if(!$result){
 		echo '<script> alert("something went wrong") </script>';
 	}
 	else{
 		echo '<script> alert("Done successfully") </script>';

 	}
}

function fetch($param){

	global $dbconn;

 	$result = mysqli_query($dbconn,$param);
 	$data = [];
 	while($row = mysqli_fetch_assoc($result)){

 		array_push($data,$row);

 	}
 	return $data;
}


function userlogin(){


	$email =  validate($_POST['email']);
 	$pass =   validate($_POST['pass']);

	$data = fetch( "select * from users where email = '$email' and password = '$pass' " );


	if(count($data) > 0){

		foreach($data as $u){
			$name =  $u['name'];

		}

		$_SESSION['name'] = $name;


		if($_SESSION['name']){

			header('Location: invitation.php ');
		}

	}
	else{
		echo '<script>alert("credentials are incorrect" )</script>';
	}
		

}



