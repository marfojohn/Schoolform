<?php 
    $servername = "localhost"; // Or your server name
    $username = "root";
    $password = "";
    $dbname = "l";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    echo "Connected successfully";

    // Now let's get a value from the html by handling the form
    $username = $mysqli->real_escape_string($_POST["username"]);
    $password = $mysqli->real_escape_string($_POST["password"]);
    $email = $mysqli->real_escape_string($_POST["email"]);

    //From the table named form let's insert the value of the users data 
    $sql = "INSERT INTO form (username, email, password) VALUES ('$username', '$email', '$password')";

    //Yeah we can now output something to the user using an if statement
    if ($mysqli->query($sql) === TRUE) {
        echo "$username Your submission have been made succesfully thank you .<br />";
    } else {
        echo "There was an error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
?>
