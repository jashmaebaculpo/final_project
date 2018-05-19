<?php
    session_start();
    include 'connect.php';
    $connect = getDBConnection();
    //Checking credentials in database
    $sql = "INSERT INTO Crystals (name, habitat, color, luster, element, price, moh's)
            VALUES (:name, :habitat, :color, :luster, :element, :price, :moh's)";
    $stmt = $connect->prepare($sql);
    $data = array(":name" => $_POST['name'], ":habitat" => $_POST['habitat'], ":color" => $_POST['color'], ":luster" => $_POST['luster'], ":element" => $_POST['element'], 
                    ":price" => $_POST['price'], ":moh's" => $_POST["moh's"]);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //redirecting user if credentials are valid
    if(isset($result['name'])){
    echo "Data has been added";
        
    }
?>

