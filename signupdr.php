<?php
include("conn.php");
if(isset($_POST["submit"]))
{
    
    
    $doctor_name=$_POST["doctor_name"];
    $qualification=$_POST["qualification"];
    $appointment=$_POST["appointment"];
    $password=$_POST["password"];
    $email=$_POST["email"];

  
   $sql = "INSERT INTO doctor(doctor_name, qualification ,appointment, password, email) VALUES ('$doctor_name','$qualification','$appointment','$password','$email')";
    echo"<br>".$sql;
if (mysqli_query($conn, $sql)) {
  echo "User created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>
<html>
<head>
    <tital>Sign up Page For Doctor</tital>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
</body>
<div class="span3">
<center> <h2>Sign Up For Doctor</h2></center>
    <form action="signupdr.php" method="post">
    <label>doctor_name</label>
    <input type="doctor_name" name="doctor_name" class="span3">
    <label>qualification</label>
    <input type="qualification" name="qualification" class="span3">
    <label>appointment</label>
    <input type="appintment" name="appointment" class="span3">
    <label>password</label>
    <input type="password" name="password" class="span3">
    <label>email</label>
    <input type="email" name="email" class="span3">
    <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
    <input type="submit" value="Signup" class="btn btn-primary pull-right" name="submit">
    <div class="clearfix"></div>
    
    </form>
<?php
?>
</div>
    </html>