<?php
include 'db_connect.php';

//defining error variable
$password_error = "  ";
$email_err = "  ";
$db_err = "  ";

if(isset($_POST['register_team'])){
  
  $roll_no1 = substr($_POST['roll_no1'],8);
  $roll_no2 = substr($_POST['roll_no2'],8);
  $roll_no3 = substr($_POST['roll_no3'],8);

  $team_id = "2015vi".$roll_no1.$roll_no2.$roll_no3;

  $project_title = $_POST['project_title'];
  $abstract = $_POST['abstract'];
  $user_email = $_POST['user_email'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];

  if($new_password == $confirm_password){
    //if new password and confirm password match
    $password = md5($new_password);
  
    //checks if email exists in project_aspirant table 
    $check_email_query = "SELECT * FROM project_aspirants WHERE `user_email` = '".$user_email."' OR `team_id` = '".$team_id."'";
    if($query_run = mysqli_query($con,$check_email_query)){
      $query_num_rows = mysqli_num_rows($query_run);
      
      if($query_num_rows == 0){//if no then check if email exists in peers table
        
        $check_email_query = "SELECT * FROM peers WHERE `user_email` = '".$user_email."'";
          
          if($query_run = mysqli_query($con,$check_email_query)){
          $query_num_rows = mysqli_num_rows($query_run);
          
            if($query_num_rows == 0){
              
              $insert_team_query = "INSERT INTO `project_aspirants`(`team_id`, `user_email`, `project_title`, `abstract`, `password`) VALUES ('".$team_id."','".$user_email."','".$project_title."','".$abstract."','".$password."')";
              
              if($query_run = mysqli_query($con,$insert_team_query)){
                echo '<script>alert("You are succesfully registered.Your team Id is '.$team_id.'");</script>';
              }

            }
            else{
              $email_err = "*Email id already exists.";
            }
          }
          else{
            $db_err = "*Error in checking email id in peers.";
          }
      }
      else{
              $email_err = "*Email id or team id already exists.";
            }
    }
    else{
            $db_err = "*Error in checking email id in project aspirants";
          }
  }
  else{//password and confirm password don't match
    $password_error = "*New password and confirm password don't match.";
  }

}

?>
<html>
<head>
<title>Register Team</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
include 'header.html';
?>
<div class="container">
  
  <form class="form-horizontal" action="#" method="post">
    <fieldset>
      <legend>Project Team Registration</legend>
      
      <!--display error-->
      <?php echo $db_err; ?>
        

      <!-- Text input-->
      <label>Team Members</label>
     
      <div class="row">
        
        <div class="col-md-3">
          <label class="  control-label" for="roll_no1">Roll number</label>
          <input id="roll_no1" name="roll_no1" placeholder="IT-2K11-02" class="form-control" required type="text">
          <span class="help-block">Roll number of team member 1</span> </div>
        
        <!-- Text input-->
        <div class="col-md-3">
          <label class="  control-label" for="roll_no2">Roll number</label>
          <input id="roll_no2" name="roll_no2" placeholder="IT-2K11-32" class="form-control" type="text">
          <span class="help-block">Roll number of team member 2</span> </div>
        
        <div class="col-md-3"> 
          <!-- Text input-->
          <label class="  control-label" for="roll_no3">Roll number</label>
          <input id="roll_no3" name="roll_no3" placeholder="IT-2K11-21" class="form-control" type="text">
          <span class="help-block">Roll number of team member 3</span> </div>
        
        <div class="col-md-3"> 
          <!--Intentionally Blank--> 
        </div>
     
      </div>
      
      <!-- Text input-->
       <div class="row">
      
        <div class="col-md-4">
          <label class="  control-label" for="project_title">Project Title</label>
          <input id="project_title" name="project_title" placeholder="Project Title" class="form-control" required type="text">
        </div>
      
        <div class="col-md-8"> 
          <!--Intentionally Blank--> 
        </div>
      
      </div>
      <br>
      
      <!-- Textarea -->
      <div class="row">
      
        <div class="col-md-6">
          <label class="  control-label" for="abstract">Abstract</label>
          <textarea class="form-control" id="abstract" name="abstract" required placeholder="in not more than 100 words"></textarea>
        </div>
      
        <div class="col-md-6"> 
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
        
        <div class="col-md-8"> </div>
      </div>
      <!--display error-->
        <?php echo $email_err; ?>
        
      <br>
      
      <!-- Password input-->
      <div class="row">
      
        <div class="col-md-3">
          <label class="  control-label" for="new_password">New password </label>
          <input id="new_password" name="new_password" placeholder="Password" class="form-control" required type="password">
        </div>
      
        <div class="col-md-3"> 
          <!-- Password input-->
          <label class="  control-label" for="confirm_password">Confirm Password</label>
          <input id="confirm_password" name="confirm_password" placeholder="Password" class="form-control" required type="password">
        </div>
        
        <div class="col-md-6"> 
          <!--Intentionally Blank--> 
        </div>
      
      </div>
      
      <!--display error-->
        <?php echo $password_error; ?>

      <br>
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

<?php

?>


