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

    <title>All customers - Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <li><a href="all_cust.php"><u>View All Customer</u></a></li>
                        <li><a href="transactions.php">Transactions</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------- ---------------->

        <div class="container2a">
            <h1>All Customers</h1>
            <hr>
            <?php
                $conn = mysqli_connect($servername, $username, $password, $database);
                if(!$conn)
                {
                    die("Connection not established: ".mysqli_connect_error());
                }
                else {

                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($conn, $sql);?>

                    <table class="table table-dark" style="margin-top: 30px;">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Account No</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Send Money From</th>
                            </tr>
                        </thead>
                        <?php
                            echo "<tbody>";
                            while($row = mysqli_fetch_assoc($result)){
                                echo
                                    '<tr>
                                    <td>'.$row['name'].'</td>
                                    <td style="text-transform: lowercase;">'.$row['email'].'</td>
                                    <td>'.$row['accno'].'</td>
                                    <td>'.$row['blc'].'</td>
                                    <td>
                                    <a href="send_money.php?reads='.$row['accno'].'"
                                    <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
                                    </a>
                                    </td>
                                    </tr>';
                                }
                        } echo "</tbody>";?>
                    </table>
                
                    <br>
                    
        </div>

        <!------------------- style ---------------->

        <style>

            .mybtn {
                border-radius: 6px;
                border-style: solid;
                border-width: 2px;
                border-color: rgb(32, 98, 208);
                font-weight: bold;
                background-color: white ;
                color:rgb(32, 98, 208) ;
            }

            .mybtn:hover {
                transition: 0.3s;
                background-color: rgb(32, 98, 208) ;
                color: white;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.226);
            }

            .mybtn:active {
                background-color: rgb(32, 98, 208);
                color: rgb(32, 98, 208);
            }
        
            .container2a{
                width: 90%;
                height: max-content;
                background:white;
                border-radius: 6px;
                justify-content: center;
                margin: 25px 0px;
                box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.226);            
            }

            .container2a h1{
                color: black;
                padding:50px 15px 15px 15px; 
                border-radius:30px;
            }

            h1:hover{
                transition: .5s;
                color: rgb(32, 98, 208);
            }

            th,td {
                text-align: center;
            }

        </style>

    </header>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
</body>

</html>