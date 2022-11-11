<?php
    include "./connect.php";
    
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["firstnameSend"])
    && isset($_POST["lastnameSend"])
    && isset($_POST["ageSend"])
    && isset($_POST["class_idSend"])){
        // '$firstnameSend','$lastnameSend','$ageSend','$class_idSend'
        $sqlQuery = "UPDATE `students` SET `lastname` = '$lastnameSend',`firstname` = '$firstnameSend',
        `age` = '$ageSend' ,`class_belong` = '$class_idSend' WHERE `students`.`member_id` = $UserIdSend;";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>