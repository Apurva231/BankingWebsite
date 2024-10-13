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
        <h1><a href="">Dashboard </a> |</h1>
        <h1><a href=""> Open A/C </a> |</h1>
        <h1><a href=""> Loan </a> |</h1>
        <h1><a href=""> Deposit</a> </h1>
    </nav>

    <div class="dashboard">
        <center>
            <h2>Dashboard</h2>
        </center>
        <h2>List of Depositors</h2>
        <?php
        $fpointer = fopen("file.txt", "r") or exit("Unable to open read file!");
        echo "<table align= \"center\" border=10 >";
        echo "<tr> <td> Name </td>
              <td> A/C No. </td>
              <td> Balance </td>
              <td> Details </td></tr>";
        while (!feof($fpointer)) {
            $temp = fgets($fpointer);
            $temp = explode(",", $temp);
            if ($temp[0] != '') {
                echo "<tr> <td>" . $temp[0] . "</td>
                      <td>" . $temp[1] . "</td>
                      <td>" . $temp[2] . "</td>
                      <td>" . $temp[3] . "</td></tr>";
            }
        }
        echo "</t";
        ?>

        <h2>List of Borrowers</h2>
        <?php
        $fpointer = fopen("file.txt", "r") or exit("Unable to open read file!");
        echo "<table align= \"center\" border=10 >";
        echo "<tr> <td> Name </td>
              <td> A/C No. </td>
              <td> Balance </td>
              <td> Details </td></tr>";
        while (!feof($fpointer)) {
            $temp = fgets($fpointer);
            $temp = explode(",", $temp);
            if ($temp[0] != '') {
                echo "<tr> <td>" . $temp[0] . "</td>
                      <td>" . $temp[1] . "</td>
                      <td>" . $temp[2] . "</td>
                      <td>" . $temp[3] . "</td></tr>";
            }
        }
        echo "</t";
        ?>
    </div>



</body>

</html>