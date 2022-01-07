<?php
require "./config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="topBar">
        <a href="javascript:void(0)" class="leftMenuBar">
            <i class="material-icons">menu</i>
        </a>
        <center>
            <h3> <?php if (isset($_GET['t'])) {
                        echo $_GET['t'];
                    } else {
                        echo $com['name'];
                    }  ?></h3>
        </center>
        <a href="javascript:void(0)" class="rightMenuBar">
            <i class="material-icons">notifications_active</i>
        </a>
    </div>
    <br>
    <img src="./img/business.jpg" alt="" style="max-height: 350px; max-width: 100%;">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <p>Enter Your First Name </p>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your first name ">
            <p>Enter Your Last Name </p>
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter your last name ">
            <p>Select Your Date of Birth </p>
            <input type="date" name="dob" id="dob" class="form-control">

            <p>Enter Your PAN no. </p>
            <input type="text" name="pan" id="pan" class="form-control" placeholder="Enter Your PAN no.">
            <p>Enter Your Address </p>
            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address">
            <p>Enter Your Pin Code </p>
            <input type="number" name="pin_code" id="pin_code" class="form-control" placeholder="Enter Your Pin Code">

            <p>Your District/City </p>
            <input type="text" name="district" id="district" class="form-control" placeholder="Your District/City">

            <p>Your State </p>
            <input type="text" name="state" id="state" class="form-control" placeholder="Your State">

            <p>Your Business Title </p>
            <input type="text" name="loan_title" id="loan_title" class="form-control" placeholder="Your Business Title">

            <p>Business Details </p>
            <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>
            <p>Amount Of Loan </p>
            <input type="number" name="loan_amount" id="loan_amount" class="form-control" placeholder="Amount Of Loan ">

            <p>Upload Pan Card Image </p>
            <input type="file" accept="image/*" name="pan_img" id="pan_img" class="form-control">

            <p>Upload Adhaar Card Image </p>
            <input type="file" accept="image/*" name="adhaar_img" id="adhaar_img" class="form-control">
            <br>
            <center>
                <input type="submit" value="Apply" class="submitButton">
            </center>

        </form>
    </div>

    <style>
        .submitButton {
            padding: 6px 30px;
            background: white;
            border: 1px solid #333;
            border-radius: 19px;
        }

        form p {
            margin-top: 15px;
            margin-bottom: 2px;
            font-weight: bold;
            color: #787;
        }

        .form-control {
            border-radius: 0px;
            border: 0px;
            border-bottom: 1px solid #333;
        }
    </style>
    <?php require "./footer.php" ?>