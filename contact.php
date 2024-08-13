<?php
include 'templates/header.php';

if (isset($_POST['submit'])) {
    // Sanitize and process form data here, if needed
    $firstName = htmlspecialchars($_POST['name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['text']);
    
    // Display a thank you message
    echo "<div class='thank-you-message'>
            <p>Thank you, $firstName $lastName, for reaching out!</P>
             <P>We will get back to you at $email.</p>
          </div>";
} else {
?>

<div class="contact">
    <form action="#" method="POST">
        <label for="name">First Name</label>
        <input type="text" id="name" name="name" class="name" required>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="text">Your Message</label>
        <textarea name="text" id="text" cols="30" rows="7" required></textarea>

        <input type="submit" name="submit" value="Send">
    </form>
</div>

<?php
}
include 'templates/footer.php';
?>
