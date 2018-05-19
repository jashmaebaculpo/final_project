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
        
        
        <!--<script src="js/need.js"></script>-->
    </body>
</html>