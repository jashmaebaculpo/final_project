<?php
    session_start();
    include 'connect.php';
    $connect = getDBConnection();
    //Checking credentials in database
    $sql = "INSERT INTO crystals (name, habitat, color, luster, element, price, mohs)
            VALUES (:name, :habitat, :color, :luster, :element, :price, :mohs)";
    $stmt = $connect->prepare($sql);
    $data = array(":name" => $_POST['name'], ":habitat" => $_POST['habitat'], ":color" => $_POST['color'], ":luster" => $_POST['luster'], ":element" => $_POST['element'], 
                    ":price" => $_POST['price'], ":moh's" => $_POST['mohs']);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //redirecting user if credentials are valid
    if(isset($result['name'])){
    echo "Data has been added";
    header('Location: admin.php');
        
    }
?>

