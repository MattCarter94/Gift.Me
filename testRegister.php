<html>
    <head>
        <title>Gift.Me</title>
        <!--Stylesheets, JavaScript etc here-->
    </head>
    <body>
        <form action="testRegisterPost.php" method="post">
            <?php if($_GET["user"]){
                echo 'Sorry this username already exists!';
            }
            ?><br><br>
            First name:<br>
            <input type="text" name="firstname" placeholder="First name" required>
            <br>
            Last name:<br>
            <input type="text" name="lastname" placeholder="Last name" required>
            <br>
            Please enter unique Username:<br>
            <input type="text" name="username" placeholder="Username" required>
            <br>
            Please enter valid Password :<br>
            <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,30}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="30" required>
            
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    
    </body>
</html>