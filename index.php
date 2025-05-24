<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chandan</title>
</head>
<body>

  <h1>Assignment 1</h1>

  <p> 
    Welcome, 
    <?php 
      if (isset($_SESSION['username'])) {
        echo htmlspecialchars($_SESSION['username']);
      } else {
        echo "Chandan";
      }
    ?> 
  </p>

  <p><a href="/login.php">Click here to login</a></p>

</body>
</html>