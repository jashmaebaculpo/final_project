<?php
    session_start();
    include 'connect.php';
    $connect = getDBConnection();
    echo "connected";
    //Checking credentials in database
    $sql = "INSERT INTO crystals (gemID, name, habitat, color, luster, element, price, mohs)
            VALUES (:NULL, :name, :habitat, :color, :luster, :element, :price, :mohs)";
            echo "made the crystal";
    $stmt = $connect->prepare($sql);
    echo "made the statement";
    $data = array(":name" => $_POST['name'], ":habitat" => $_POST['habitat'], ":color" => $_POST['color'], ":luster" => $_POST['luster'], ":element" => $_POST['element'], 
                    ":price" => $_POST['price'], ":moh's" => $_POST['mohs']);
    echo "made the data";
    $stmt->execute($data);
    echo "excecuted the statement";
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "fetched the statement";
    //redirecting user if credentials are valid
    if(isset($result['name'])){
    echo "Data has been added";
    header('Location: admin.php');
    }
    
    else{
        
    }
?>

