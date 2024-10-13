<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <h1><a href="dashboard.html">Dashboard </a> |</h1>
        <h1><a href="account.html"> Open A/C </a> |</h1>
        <h1><a href=""> Loan </a> |</h1>
        <h1><a href=""> Deposit</a> </h1>
    </nav>

    <div class="dashboard">

        <h1><center>Dashboard</center></h1>

        <div class="depositor">
            <h2><center>List of Depositors</center></h2>
            <?php
            include 'conn.php';
            $sql = "select customer_name, depositor.account_number, balance from depositor inner join account on depositor.account_number= account.account_number";
            $res = mysqli_query($conn, $sql);
            //replace code for table in html page with the following code:
            echo '<table border="1"><tr><th>Name</th><th>A/C No.</th><th>Balance</th><th>Details</th></tr>';
            while ($result = mysqli_fetch_assoc($res)) {
                echo '<tr><td>' . $result['customer_name'] . '</td><td>' . $result['account_number'] . '</td><td>' . $result['balance'] . '</td><td><a href="depositor_detail.php?uname=' . $result['customer_name'] . ' ">View Details</a></td></tr>';
            }
            echo '</table>';
            ?>
        </div>
        
        <div class="borrower">
            <h2><center>List of Borrowers</center></h2>
            <?php
            include 'conn.php';
            $sql = "select customer_name, borrower.loan_number, amount from borrower inner join loan on borrower.loan_number= loan.loan_number";
            $res = mysqli_query($conn, $sql);
            //replace code for table in html page with the following code:
            echo '<table border="1"><tr><th>Name</th><th>Loan No.</th><th>Amount</th><th>Details</th></tr>';
            while ($result = mysqli_fetch_assoc($res)) {
                echo '<tr><td>' . $result['customer_name'] . '</td><td>' . $result['loan_number'] . '</td><td>' . $result['amount'] . '</td><td><a href="borrower_detail.php?uname=' . $result['customer_name'] . ' ">View Details</a></td></tr>';
            }
            echo '</table>';
            ?>
        </div>

    </div>

</body>
<footer>
    © State Bank of India (APM Id:Serv_Tran_564)
    <br>
    <small>Site best viewed at 1024 x 768 resolution in Microsoft Edge 79+, Mozilla 96+, Google Chrome 97+</small>
</footer>

</html>