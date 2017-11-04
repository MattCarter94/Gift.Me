<html>
    <head>
        <title>Gift.Me</title>
        <!--Stylesheets, JavaScript etc here-->
    </head>
    <body>
        
       <?php include "dbconnect.inc" ;
        $sql = "SELECT * FROM users";
       
        $result = $connect->query($sql);
        
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Username: " . $row['username'] . " | First Name: " . $row['first_name'] . " | Surname: " . $row['surname'] . "<br>";
            }
        } else {
            echo "0 results";
        }
        
        
        ?>
        
        
        
        
        
    </body>
</html>