<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE['idCookie'])) {
    setcookie("idCookie", '', time()-42000, '/');
	setcookie("passCookie", '', time()-42000, '/');
}

       
// Destroy the session variables
session_destroy();

// Check to see if their session is in fact destroyed
if(!session_is_registered('firstname')){
header("location: index.php"); // << makes the script send them to any page we set
} else {
print "<h2>Could not log you out, sorry the system encountered an error.</h2>";




exit();

}
