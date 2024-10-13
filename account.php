<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Opening Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head">
        <img src="image1.png" alt="logo image" height="150" class="img">
        <h1>State Bank of India</h1>
    </div>
    <hr>
    <div class="notify">
        <marquee behavior="scroll" direction="right">
            <p>Latest Notifications</p>
        </marquee>
    </div>
    <hr>
    <nav>
        <h1><a href="https://www.onlinesbi.sbi/">Home</a> |</h1>
        <h1><a href=""> About Us</a> |</h1>
        <h1><a href="login.html">Login |</a> </h1>
        <h1><a href="account.html">Account</a> </h1>
    </nav>
    

    <div class="container">
        <center>
        <?php
            echo "<h2>Account Opening Details</h2>";
            echo "<b>Customer Name : </b>";
            echo $_POST["customer_name"];
            echo "<br>";
            echo "<b>Address : </b>";
            echo $_POST["address"];
            echo "<br>";
            echo "<b>City : </b>";
            echo $_POST["city"];
            echo "<br>";
        ?>
        </center>
    </div>
</body>
</html>