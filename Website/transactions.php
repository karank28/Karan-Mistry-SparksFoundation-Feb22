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
                        <li><a href="transactions.php"><u>Transactions</u></a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------  ---------------->

        <div class="container2t">
            <div>
                <h1>Transactions</h1>
                <hr>
                <?php

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    if(!$conn){
                        die("Connection not established: ".mysqli_connect_error());
                    }else{
                    
                        $sql = "SELECT * FROM `transactions`";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <table class="table table-dark" style="margin-top: 30px;">
                            <thead>
                                <tr>
                                    <th scope="col">Sender</th>
                                    <th scope="col">Reciever</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>

                            <?php
                                echo "<tbody>";
                                    while($row = mysqli_fetch_assoc($result)){
                                    if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
                                        {echo
                                            '<tr>
                                            <td>'.$row['sender'].'</td>
                                            <td>'.$row['receiver'].'</td>
                                            <td>'.$row['amount'].'</td>
                                            <td>'; 
                                            ?> 
                                            <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">Succeed</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';} ?>
                                            <?php echo '</td>
                                                </tr>';
                                        }       
                                    }  
                        }echo "</tbody>";?>
                </table>  
                <br>
            </div>
        </div>

        <!------------------- style ---------------->
    
        <style>

            .container2t{
                width: 90%;
                height: max-content;
                background:white;
                border-radius: 6px;
                justify-content: center;
                margin: 25px 0px;
                box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.226);
                
            }

            .container2t h1{
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

            .mybtn {
                box-shadow: 2px 2px 10px black;
                border-radius: 30px;
                font-weight: bold;
                background-color: lightgreen;
                color: green;
            }

            .mybtn:active {
                background-color: green;
                color: lightgreen;
            }
                                        
        </style>

    </header>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
</html>
