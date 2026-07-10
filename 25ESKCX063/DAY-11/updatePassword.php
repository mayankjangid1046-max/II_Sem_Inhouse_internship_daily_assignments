<?php

session_start();
include("dashboardheader.php");



?>

<div class="container mt-5" style="max-width:500px;">

<h2 class="mb-3">Update Password</h2>

<form action="checkLogin.php" method="POST">

<input type="Password"
class="form-control mb-3"
name="Old Password"
placeholder="Enter your Old Password"
required>

<input type="password"
class="form-control mb-3"
name="New password"
placeholder="Enter your New Password"
required>

<input type="password"
class="form-control mb-3"
name="Confirm password"
placeholder="Enter your ConfirmPassword"
required>


<button class="btn btn-primary w-100">
Update
</button>

</form>

</div>
<form>
</form>