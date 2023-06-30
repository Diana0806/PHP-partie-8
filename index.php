<!-- Exercice 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Information</h1>
    <?php
        echo "<p>User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
        echo "<p>IP Address: " . $_SERVER['REMOTE_ADDR'] . "</p>";
        echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
    ?> 
</body>
</html>

<!-- Exercice 2 -->

<?php
session_start();
    $_SESSION['lastname'] = 'Green';
    $_SESSION['firstname'] = 'Anna';
    $_SESSION['age'] = 45;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1>Index Page</h1>
    <p>Click <a href="second_page.php">here</a> to go to the second page.</p>
    
</body>
</html>

<!-- Exercice 3 -->

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        setcookie('login', $login, time() + (86400 * 30), '/'); // Store login in a cookie for 30 days
        setcookie('password', $password, time() + (86400 * 30), '/'); // Store password in a cookie for 30 days
        
        header('Location: stored_info.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Submit">
    </form>  
</body>
</html>

<!-- Exercice 4 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Stored Information</h1>
    <?php
        if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
            $login = $_COOKIE['login'];
            $password = $_COOKIE['password'];
            
            echo "<p>Login: " . $login . "</p>";
            echo "<p>Password: " . $password . "</p>";
        } else {
            echo "<p>No stored information found.</p>";
        }
    ?>
</body>
</html>

<!-- Exercice 5 -->

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        setcookie('login', $login, time() + (86400 * 30), '/'); // Store updated login in a cookie for 30 days
        setcookie('password', $password, time() + (86400 * 30), '/'); // Store updated password in a cookie for 30 days
        
        header('Location: stored_info.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Cookie</title>
</head>
<body>
<h1>Modify Cookie</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>