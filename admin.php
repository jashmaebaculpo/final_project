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
    </head>
    
    <body>
        <div class="user-menu">
            <?php echo "Welcome ".$_SESSION['username']."! ";?> 
            <input type="button" id="logoutBtn" value="Logout" />
            <script>
              $("#logoutBtn").click( function() 
                {
                    window.location.href="logout.php";
                }
            );
            </script>
        </div>
    </body>
</html>