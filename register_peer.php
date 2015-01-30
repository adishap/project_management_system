<?php
include 'db_connect.php';

//defining error variable
$password_error = "  ";
$email_err = "  ";
$db_err = "  ";

if(isset($_POST['register_team'])){
  
  //defining variable
  $name = $_POST['name'];
  $roll_no = $_POST['roll_no'];
  $website_link = $_POST['website_link'];
  $user_email = $_POST['user_email'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];
  
  if($new_password == $confirm_password){
    //if new password and confirm password match
    $password = md5($new_password);
  
    //checks if email exists in project_aspirant table 
    $check_email_query = "SELECT * FROM peers WHERE `user_email` = '".$user_email."' OR `roll_no` = '".$roll_no."'";
    if($query_run = mysqli_query($con,$check_email_query)){
      $query_num_rows = mysqli_num_rows($query_run);
      
      if($query_num_rows == 0){//if no then check if email exists in peers table
        
        $check_email_query = "SELECT * FROM project_aspirants WHERE `user_email` = '".$user_email."'";
          
          if($query_run = mysqli_query($con,$check_email_query)){
          $query_num_rows = mysqli_num_rows($query_run);
          
            if($query_num_rows == 0){
              
              $insert_peer_query = "INSERT INTO `peers`(`name`, `roll_no`, `website_link`, `user_email`, `password`) VALUES ('".$name."','".$roll_no."','".$website_link."','".$user_email."','".$password."')";
              
              if($query_run = mysqli_query($con,$insert_peer_query)){
                echo '<script>alert("You are succesfully registered.");</script>';
              }

            }
            else{
              $email_err = "Email id already exists.";
            }
          }
          else{
            $db_err = "Error in checking email id in peers.";
          }
      }
      else{
              $email_err = "Email id or roll id already exists.";
            }
    }
    else{
            $db_err = "Error in checking email id in project aspirants";
          }
  }
  else{//password and confirm password don't match
    $password_error = "New password and confirm password don't match.";
  }

}

?>

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
  <form class="form-horizontal" action="#" method="post">
    <fieldset>
      
      <!-- Form Name -->
      <legend>Peer Registration</legend>
      
      <!-- Text input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="name">Name</label>
          <input id="name" name="name" type="text" placeholder="Ryan sharma" class="form-control" required>
        </div>
        <div class="col-md-8">
          <!--Intentionally Blank-->
        </div>
      </div>
      <br>
      
      <!-- Text input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="roll_no">Roll number</label>
          <input id="roll_no" name="roll_no" type="text" placeholder="IT-2K11-02" class="form-control" required>
        </div>
        <div class="col-md-8">
          <!--Intentionally Blank-->
        </div>
      </div>
      <br>
      
      <!-- Text input-->
      
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="website_link">Website link</label>
          <input id="website_link" name="website_link" type="text" placeholder="Enter your website link" class="form-control" required>
        </div>
        <div class="col-md-8">
          <!--Intentionally Blank-->
        </div>
      </div>
      <br>
      
       <!-- Text input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="user_email">Email Address</label>
          <input id="user_email" name="user_email" type="email" placeholder="ex@mp.le" class="form-control" required>
        </div>
        <div class="col-md-8">
          <!--Intentionally Blank-->
        </div>
      </div>
      <!--display error-->
      <?php echo $email_err; ?>
      <br>
      
      <!-- Password input-->
      <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="new_password">New password </label>
          <input id="new_password" name="new_password" type="password" placeholder="Password" class="form-control" required>
        </div>
        
        <div class="col-md-8">
          <!--Intentionally Blank-->
        </div>
      </div>
      <br>

       <div class="row">
        <div class="col-md-4">
          <label class="control-label" for="confirm_password">Confirm password</label>
          <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-write your password" class="form-control" required>
        </div>
        
        <div class="col-md-8">
          <!--Intentionally Blank-->
        </div>
      </div>
      <!--display error-->
      <?php echo $password_error; ?>
      <br>
      
      <!-- Button -->
      <input type="hidden" name="register_team" value="register_team">
      <button type="submit" class="btn btn-primary">Register</button><br><br>
    </fieldset>
  </form>
</div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>