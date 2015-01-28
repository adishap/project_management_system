<?php
include 'header.html';
?>

<html>
<head>
  <title>Register Team</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">

<form class="form-horizontal">
<fieldset>
<legend>Project Team Registration</legend>
<!-- Text input-->
<label>Team Members</label>
<div class="row">

<div class="col-md-3">

  <label class="  control-label" for="roll no">Roll number</label>  

  <input id="roll no" name="roll_no1" placeholder="IT-2K11-02" class="form-control  " required="" type="text">
  <span class="help-block">Roll number of team member 1</span>  
</div>
<!-- Text input-->
<div class="col-md-3">
  <label class="  control-label" for="roll no">Roll number</label>  

  <input id="roll no" name="roll_no2" placeholder="IT-2K11-02" class="form-control  " type="text">
  <span class="help-block">Roll number of team member 2</span>  
 </div>

<div class="col-md-3">
<!-- Text input-->
  <label class="  control-label" for="roll no">Roll number</label>  

  <input id="roll no" name="roll no" placeholder="IT-2K11-21" class="form-control  " type="text">
  <span class="help-block">Roll number of team member 3</span>  
 </div>

<div class="col-md-3">
<!--Intentionally Blank-->
</div>

 </div>
<br>
<!-- Text input-->

<div class="row">

<div class="col-md-4">

  <label class="  control-label" for="project_title">Project Title</label>  

  <input id="project_title" name="project_title" placeholder="Project Title" class="form-control  " required="" type="text">
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
                  
    <textarea class="form-control" id="abstract" name="abstract" required="" placeholder="in not more than 100 words"></textarea>
</div>

<div class="col-md-6">
  <!--Intentionally Blank-->
</div>
</div>

<br>
<!-- Password input-->
<div class="row">

<div class="col-md-3">

  <label class="  control-label" for="new password">New password </label>

    <input id="new password" name="new password" placeholder="Passward" class="form-control  " required="" type="password">
    </div>

<div class="col-md-3">
<!-- Password input-->
  <label class="  control-label" for="confirm password">Confirm Password</label>
 
    <input id="confirm password" name="confirm password" placeholder="Passward" class="form-control  " required="" type="password">
 </div>


<div class="col-md-6">
  <!--Intentionally Blank-->
</div>

 </div>
 <br>
<!-- Button -->
  <button id="submit" name="submit" class="btn btn-primary">Register</button>
 
</fieldset>
</form>

</div>

<div class="col-md-8">
<!--Intentionally blank-->
</div>

</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
