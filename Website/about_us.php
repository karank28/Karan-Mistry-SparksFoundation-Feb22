<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="Other/building-solid.svg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>About us - Sparks Bank</title>
    
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="send_money.php">Send Money</a></li>
                        <li><a href="all_cust.php">View All Customer</a></li>
                        <li><a href="transactions.php">Transactions</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="about_us.php"><u>About Us</u></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------  ---------------->

        <div class="container2u">
            <h1>About Us</h1>
            <hr>
            <br>
            <h4>This website is created by</h4>
            <h2 style="font-weight: bold; letter-spacing: 2.5px;">Karan Mistry</h2>
            <h3>Intern at Sparks Foundation</h3>
            <br>
            <hr>
            <p>Website:-
            <a href="https://internship.thesparksfoundation.info/">GRIP | The Sparks Foundation</a></p>
            <p>#gripfeb22 #GRIPFEBRUARY22</p>
            <br>
                
        </div>

        <!------------------- style ---------------->

        <style>
            .container2u{
                width: 90%;
                height: max-content;
                background:white;
                border-radius: 6px;
                justify-content: center;
                margin: 25px 0px;
                box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.226);
                
            }

            .container2u h1{
                color: black;
                padding:50px 15px 15px 15px; 
                border-radius:30px;
            }

            h1:hover, h2:hover{
                transition: .5s;
                color: rgb(32, 98, 208);
            }

        </style>
        
    </header>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>