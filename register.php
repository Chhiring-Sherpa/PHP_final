<?php
include 'templates/header.php'

?>
<div class="registration-form">
            <h2>Register</h2>
            <form action="config/dbconfig.php" method="post">
                <label for="">First Name:</label>
                <input type="text" name="Name" id="name" required>
                <label for="last">Last Name:</label>
                <input type="text" name="last_name" id="last" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit">
            </form>
            <?php
            if (isset($_GET['message'])) {
                echo '<p>' . htmlspecialchars($_GET['message']) . '</p>';
                echo'<p>'.'please login from home page'.'</p>';

            }
            ?>
</div>
    <?php

include 'templates/footer.php'

?>