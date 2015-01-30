<?php
include 'db_connect.php';

//defining error variable
$email_err = "  ";
$db_err = "  ";

if(isset($_POST['log_in'])){

	$user_email = $_POST['user_email'];
	$password = md5($_POST['password']);

	//check if email exists in project aspirant table
	$email_check_project_query = "SELECT * FROM `project_aspirants` WHERE `user_email` = '".$user_email."' AND `password` = '".$password."'";
	if($query_project_run = mysqli_query($con,$email_check_project_query)){
      $query_num_rows = mysqli_num_rows($query_project_run);
      
      if($query_num_rows == 0){//if no then check if email exists in peers table
      
      	$email_check_peer_query = "SELECT * FROM `peers` WHERE `user_email` = '".$user_email."' AND `password` = '".$password."'";
		if($query_peer_run = mysqli_query($con,$email_check_peer_query)){
      		$query_num_rows = mysqli_num_rows($query_peer_run);
      		if($query_num_rows == 0){
      			$email_err = "Invalid email address and password combination.";
      		}
      		else{
      			//email_id exists in peers table
      			$row = mysqli_fetch_array($query_peer_run);
      			
      			$_SESSION['roll_no'] = $roll_no;
				header("location: peer_profile.php");			
      		}
      	}
      }
      else{
      	//email_id exists in project aspirant table
      	$row = mysqli_fetch_array($query_project_run);
      	
      	$_SESSION['team_id'] = $team_id;
		header("location: team_profile.php");	
      }
    }
    else{
    	$db_err = "Error in checking email in project aspirants";
    }

}
?>

<html>
<head>
<title>Log In</title>
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
      <legend>Log In</legend>
      
      <!--display error-->
      <?php echo $db_err; ?>

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
      
      <!--display error-->
      <?php echo $email_err; ?>

      <br>
      
       <!-- Button -->
      <input type="hidden" name="log_in" value="log_in">
      <button type="submit" class="btn btn-primary">Log In</button><br><br>
    </fieldset>
  </form>
</div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>