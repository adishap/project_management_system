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
      <legend>Log In</legend>
      
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
          <label class="control-label" for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="password" class="form-control" required>
        </div>
        <div class="col-md-8"> </div>
      </div>
      <br>
      
      <!-- Button -->
      <button id="submit" name="log_in" class="btn btn-primary">Log In</button>
    </fieldset>
  </form>
</div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>