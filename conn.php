<?php
//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//  $database="portals_for _doctors";

//  //Create connection
//  $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
//  if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());}

// echo "Connected successfully";
mysql -h vaishanvi.mysql.database.azure.com -u vaishnavi -p  --ssl-ca=DigiCertGlobalRootCA.crt.pem
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "vaishanvi.mysql.database.azure.com", "vaishnavi", "V@ishnavi2003", "portaldr", 3306, MYSQLI_CLIENT_SSL);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}else{

echo "Connected successfully";
}

?>
