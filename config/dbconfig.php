<?php
// Start the session
session_start();
include 'db_connection.php';
// Include database connection configuration if separated
//include 'db_connection.php'; // If db_connection.php is in the config folder

// Retrieve form data
$firstName = $_POST['Name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt password

// Prepare and execute SQL query
try {
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        // Email already registered
        header("Location: ../register.php?message=You are already registered.");
    } else {
        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $email, $password]);

        // Store user information in session
        $_SESSION['first_name'] = $firstName;
        $_SESSION['last_name'] = $lastName;
        $_SESSION['email'] = $email;
        
        // Redirect to member page
        header("Location:../member.php");
        exit();
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

