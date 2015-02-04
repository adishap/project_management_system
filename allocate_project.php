<?php
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
<div class="col-md-5">
 <form class="form-horizontal" action="#" method="post">
   <fieldset>

    <!-- Form Name -->
    <h3>Choose Project</h3>
<?php
$select_project_query = "SELECT * FROM `project_aspirants` WHERE 1";
$select_project_result = mysqli_query($con,$select_project_query);

 while($row = mysqli_fetch_array($select_project_result)){
          echo '<input type="checkbox" name="project_aspirant" value="'.$row['team_id'].'">'.$row['project_title'].'<br>';
        }

?>
<br>
<!-- Button -->
      <input type="hidden" name="choose_buddy" value="choose_buddy">
      <button type="submit" class="btn btn-primary">Submit</button><br><br>
</fieldset>
</form> 
</div>

<div class="col-md-7">
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