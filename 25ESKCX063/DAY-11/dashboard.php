<?php
 include ("dashboardheader.php");
 session_start();

 if(!isset($_SESSION['user_name'])) {
    header("location: login.php");
    exit();
 }

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <a herf="updatePassword.php">Update Password </a>
</div>

<div class="col-md-9">
    <h2> 
       <?php
        echo "Welcome, ". $_SESSION['user_name']."!";
        ?>
         </h2>
</div>
</div>
</div>

<?php
include("footer.php");
?>