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
    <title>Contact us - Sparks Bank</title>
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
                        <li><a href="contact_us.php"><u>Contact Us</u></a></li>
                        <li><a href="about_us.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------  ---------------->

        <div class="container2c">
            <h1>Contact Us</h1>
            <hr>
            <br>
            <form action="contact_us.php" method="post">
                <input type="text" class="formin form-control" name="name" id="" placeholder="Name"><br>
                <input type="email" class="formin form-control" name="email" id="" placeholder="Email"><br>
                <textarea name="message" class="formin form-control" placeholder="Enter your message" rows="5" cols="47" id="" style="padding: 15px;"></textarea>
                <br><br><input class="btn mybtn btn-outline-light" type="submit" value="Submit">
            </form>
        </div>

        <!------------------- style ---------------->

        <style>
            .container2c{
                width: 90%;
                height: max-content;
                background:white;
                border-radius: 6px;
                justify-content: center;
                margin: 25px 0px;
                box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.226);   
            }

            .container2c h1{
                color: black;
                padding:50px 15px 15px 15px; 
                border-radius:30px;
            }

            h1:hover{
                transition: .5s;
                color: rgb(32, 98, 208);
            }

            textarea{
                width: 380px;
                border-radius: 6px; 
                padding: 5px 5px 5px 15px;
            }

            .formin {
                border-radius: 6px;
                width: 380px;
                height: 50px;
                padding: 5px 5px 5px 15px;
            }

            .mybtn {
                width: 380px;
                background-color: white;
                margin: 20px auto;
                
                border-style: solid;
                border-width: 2px;
                border-color: rgb(32, 98, 208);
                margin-bottom: 30px;
                border-radius: 6px;
                font-weight: bold;
            }

            .mybtn:hover{
                transition: 0.3s;
                background-color: rgb(32, 98, 208) ;
                color: white;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.226);
            }
            
            .mybtn:active {
                background-color: rgb(32, 98, 208);
            }
        </style>

        <!------------------- php ---------------->

        <?php

            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("Connection not established: ".mysqli_connect_error());
            }else{

            if($_SERVER['REQUEST_METHOD']== 'POST'){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $msg = $_POST['message'];
                
                $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert" style="width:90%; border-radius: 6px;">
                    <div>   
                    <i class="fas fa-check-circle"></i>
                    Thank you '.$name.' for contacting us!
                    </div>
                </div>';
                }else{
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="width:90%; border-radius: 6px;" >
                    <div>
                    <i class="fas fa-times-circle"></i>
                    Oops '.$name.'! Something went wrong!
                    </div>
                </div>';
                }
            }
            }

        ?>

    </header>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>