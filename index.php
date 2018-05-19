<?php

?>

<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <head>
        <title>
            Rock of the Month
        </title>
    </head>
    
    <body>
        <div id = nameOfWebsite>
        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">            
        <h1>
            Rock of the Month
            </h1>
        </div>
        
        <dv id = "admin">
            <a href= "login.php">Admin?</a>
        </dv>
        
        <div id = "rock">
        <?php
            
            function getRock()
                {
                    $Rocks = array('Amethyst', 'Apophyillite', 'Aventurine', 'Carnelian', 'Citrine', 'Danburite', 'Emerald', 'Fluorite', 'Howlite', 'Jade', 'Kyanite', 'Lepidolite',
                                    'Malachite', 'Moonstone', 'Onyx', 'Prasiolite', 'Pyrite', 'Rhodonite', 'Selenite', 'Sodalite', 'Topaz', 'Unakite');
                    
                    $chosenOne = rand(0, 22); 
                    $imgURL = "./Crystals/" . $Rocks[$chosenOne] . ".jpg";
                    return $imgURL;
                }
                
                
                $imgURL = getRock();
                echo "<img src = '$imgURL' >";
        ?>
        </div>
        
        
    </body>
</html>