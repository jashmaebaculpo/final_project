<!DOCTYPE html>
<html>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <head>
        <title>Login</title>
        
    </head>
    <body>
        <h1>Login</h1>
        <h2>Credentials required before submiting form.</h2>
        <p>You can log in using usernames <strong>admin</strong> or <strong>admin2</strong>. The password is <strong>hello</strong>.</p>
        
        <!--Form to enter credentials-->
        <form method = "post" action = "verifyUser.php">
            <input type="text" name="username" placeholder = "Username"/><br/>
            <input type="text" name="password" placeholder = "Password"/><br/>
            <input type= "submit"  name= "submit" value= "Login"/>
        </form>
        
    </body>
</html>