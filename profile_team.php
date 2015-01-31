<?php
session_start();
ob_start();

//if user is not logged in
if(!isset($_SESSION['user_email'])||(trim($_SESSION['user_email'])=='')){
	header('location: log_in.php')

}
else{
  ?>
}
>
<!--code-->
<html>
<head>
  <title>Team | Profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!--header and db_connectivity>
   <?php
    include('header.php');
  ?>
  
  <!--contents-->
  <?php

  //include database file
  include 'db_connect.php';

  //setting user_email variable
  if(!empty($_GET['user_email'])){
    $user_email = mysql_real_escape_string(htmlentities($_GET['user_email']));
  }
  else{
    $user_email = $_SESSION['user_email'];
  }
  
  $query = "SELECT * FROM `project_aspirants` WHERE `user_email` = '$user_email'";
  $result = mysqli_query($con , $query);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)) {
  
      $team_id = $row['team_id'];
      $user_email = $row['user_email'];
      $project_title = $row['project_title'];
      $abstract = $row['abstract'];
      }
  }
?>

  <div class="container">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<div class="center-block">
<h2 class="form-signin-heading"><a href="#">Team Information</a></h2>

<div class="col-sm-1">
     <!--Intentionally Blank-->
</div>
<div class="col-md-6">
     <br>
     <!--Name-->
     <h2><?php echo $team_id; ?></h2>
     <!--Course-->
     <h4><?php echo $user_email; ?></h4>
     <?php 
    if($roll_no != NULL){
    echo '<div class="row">
      <div class="col-sm-3">
      <strong>Roll Number</strong>
      </div>
     
      <div class="col-sm-9">'.$roll_no." </div>
      </div>
      <br>";
      } 
  ?>
     <!--projct_title-->
     <h4><?php echo $project_title; ?></h4>
     </div>

     </div>




<!-- Text input-->
<br>
<h3>Project Abstract</h3>
<div class="col-sm-1">
<div class="col-md-5">
  <h2><?php echo $abstract; ?></h2>
</div>
</div>

<!-- Text input-->
<
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-3">
    <button id="login" name="login" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>
<div class="col-md-8">
 </div>
 </div>
 </div>

</body>
</html>