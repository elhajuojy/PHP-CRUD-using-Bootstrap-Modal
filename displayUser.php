<?php
    include "./connect.php";
    
    
    if(isset($_POST["displaySend"])){
        $table = '<table class="table text-center">
        <thead class="bg-dark text-white ">
            <tr>
                <th scope="col">#</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">age</th>
                <th scope="col">class_belong</th>
                <th scope="col">operation</th>
            </tr>
        </thead>
        <tbody>';
        
        $sql = "SELECT * FROM students";
        
        $result = mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
            $firstname =$row['firstname'];
            $member_id = $row['member_id'];
            $lastname =$row['lastname'];
            $age =$row['age'];
            $class_belong =$row['class_belong'];
            $table .='
            <tr>
                <th scope="row">'.$member_id.'</th>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>'.$age.'</td>
                <td>'.$class_belong.'</td>
                <td>
                    <button class="btn my-1 btn-danger" onclick="deleteUser('.$member_id.')"> Delete</button>
                    <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" onclick="GetUpdateUser('.$member_id.')" data-bs-target="#UpdateModal"> update</button>
                </td>
            </tr>
            ';
        }
        
        $table .='
        </tboday>
        </table>';
        
        echo $table;
    }

?>