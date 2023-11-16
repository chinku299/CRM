<?php
// Include the database connection file
include_once("connection.php");

// Define a function to sanitize and validate input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and sanitize input data
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // Validate input data (you can add more validation as needed)
    if (empty($username) || empty($password)) {
        // Display an error message if any field is empty
        echo "All fields are required.";
    } else {
        // Hash the password (you should use a stronger hashing algorithm in a real-world scenario)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute a SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        // Check if the query was successful
        if ($stmt->execute()) {
            echo "Data saved successfully.";
        } else {
            echo "Error saving data.";
        }
    }
}
?>
