<?php
require "./config.php"; 

if(isset($_POST['login'])) {
    header("location: /"); 
}
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
    <br><br><br>
    <div class="topBg"></div>
    <main class="container" >
        <div class="overflowDiv" style="height:60vh"> 
        <br><br><br><br> 
            <small> Sign In With </small>
            <h4><?= $com['name'] ?></h4>
            <div class="PayBox">
                 <form method="POST" action="">
                     <p>Date of birth </p>
                     <input type="date" class="form-control" name="dob" placeholder="Select date of birth">
                     <p>Mobile Number </p>
                     <input type="number" class="form-control" name="phone" placeholder="Enter Mobile Number">
                     <br> 
                     <center>
                         <input type="submit" class="submitButton" value="Get OTP" name="login">
                     </center>
                 </form>
            </div>
            
        </div>
         
    </main>
    
    <style>
        .form-control {
            border:none;
            border-radius: 0px!important;
            border-bottom:1px solid #000;
        }
        .PayBox p {
            margin-top:15px;
            margin-bottom:2px; 
            color:#000;
        }
        .PayBox {
            width:100%; 
            text-align:left;
            padding:0px;
        }
        input:focus {
            border:1px solid lightblue;
            box-shadow:none;
        }
        .submitButton {
            padding:6px 30px;
            background:white;
            border:1px solid #333;
            border-radius: 19px;
        }
    </style>
    
    <div class="leftSidebar">
        <i class="material-icons closingButton">close</i>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">documents</a></li>
            <li><a href="">contact us</a></li>
            <li><a href="">Version </a></li>
        </ul>
    </div>
    
    <script>
        $(document).ready(function() {
            $(".leftMenuBar").click(function() {
                $(".leftSidebar").show();
            });
            $(".closingButton").click(function() {
                $(".leftSidebar").hide();
            });
        });
    </script>
</body>
</html>