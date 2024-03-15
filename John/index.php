<?php 
    $dbname = "localhost";
    $dbuser = "root";
    $dbpass = "";
    // Let's connect to the database called l 
    $dbdata = "l";

    // Establishing connection to the database
    $mysqli = new mysqli($dbname, $dbuser, $dbpass, $dbdata);

    // Check if the database connected successfully 
    if ($mysqli->connect_errno) {
        printf("The database did not connect successfully: %s", $mysqli->connect_error);
        exit();
    } else {
        // printf("The connection was successful <br />");

        // Get values from the HTML form
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        // Prepare SQL statement to insert data into the table named 'form'
        $sql = "INSERT INTO form (username, email, password) 
        VALUES ('$username', '$email', '$password')";

        // Execute SQL query
        if ($mysqli->query($sql) === TRUE) {
            printf("{$username} Your submission has been made successfully. Thank you.<br />");
        } else {
            printf("There was an error. Check your data properly: %s<br />", $mysqli->error);
        }

        // Close database connection
        $mysqli->close();
    }
?>
