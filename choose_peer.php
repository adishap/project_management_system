<?php
session_start();
ob_start();
  
//if user is not logged in
if(!isset($_SESSION['team_id']) || (trim($_SESSION['team_id']) == '')) {
 	header('location: log_in.php');
}
else{
	
include 'db_connect.php';

?>

<html>
<head>
<title>Choose Project Buddy</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<?php
include 'header.html';
?>

<?php


$buddy_err = " ";

if(isset($_POST['choose_buddy'])){
	$buddy1 = $_POST['buddy1'];
	$buddy2 = $_POST['buddy2'];
	$buddy3 = $_POST['buddy3'];
	$team_id = $_SESSION['team_id'];
	if($buddy1 == $buddy2 || $buddy1 == $buddy3 || $buddy3 == $buddy2){
		$buddy_err = "Choose three diffrent project buddies.";
		}
	else{
		$c = 0;
		$buddy = array($buddy1,$buddy2,$buddy3);
		for($i = 0 ; $i<3 ; $i++){
			$choose_buddy_query = "INSERT INTO `requested_peers`(`team_id`, `peer_roll_no`) VALUES ('".$team_id."','".$buddy[$i]."')";
			if($choose_buddy_run = mysqli_query($con,$choose_buddy_query)){
				$c = $c +1;
				}
			}
		if($c>0){
			echo "<script>alert('your choice is successfully saved.')</script>";
			}
			else{
				$buddy_err = "Oops !! Error Occured in saving your choice.";
				}
		}
	}
?>
<div class="container">
  
  <div class="row">
  <div class="col-md-3">
  <!--for form-->  
  <form class="form-horizontal" action="#" method="post">
   <fieldset>

    <!-- Form Name -->
    <h3>Choose Project Buddy</h3>

<!-- Select Basic -->
    <label class="control-label" for="buddy1">Project Buddy 1</label>
      <select id="buddy1" name="buddy1" class="form-control" >
      <?php
	  
$select_peers_query = "SELECT * FROM `peers` WHERE 1";
$select_peers_result = mysqli_query($con,$select_peers_query);
        while($row = mysqli_fetch_array($select_peers_result)){
          echo '<option value= "'.$row['roll_no'].'">'.$row['name'].'</option>';
        }
      ?>
    </select>
  <br>
  <label class="control-label" for="buddy2">Project Buddy 2</label>
      <select id="buddy2" name="buddy2" class="form-control">
      <?php
        $select_peers_query = "SELECT * FROM `peers` WHERE 1";
        $select_peers_result = mysqli_query($con,$select_peers_query);

        while($row = mysqli_fetch_array($select_peers_result)){
          echo '<option value= "'.$row['roll_no'].'">'.$row['name'].'</option>';
        }
      ?>
    </select>
 <br>
  <label class="control-label" for="buddy3">Project Buddy 3</label>
      <select id="buddy3" name="buddy3" class="form-control">
      <?php
        $select_peers_query = "SELECT * FROM `peers` WHERE 1";
        $select_peers_result = mysqli_query($con,$select_peers_query);

        while($row = mysqli_fetch_array($select_peers_result)){
          echo '<option value= "'.$row['roll_no'].'">'.$row['name'].'</option>';
        }
      ?>
    </select>
    <br>
        <?php echo $buddy_err;?>
    <br>
    <!-- Button -->
      <input type="hidden" name="choose_buddy" value="choose_buddy">
      <button type="submit" class="btn btn-primary">Submit</button><br><br>

</fieldset>
</form>

</div>

<div class="col-md-3">
<!--Intentionally Blank-->
</div>

<div class="col-md-4">

  <h3>Project Buddies</h3>
  <?php
        $select_peers_query = "SELECT * FROM `peers` WHERE 1";
        $select_peers_result = mysqli_query($con,$select_peers_query);

        while($row = mysqli_fetch_array($select_peers_result)){
          echo '<a href="'.$row['website_link'].'">'.$row['name'].'</a>';
        }
      ?>

</div>

<div class="col-md-2">
<!--Intentionally Blank-->
</div>

</div>

</div>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
mysqli_close($con);
}
?>