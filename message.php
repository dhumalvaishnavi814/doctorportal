<?php

$conn = mysqli_connect("localhost", "root", "", "portals_for _doctors");


$text = mysqli_real_escape_string($conn,$_POST['text']);


$check_data = "SELECT * FROM chatbot_questionaries where Questions='$text'";


$run_query=mysqli_query($conn,$check_data);
if(mysqli_num_rows($run_query) > 0){
   
    while($row=mysqli_fetch_assoc($run_query)){

    $replay = $row['Answers'];
    echo $replay;
    }
}else{
    echo "Sorry can't be able to understand you!";
}

?>