<?php
session_start();

// Check if the user is logged in by verifying session variables
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to the registration page with a message
    header("Location: register.php?message=Please register or log in to access the member area.");
    exit();
}

include 'templates/header.php';
?>

<div class="member-area">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['first_name']) . ' ' . htmlspecialchars($_SESSION['last_name']); ?>!</h2>
    <p></p>

    <!-- You can add more member-specific content here -->
    <p>This is your member's area where you can access exclusive content.</p>

    <!-- Log out option -->

</div>

<?php
include 'templates/footer.php';
?>

