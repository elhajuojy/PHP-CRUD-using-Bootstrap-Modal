<?php
    include "./connect.php";
    
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["firstnameSend"])
    && isset($_POST["lastnameSend"])
    && isset($_POST["ageSend"])
    && isset($_POST["class_idSend"])){
    
        $sqlQuery = "INSERT INTO `students` (firstname,lastname,age,class_belong) 
        VALUES('$firstnameSend','$lastnameSend','$ageSend','$class_idSend')";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>