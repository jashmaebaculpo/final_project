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
        
        <script>
        /* global $ */
        $(document).ready(function(){
            $("#logoutBtn").click( function() 
                {
                    window.location.href="logout.php";
                }
            );
        });
        </script>
    </head>
    
    <body>
        <div class="user-menu">
            <?php echo "Welcome ".$_SESSION['username']."! ";?> 
            <input type="button" id="logoutBtn" value="Logout" />
            
        </div>
    </body>
</html>