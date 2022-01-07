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
    <br>
    <img src="./img/loan.jpg" alt="" style="max-height: 350px; max-width: 100%;">
    <div class="container">
        <div class="loans">
            
               
            
                <div class="loan" onclick="location.href='apply-personal-loan.php?t=Personal+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4> Personal Loan</h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>
                <div class="loan" onclick="location.href='apply-car-loan.php?t=Car+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4> Car Loan</h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>
          
                <div class="loan" onclick="location.href='apply-education-loan.php?t=Education+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4> Education Loan </h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>

                <div class="loan" onclick="location.href='apply-home-loan.php?t=Home+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4> Home Loan </h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>
          
                <div class="loan" onclick="location.href='apply-women-loan.php?t=Women+Group+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4> Women Group Loan </h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>

                <div class="loan" onclick="location.href='apply-business-loan.php?t=Business+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4>Business Loan </h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>

                <div class="loan" onclick="location.href='apply-kyc-loan.php?t=KYC+Loan'">
                    <div class="img"><img src="./img.jpg" alt=""></div>
                    <div class="desc">
                        <h4>  KYC Loan </h4>
                        <p>
                            Small description Small description Small description Small description
                        </p>
                    </div>
                    <i class="material-icons">arrow_forward</i>
                </div>
          
        </div>
 
    </div> 

    <?php require "./footer.php" ?>