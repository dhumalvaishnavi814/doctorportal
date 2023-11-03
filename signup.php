
<?php
include("conn.php");
if(isset($_POST["signup"]))
{
    // $customer_id=$_POST["customer_id"];
    $first_name=$_POST["first_name"];
    $middle_name=$_POST["middle_name"];
    $last_name=$_POST["last_name"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $city=$_POST["city"];
    $address=$_POST["address"];
    $mono=$_POST["mono"];
    $past_records=$_POST["past_records"];
    $current_health=$_POST["current_health"];
    $password=$_POST["password"];
    $email=$_POST["email"];
   
    $sql  = "INSERT INTO `customer`( `customer_id`,`first_name`, `middle_name`, `last_name`, `dob`, `gender`, `city`, `address`, `mono`, `past_records`, `current_health`,`password`,`email`) VALUES ('','$first_name','$middle_name','$last_name','$dob','$mono','$gender','$city','$address','$past_records','$current_health','$password','$email')";
    
     echo"<br>".$sql;
if (mysqli_query($con, $sql)) {
  echo "User created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}
?>
<html>
<head>
    <tital>Sign up Page</tital>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="span3">
<center>
    <h2>Sign Up For Customer</h2></center>
    <form action="signup.php" method="post">
    <!-- <label>customer_id</label>
    <input type="customer_id" name="customer_name" class="span3"> -->
    <label>first_name</label>
    <input type="first_name" name="first_name" class="span3">    
    <label>middle_name</label>
    <input type="middle_name" name="middle_name" class="span3">
    <label>last_name</label>
    <input type="last_name" name="last_name" class="span3">
    <label>dob</label>
    <input type="dob" name="dob" class="span3">
    <label>gender</label>
    <input type="gender" name="gender" class="span3">
    <label>city</label>
    <input type="city" name="city" class="span3">
    <label>address</label>
    <input type="address" name="address" class="span3">
    <label>mono</label>
    <input type="mono" name="mono" class="span3">
    <label>past_records</label>
    <input type="past_records" name="past_records" class="span3">
    <label>current_health</label>
    <input type="current_health" name="current_health" class="span3">
    <label>password</label>
    <input type="password" name="password" class="span3">
    <label>email</label>
    <input type="email" name="email" class="span3">

    <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
    <input type="submit" value="Sign up" class="btn btn-primary pull-right" name="signup">
    <div class="clearfix"></div>
    </form>
</div>

</body>
    </html>
