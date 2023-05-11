<!DOCTYPE html>
<html>

<head>
    <title>
        Visitor Registration
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="visitorprocessing.blade.php" method="post">
        <!-- <form action="../../metropolis_technical_assessment/routes/web.php/submit" method="post"> -->
        <!-- <form action="submit" method="post"> -->
        <h2>VISITOR REGISTRATION</h2>
        <!-- <h3>Welcome to Metropolis Security Office</h3> -->
        <br>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <p>Please fill in from below</p>
        <label>Your name:*</label>
        <input type="text" name="name" placeholder="Please key in your name" required>

        <label>Your contact number:*</label>
        <input type="text" name="contactnumber" placeholder="Please key in your contact number" required>

        <label>Purpose:*</label>
        <input type="text" name="purpose" placeholder="Any?" required>

        <button type="submit">Check In</button>
        <a href="login.blade.php">Are you staff from our company?</a>
    </form>
</body>


</html>