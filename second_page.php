<!-- Exercice 2 -->

<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>
</head>
<body>
    <h1>Second Page</h1>
    <?php
        echo "<p>Last Name: " . $_SESSION['lastname'] . "</p>";
        echo "<p>First Name: " . $_SESSION['firstname'] . "</p>";
        echo "<p>Age: " . $_SESSION['age'] . "</p>";
    ?>
    
</body>
</html>