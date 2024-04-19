<?php
/*$email = $_POST['email'];
$password = $_POST['password'];
//echo $email;

// Database connection here
$con = new mysqli("localhost", "root", "", "test");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        // Use password_verify() if password is hashed with password_hash()
        if ($data['password'] == $password) {
            echo "<h2>Login Successfully</h2>";
        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or Password</h2>";
    }
}*/

$host = "localhost";
$username = "root";
$password = "root";
$database = "test";

// Create connection
$con = new mysqli("localhost", "root", "", "test");

// Check connection
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    echo "Connected successfully";
    // Proceed with your database operations here
}

?>
