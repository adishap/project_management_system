<?php
include 'db_connect.php';

$select_peers_query = "SELECT * FROM `peers` WHERE 1";
$select_peers_result = mysqli_query($con,$select_peers_query);

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
  
  <div class="row">
  <div class="col-md-3">
  <!--for form-->  
  <form class="form-horizontal">
   <fieldset>

    <!-- Form Name -->
    <h3>Choose Project Buddy</h3>

<!-- Select Basic -->
    <label class="control-label" for="buddy1">Project Buddy 1</label>
      <select id="buddy1" name="buddy1" class="form-control">
      <?php
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