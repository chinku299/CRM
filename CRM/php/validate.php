<?php
include_once("connection.php");

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    $loginSuccessful = false;

    foreach ($users as $user) {
        if (($user['username'] == $username) && ($user['password'] == $password)) {
            $loginSuccessful = true;
            break;
        }
    }

    if ($loginSuccessful) {
        header("location: dashborad.php");
    } else {
        echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
        die();
    }
}
?>
