<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Protest+Riot&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="stylesheet/style.css" />
    <title>chhiring fitness</title>
</head>
<body>
    <header class="header">
      <div class="mid">
        <!--mid box for navbar--->
        <ul class="navbar">
          <li><a href="index.html">Home</a></li>
          <?php if (isset($_SESSION['email'])): ?>
          <li><a href="member.php">Member</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="register.php">Register</a></li>
        <?php endif; ?>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </header>
