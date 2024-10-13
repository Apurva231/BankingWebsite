<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
</head>

<body>
    <?php
    include 'conn.php';
    $custname = $_POST['customer_name'];
    $addr = $_POST['address'];
    $city = $_POST['city'];
    $sql = "insert into customer (CUSTOMER_NAME,CUSTOMER_STREET, CUSTOMER_CITY) values ( '" .$custname . "', '" . $addr . "','" . $city . "')";
    mysqli_query($conn, $sql);
    header('location:dashboard.html');
    ?>
</body>

</html>