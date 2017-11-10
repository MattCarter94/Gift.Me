<?php
    /*** get all the variables ***/
    $firstname = $_POST["firstname"];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*** connect to database ***/
    include "dbconnect.inc" ;

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $connect->query($query);
    if ($result->num_rows > 0) {
        echo 'Sorry, this username already exists!';
        header('Location: testRegister.php?user=exists');
    }
    /*** set up what needs to be inserted into the database ***/
    $sql = "INSERT INTO users (first_name, last_name, username, password)
            VALUES ('$firstname', '$lastname', '$username', '$password')";

    /*** insert into db, with error if fails ***/
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    /*** disconnect from database ***/
    $connect->close();
?>
