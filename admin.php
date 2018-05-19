<?php

session_start();

function displayLogin(){
    //displays Quiz if session is active
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Page
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
        function logOut() {
            $.ajax({
                url: 'logout.php',
                success: function(data){
                    window.location.replace('/logout.php');
                }
            });
        }
        </script>
    </head>
    
    <body>
        <div class="user-menu">
            <?php echo "Welcome ".$_SESSION['username']."! ";?> 
            <input type="button" id="logoutBtn" value="Logout" onclick="logOut()"/>
            
        </div>
        
        <h1>
            Add crystal:
        </h1>
        
        <form method = "post" action = "addData.php">
            <input type="text" name="name" placeholder = "Name"/><br/>
            <input type="text" name="habitat" placeholder = "Habitiat"/><br/>
            <input type="text" name="color" placeholder = "Color"/><br/>
            <input type="text" name="luster" placeholder = "Luster"/><br/>
            <input type="text" name="element" placeholder = "Element"/><br/>
            <input type="text" name="price" placeholder = "Price"/><br/>
            <input type="text" name="moh's" placeholder = "Moh's"/><br/>
            
            <input type= "submit"  name= "submit" value= "add"/>
        </form>
    </body>
</html>