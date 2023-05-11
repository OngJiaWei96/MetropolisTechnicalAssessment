<!DOCTYPE html>
<html>

<head>
    <title>
        STAFF LOGIN
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="auth.blade.php" method="post">
        <h2>STAFF LOGIN</h2>
        <br>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Please key in your username">
        <label>Password</label>
        <input type="text" name="password" placeholder="Please key in your password">
        <button type="submit">LOGIN</button>
    </form>
</body>


</html>