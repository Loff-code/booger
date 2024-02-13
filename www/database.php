<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $name = $_POST["name"];
    $email = $_POST["gay"];

    echo "Name: $name<br>";
    echo "Email: $email<br>";
}

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
?>