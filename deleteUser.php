<?php
    include "./connect.php";
    
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["member_idSend"])){
    
        $member_idSend = $_POST["member_idSend"];
        $sqlQuery = "DELETE FROM students WHERE  member_id = $member_idSend";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>