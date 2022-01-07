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
       
        <div class="cardXX">
             <center>
                 <i class="material-icons font56">description</i> <br>
                 <p>
                     Enter your application number below to get the application status . 
                 </p> <br><br> 
             </center>
             <form action="" method="post">
                 <input type="text" name="" class="form-control" id="" placeholder="Enter Application Number"> 
             </form>
        </div> 
        <center> <br>
            <input type="submit" value="Submit" class="submitButton">
        </center>
    </div>

    <style>
        .font56 {
            font-size: 56px;
        }
        .cardXX {
            display: flex;
            width: 100%;
            box-shadow: 0 2px 2px 1px #9889;
            border-radius: 6px;
            padding: 10px;
            background: #ffffff;
            text-align: center;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .form-control {
            border-radius: 20px; 
            width: 300px; 
            border: none;
            border: 1px solid black;
        }
        .cardXX i {
            color: #dc3545;
        }
        .submitButton {
            padding: 10px 56px;
            border-radius: 36px; 
            text-transform: uppercase;
            margin-bottom: 36px;
            background: #333; 
            border: 1px solid transparent;
            color: white;
        }
        .submitButton:hover {
            background: transparent;
            color: #333;
            border: 1px solid #333;
        }

        input {
            background: transparent;
        }
        
        input:focus, input:active {
            border: none;
            border-bottom: 1px solid lightgreen;
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