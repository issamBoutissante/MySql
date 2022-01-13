<?php
//creating connection using mysqli oop
// $conn=new mysqli("localhost",'root','');
// if($conn->connect_error){
//     echo "Failed to connect";
//     return;
// }
// echo "Connected successfully"



//creating connection using mysqli procedural
$conn=mysqli_connect("localhost","root","");
if($conn->connect_error){
    echo "Failed to connect";
    return ;
}
echo "Connected successfully";

// Create connection using PDO

// try{
//     $conn=new PDO("mysql:host=localhost;dbname=test;",'root','');
//     echo "Connected successfully";
// }catch(PDOException $e){
//     echo $e->getMessage();
// }
?>