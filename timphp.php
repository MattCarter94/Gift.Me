<html>
    <head>
        <title>Gift.Me</title>
        <!--Stylesheets, JavaScript etc here-->
    </head>
    <body>
        <?php include "dbconnect.inc" ;
            $sql = "SELECT * FROM product_list";
            $result = $connect->query($sql);
        
            if ($result->num_rows > 0) {
                // output data of each row
                echo "Present List:" . "<br>";
                while($row = $result->fetch_assoc()) {
                    echo $row['product_title'] ?><input type="checkbox" name="present" value="<?php $row['product_title'] ?>"> <br>
                <?php
                }
            } 
            else {
                echo "0 results";
            }
        ?>
    </body>
</html>