<?php
session_start();
ob_start();
  
//if user is not logged in
if(!isset($_SESSION['roll_no']) || (trim($_SESSION['roll_no']) == '')) {
 	header('location: log_in.php');
 	}
else{
	include 'db_connect.php';
?>

<html>
<head>
<title>Choose Project</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<?php
include 'header.html';
?>
<div class="container">
<div class="row">
<div class="col-md-4">
 <form class="form-horizontal" action="#" method="post">
   <fieldset>

<?php
if(isset($_POST['choose_project'])){
	
	if(!empty($_POST['project_aspirant'])){
		$project_aspirant = array();
		foreach($_POST['project_aspirant'] as $value){
			array_push($project_aspirant,$value);
		}
		for($i=0; $i < $N; $i++){
      		echo($project_aspirant[$i] . " ");
   		}
	}
	else{
		echo("You didn't select any project.");
	}
}
?>

    <!-- Form Name -->
    <h3>Choose Project</h3>

<?php
 $roll_no = $_SESSION['roll_no'];
$select_project_query = "SELECT * FROM `project_aspirants` WHERE 1";
$select_project_result = mysqli_query($con,$select_project_query);

 while($row = mysqli_fetch_array($select_project_result)){
 		  echo $row['team_id'];
          echo '<input type="checkbox" name="project_aspirant[]" value="$row["team_id"]">'.$row['project_title'].'<br>';
        }

?>
<br>
<!-- Button -->
      <input type="hidden" name="choose_project" value="choose_project">
      <button type="submit" class="btn btn-primary">Submit</button><br><br>
</fieldset>
</form> 
</div>

<div class="col-md-4">

 <?php
        $request_query = "SELECT * FROM `requested_peers` WHERE `peer_roll_no` = '".$roll_no."'";
        $request_result = mysqli_query($con,$request_query);
        if(mysqli_num_rows($request_result) != 0){
        while($row = mysqli_fetch_array($request_result)){
          echo '<h3>Requested By:</h3>'.$row['team_id'].'<br>';
        }
    }

      ?>
    
</div>

<div class="col-md-4">
<h3>Project List</h3>
<ul>
 <?php
        $select_project_query = "SELECT * FROM `project_aspirants` WHERE 1";
        $select_project_result = mysqli_query($con,$select_project_query);

        while($row = mysqli_fetch_array($select_project_result)){
          echo '<a href="profile_team.php?team_id='.$row['team_id'].'">'.$row['project_title'].'</a>';
        }
      ?>
</ul>
</div>

</div>
</div>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
}
?>