<?php
// Establish a database connection
$sql = file_get_contents('aaa.sql');
$conn = new mysqli("localhost", "username", "password", "mydb");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$username = $_POST["username"];
$password = $_POST["password"];

// SQL query to check user credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Check if a matching user was found
if ($result->num_rows == 1) {
    // Fetch the user's data
    $user = $result->fetch_assoc();

    // Check the username to determine the destination page
    if ($user["username"] == "user1") {
        // Redirect user "gunjan" to the gunjan.html page
        header("Location: index.html");
        exit();
    } elseif ($user["username"] == "user2") {
        // Redirect user "ananya" to the ananya.html page
        header("Location: index1.html");
        exit();
    } else {
        // Handle other usernames or conditions as needed
        echo "Invalid username.";
    }
} else {
    echo "Invalid username or password. Please try again.";
}

// Close the database connection
$conn->close();
?>
