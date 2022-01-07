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
            <h3><?= $com['name'] ?></h3>
        </center>
        <a href="javascript:void(0)" class="rightMenuBar">
            <i class="material-icons">notifications_active</i>
        </a>
    </div>
    <br><br><br> <br>

    <div class="container">
        &nbsp; Customer Care 
        <div class="cardXX">
            <div class="liveBTN"> <br> <i class="material-icons">live_help</i></div>
            <div class="desc">
                <h4>For feedback/concern</h4> 
                <small>Call us at </small>
                <h3><?= $com['phone'] ?></h3>
            </div>
        </div>

        <br><br>
        &nbsp; Branch Timings  <br>
        <div class="card">
            <big>All Branches</big>
            <br>
            <small>
                Monday - Friday &nbsp; &nbsp; 9.30 am to 4.30 pm <br>
                <br>
                Saturday 9.30 am to 2.00 pm
                <br>(On 1st, 3rd, 5th Saturday) <br>
                <br>
                Branch will remain closed on 2nd and 4th Saturday of every month and on respective State Holidays.
            </small>
        </div>
    </div>

    <style>
         
        .cardXX {
            display: flex;
            width: 100%;
            box-shadow: 0 2px 2px 1px #9889;
            border-radius: 6px;
            padding: 10px;
            background: #eee;
        }
        .liveBTN {
            width: 12%;
            float: left; 
        }

        .liveBTN i {
            font-size: 46px;
        }
        .desc {
            width: 80% ;
            padding-left: 15px;
            float: right; 
        }
        .desc h4, .desc h3 {
            font-weight: 350;
        }
        .card {
            padding: 15px;
            padding-left: 25px;
            line-height: 14px;
            font-weight: 600;
            background: #eee;
            border: 0;
            box-shadow: 0 2px 2px 1px #9889;
        }
    </style>

    <?php require "./footer.php" ?>