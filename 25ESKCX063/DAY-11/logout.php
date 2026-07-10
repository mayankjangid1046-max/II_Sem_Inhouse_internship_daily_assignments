<?php
// logout.php
session_start();

//step 1: Clear all session data
$_SESSION = array();

//step 2:  Destroy the session
session_destroy();

//step 3: Send user back to login
header("Location: login.php");
exit();
?>