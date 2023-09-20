<?php




session_start();
// connect to database 
$db = mysqli_connect('localhost', 'root', '', 'register');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){  
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		// $password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO hospital_register (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password_1')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: admin/index.php');
		}else{
			$query = "INSERT INTO hospital_register (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password_1')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['hospital'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "";
			header('location: hospital_login.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM hospital_register WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	



function isLoggedIn()
{
	if (isset($_SESSION['hospital'])) {
		return true;
	}else{
		return false;
	}
}


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['hospital']);
	header("location: login.php");
}


if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);
	$user_type = e($_POST['user_type']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		// $password 	= md5($password);

		$query = "SELECT * FROM hospital_register WHERE username='$username' AND password='$password' AND user_type='$user_type' LIMIT 1";
		$results = mysqli_query($db, $query);
		$row = mysqli_fetch_array($results);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			if ($row['user_type'] == 'admin') {

				$_SESSION['hospital'] = $row["id"];
				$_SESSION['success']  = "";
				header('location: admin/index.php');		  
			}
			else if ($row['user_type'] == 'hospital') {

				$_SESSION['hospital'] = $row["id"];
				$_SESSION['success']  = "";
				header('location: hospitaldetail/index.php'); // hostpital address		  
			}
			
			
			
			else{
				$_SESSION['hospital'] = $row["id"];
				$_SESSION['user_type'] = $row["user_type"];
				
				$_SESSION['success']  = "";

				header('location: hospitaldetail/index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}