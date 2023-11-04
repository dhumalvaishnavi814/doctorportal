<?php

$conn = mysqli_connect("localhost", "root", "", "portals_for _doctors");


$text = mysqli_real_escape_string($con,$_POST['text']);


$check_data = "SELECT * FROM chatbot_questionaries where Questions='$text'";
// echo $check_data;

$run_query=mysqli_query($con,$check_data);
if(mysqli_num_rows($run_query) > 0){
   
    while($row=mysqli_fetch_assoc($run_query)){

    $replay = $row['answers'];
    echo $replay;
    }
}else{
    echo "Sorry can't be able to understand you!";
}

?>
