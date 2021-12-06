<?php
if($_POST["submit"]){
    $FirstName =$_POST["firstname"];
    $LastName =$_POST["lastname"];
    $National_id =$_POST["national_id"];
    $Telephone =$_POST["telephone"];
    $Check_in =$_POST["check-in"];
    $Check_out =$_POST["firstname"];
    $host = "localhost";
    $dbusername ="root";
    $dbpassword ="wings2fly"
    $conn = new mysqli ($host, $dbusername,$dbpassword);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'
        .mysqli_connect_error());
    }
    else{
        INSERT INTO guestList(FirstName, LastName, national_id,Telephone, Check_in, Check_out)
        values ('$FirstName','$LastName','$National_id','$Telephone','$Check_in','$Check_out');
        if($conn->query($sql)){
            echo "Booked successfully";
        }
        else{
            echo "Error: ".$sql .<br>.$conn->error;
        }
        $conn->close();
    }
?>