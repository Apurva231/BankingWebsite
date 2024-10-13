<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowers Details</title>
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
        <h1><a href="home.html">Home</a> |</h1>
        <h1><a href=""> About Us</a> |</h1>
        <h1><a href="login.html">Login |</a> </h1>
        <h1><a href="account.html">Account</a> </h1>
    </nav>

    <?php
    include 'conn.php';
    $uname = $_GET['uname'];
    $sql = "select CUSTOMER_NAME, CUSTOMER_STREET,CUSTOMER_CITY from CUSTOMER where CUSTOMER_NAME='$uname'";
    $res = mysqli_query($conn, $sql);
    $cust_name = ''; //blank variable to store information
    $addr = '';
    $city = '';
    if ($result = mysqli_fetch_assoc($res)) {
        $cust_name = $result['CUSTOMER_NAME'];
        $addr = $result['CUSTOMER_STREET'];
        $city = $result['CUSTOMER_CITY'];
    }
    ?>

    <h1>
        <center>Borrower Details</center>
    </h1>
    <table border="1">
        <tr>
            <td>Customer Name:</td>
            <td><?php echo $cust_name; ?> </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $addr; ?> </td>
        </tr>
        <tr>
            <td>City:</td>
            <td><?php echo $city; ?> </td>
        </tr>
    </table>

</body>
<footer>
    © State Bank of India (APM Id:Serv_Tran_564)
    <br>
    <small>Site best viewed at 1024 x 768 resolution in Microsoft Edge 79+, Mozilla 96+, Google Chrome 97+</small>
</footer>

</html>