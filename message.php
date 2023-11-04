<?php

//$conn = mysqli_connect("localhost", "root", "", "portals_for _doctors");
//include("conn.php");
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "vaishanvi.mysql.database.azure.com", "vaishnavi", "V@ishnavi2003", "portaldr", 3306, MYSQLI_CLIENT_SSL);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}else{

//echo "Connected successfully";
}

$text = mysqli_real_escape_string($con,$_POST['text']);

//echo "$text";
$check_data = "SELECT * FROM chatbot_questionaries where questions='$text'";
 //echo $check_data;

$run_query=mysqli_query($con,$check_data);
if(mysqli_num_rows($run_query) > 0){
   
    while($row=mysqli_fetch_assoc($run_query)){

   // $replay = 
      echo $row['Answers'];
    //echo $replay;
    }
}else{
    echo "Sorry can't be able to understand you!";
}

?>
