<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="Other/building-solid.svg">
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <title>Welcome to Sparks Bank</title>

</head>

<body style="background-color:rgb(204, 204, 209);">
<?php include 'spin.php'; ?>
    <center>
    <header class="header">

        <!------------------- navbar ---------------->

        <nav class="navbar navbar-style">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" style="text-decoration: none;">
                        <div class="logol">
                            <div class="iconl">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="contentl">
                                <p>Sparks bank</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="collapse navbar-collapse" id="micon">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><u>Home</u></a></li>
                        <li><a href="send_money.php">Send Money</a></li>
                        <li><a href="all_cust.php">View All Customer</a></li>
                        <li><a href="transactions.php">Transactions</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------  ---------------->

        <div class="container2">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title1">
                        <p>Welcome to Sparks Bank</p>
                    </div>
                    <div class="title2">
                        <p>This website is created by Karan Mistry</p>
                        <p>Intern at Sparks Foundation</p>
                        <p style="font-size: medium;">#GRIPFEBRUARY22</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="Other\banking.jpg" alt="" class="bg">
                </div>
            </div>
        </div>

        <!-------------------  ---------------->

        <div class="container3">
            <div class="box">
                <a href="all_cust.php">
                    <div class="icon"><i class="fas fa-user-friends"></i></div>
                    <div class="content">
                        <h3>View Customers</h3>
                        <p>You can watch every customer of the bank</p>
                    </div>
                </a>
            </div>
            
            <div class="box">
                <a href="send_money.php">
                    <div class="icon"><i class="fas fa-comments-dollar"></i></div>
                    <div class="content">
                        <h3>Transfer Money</h3>
                        <p>You can send money from your account</p>
                    </div>
                </a>
            </div>
            
            <div class="box">
                <a href="check_blc.php">
                    <div class="icon"><i class="fas fa-wallet"></i></div>
                    <div class="content">
                        <h3>View Balance</h3>
                        <p>You can check the remaining balance in your account</p>
                    </div>
                </a>
            </div>
        </div>

        <!------------------- footer ---------------->

        <div class="bottom">
            <div class="bottomL">
                Terms and conditions | Privacy Policy | &copy; 2022 Sparks Bank. All rights reserved.
            </div>
        </div>

    </header>
    </center>

</body>

</html>