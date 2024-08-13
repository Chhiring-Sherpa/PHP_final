    <?php
include 'templates/header.php'

?>
<main>
    <div class="container">
        <div class="Strong">
            <div class="first">TRAIN HARDER, GET STRONGER</div>
            <div class="second">
                <span>EASY WITH OUR </span>
                <span style="color: rgb(255, 36, 36)">GYM</span><br />
            </div>
            <div class="para">
                <p>To Join Click on Register Above</p>
                <p>or</p>
                <p>sign in below</p>
            </div>
        </div>
        <div class="right">
        <?php if (!isset($_SESSION['email'])): ?>
          <a href="login.php" class="btn">Sign In</a>
        <?php endif; ?>
      </div>
    </div>
</main>
<?php
include 'templates/footer.php'

?>
