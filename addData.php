<?php
    session_start();
    include 'connect.php';
    $connect = getDBConnection();

    //Checking credentials in database
    $sql = "INSERT INTO crystals (gemID, name, habitat, color, luster, element, price, mohs)
            VALUES (:NULL, :name, :habitat, :color, :luster, :element, :price, :mohs)";
    echo "made the crystal";
    $stmt = $connect->prepare($sql);
    echo "made the statement \n";
    //$data = array(":name" => $_POST['name'], ":habitat" => $_POST['habitat'], ":color" => $_POST['color'], ":luster" => $_POST['luster'], ":element" => $_POST['element'], 
                    //":price" => $_POST['price'], ":mohs" => $_POST['mohs']);
   echo "Made the data\n";
    $dbConn->exec($sql);
    echo "connected\n";
?>

