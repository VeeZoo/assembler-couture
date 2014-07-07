<?php
$usernames = array("username");
$passwords = array("password");
$page = "admin.php";
$usernameAttempt = htmlspecialchars(strip_tags(trim($_POST["username"])), ENT_QUOTES);
$passwordAttempt = htmlspecialchars(strip_tags(trim($_POST["password"])), ENT_QUOTES);

for ($i=0; $i<count($usernames); $i++) {  
	$logindata[$usernames[$i]]=$passwords[$i]; 
}

$found = 0; 

for ($i=0; $i<count($usernames); $i++) {
    if ($usernames[$i] == $usernameAttempt) {
		$found = 1;    
	}
} 
	
if ($found == 0) {
	header('Location: staff.php?login_error=1');    
	exit; 
}

if ($logindata[$usernameAttempt] == $passwordAttempt) {
    session_start();
    $_SESSION["username"]=$usernameAttempt;
    header('Location: '.$page);
    exit;
} else {  
	header('Location: staff.php?login_error=1');
	exit; 
}

?>