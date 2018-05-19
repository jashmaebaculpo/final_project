<?php
session_start();
include 'connect.php';
$connect = getDBConnection();
//Checking credentials in database
$sql = "SELECT * FROM admin 
        WHERE username = :username
        AND password = :password";
$stmt = $connect->prepare($sql);
$data = array(":username" => $_POST['username'], ":password" => sha1($_POST['password']));
$stmt->execute($data);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

//redirecting user if credentials are valid
if(isset($user['username'])){
$_SESSION['username'] = $user['username'];
header('Location: admin.php');
    
} else {
    echo $user['username'];
    echo "The values entered are incorrect. <a href='login.php'>Retry</a>";
}
?>