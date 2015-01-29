<html>
<head>
<title>Register Peer</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
include 'header.html';
?>
<div class="container">
  <form class="form-horizontal">
    <fieldset>
      
      <!-- Form Name -->
      <label>Peer Registration</label>
      
      <!-- Text input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="name">Name</label>
          <input id="name" name="name" type="text" placeholder="Ryan sharma" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
      <!-- Text input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="roll no">Roll number</label>
          <input id="roll_no" name="roll_no" type="text" placeholder="Enter your roll number" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
      <!-- Text input-->
      
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="website_link">Website link</label>
          <input id="website_link" name="website_link" type="text" placeholder="Enter your website link" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
       <!-- Text input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="user_email">Email Address</label>
          <input id="user_email" name="user_email" type="email" placeholder="ex@mp.le" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
      <!-- Password input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="new_password">New password </label>
          <input id="new_password" name="new_password" type="password" placeholder="Enter your new password" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
      <!-- Password input-->
      
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="confirm_password">Confirm password</label>
          <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-write your password" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
      <!-- Button -->
      <button id="submit" name="submit" class="btn btn-primary">Register</button>
    </fieldset>
  </form>
</div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>