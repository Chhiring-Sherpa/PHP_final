<?php
// Start the session
session_start();

// Include the header
include 'templates/header.php';

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    // Redirect to the member area if already logged in
    header("Location: member.php");
    exit();
}

// Check for login attempt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database configuration
    include 'config/dbconfig.php'; // Ensure this includes the PDO connection

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL query
    try {
        // Check if email exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            // Fetch user data
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Store user information in session
                $_SESSION['email'] = $user['email'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                
                // Redirect to member page
                header("Location: member.php");
                exit();
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "Invalid email or password.";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
<div class="login-form">
<div class="form">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Sign In">
    </form>
</div>
</div>

<?php
// Include the footer
include 'templates/footer.php';
?>
