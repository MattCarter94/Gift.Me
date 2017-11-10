<?php
    /*** get all the variables ***/
    $firstname = $_POST["firstname"];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*** connect to database ***/
    include "dbconnect.inc" ;

    /*** set up what needs to be inserted into the database ***/
    $sql = "INSERT INTO users (first_name, last_name, username, password)
            VALUES ('$firstname', '$lastname', '$username', '$password')";

    /*** insert into db, with error if fails ***/
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        /*** if username already exists ***/
        $error = (string) $connect->error;
        if(strpos($error, 'Duplicate entry') !== false){
            header('Location: testRegister.php?user=exists');
        }
        
        echo "Error: " . $sql . "<br> desc: " . $connect->error;
    }

    /*** disconnect from database ***/
    $connect->close();
?>
