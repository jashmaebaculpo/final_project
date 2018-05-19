<?php
    session_start();
    include 'connect.php';
    $connect = getDBConnection();

    //Checking credentials in database
    $sql = "DELETE FROM crystals
            WHERE name = :name";
    $stmt = $connect->prepare($sql);
    $data = array(":name" => $_POST['name']);
   
    $stmt->execute($data);
    
    if( $stmt === false ) {
        var_dump(sqlsrv_errors);die;
    }
?>

