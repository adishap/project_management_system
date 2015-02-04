<?php
session_start();
ob_start();

  
//if user is not logged in
if(!isset($_SESSION['team_id']) || (trim($_SESSION['team_id']) == '')) {
 	header('location: log_in.php');
}
else{
	
?>
<!--code-->
<html>
<head>
<title>Team | Profile</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!--header and db_connectivity-->
<?php
    include('header.html');

	//include database file
	include 'db_connect.php';

	//setting team_id variable
	if(!empty($_GET['team_id'])){
		$team_id = mysql_real_escape_string(htmlentities($_GET['team_id']));
	}
	else{
		$team_id = $_SESSION['team_id'];
	}
	
	$query = "SELECT * FROM `project_aspirants` WHERE `team_id` = '".$team_id."'";
	$result = mysqli_query($con , $query);

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)) {
			$user_email = $row['user_email'];
			$project_title = $row['project_title'];
			$abstract = $row['abstract'];
		}
	}
	?>
	<div class="container">
    <h3>Team Information</h3>
    <h4><?php echo $team_id ?></h4>
    <div class="row">
    <div class="col-md-2">
    <strong>Project Title</strong>
	</div>
	<div class="col-md-10">
	<?php echo $project_title ?>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-2">
    <strong>Abstract</strong>
    </div>
	<div class="col-md-10">
	<?php echo $abstract ?>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-2">
    <strong>Contact Information</strong>
	</div>
	<div class="col-md-10">
	<?php echo $user_email ?>
    </div>
    </div>
    <br>
    
    </div>
<?php	
mysqli_close($con);
}
?>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>