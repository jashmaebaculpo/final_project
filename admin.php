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
        $(function() {
            $('#logoutBtn').on('click', 'button', function(){
                $.ajax('logout.php',{
                    success: function(response)
                    {
                        window.location.href="logout.php";
                    }
                })
            })
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