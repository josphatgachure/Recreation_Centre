<?php
$FirstName =$_POST['FirstName'];
$LastName =$_POST['LastName'];
$National_id =$_POST['National_id'];
$Telephone =$_POST['Telephone'];
$check_in =$_POST['chech_in'];
$check_out =$_POST['check_out'];

//database connection
$conn = new mysqli('localhost','root','guestList');
if($conn-> connect_error){
    die('Connection Failed : '.$ conn->connect_error); //error message
}else{
    $stmt =$conn->prepare("insert into guestList(FirstName,LastName, National_id, Telephone, check_in, check_out)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssiiii",$FirstName, $LastName, $National_id, $Telephone, $check_in, $check_out);
    $stmt-> execute();
    echo "Booking successful..";
    $stmt->close();
    $conn->close();
}
?>