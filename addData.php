<?php
    session_start();
    include 'connect.php';
    $connect = getDBConnection();

    //Checking credentials in database
    $sql = "INSERT INTO crystals (gemID, name, habitat, color, luster, element, price, mohs)
            VALUES (:NULL, :name, :habitat, :color, :luster, :element, :price, :mohs)";
    $stmt = $connect->prepare($sql);
    $data = array(":name" => $_POST['name'], ":habitat" => $_POST['habitat'], ":color" => $_POST['color'], ":luster" => $_POST['luster'], ":element" => $_POST['element'], 
                    ":price" => $_POST['price'], ":mohs" => $_POST['mohs']);
   
    $stmt->execute($data);
    
    if( $stmt === false ) {
        var_dump(sqlsrv_errors);die;
    }
?>

