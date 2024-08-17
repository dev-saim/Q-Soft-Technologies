<?php


    include 'config.php';

    if(isset($_POST['submit']))
    {
        $name=$_POST["name"];
        $number=$_POST["number"];
        $email=$_POST["email"];

        $pname = $_FILES["file"]["name"];
 
        $tname = $_FILES["file"]["tmp_name"];
   
        $uploads_dir = 'upload';

        move_uploaded_file($tname, $uploads_dir.'/'.$pname);


        $query= "INSERT INTO `form`(name, phone, email, cv) VALUES('$name', '$number', '$email', '$pname')";

        $result = mysqli_query($conn, $query);

        if ($result) 
        {
            echo '<script>';
            echo 'alert("Upload data successfully");';
            echo '</script>';
        }
        else 
        {
            echo '<script>';
            echo 'alert("Data not uploaded");';
            echo '</script>';
        }

    }


    if (isset($_GET['id'])) 
    {
    
        $id = $_GET['id'];
    
        $query = "DELETE FROM form WHERE id = '$id'";
    
        $result = mysqli_query($conn, $query);
    
        header('location:adminpage.php');
    }
        



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">

    <title>Admin Page</title>


    <style>

        body
        {
            height:100%;
        }
        *
        {
            margin:0px;
            padding:0px;
        }
        a
        {
            text-decoration:none;
        }

        .header .navbar .dropdown 
        {
            display: none;
            position: absolute;
            top: 30px;
            left:0px;
            padding: 0px 10px 10px 0px;
            padding-top: 0px;
            z-index: 1;
            border-radius: 3px;
            background-color: white;
            border-top: 1px solid rgb(194, 194, 194);
            background-color:#1e266d;
        }

        .header .navbar .dropdown ul 
        {
            display: block;
            padding-top: 5px;
        }

        .navbar .dropdown a 
        {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 8px;
            font-size: 16px;
        }

        .navbar .dropdown a:hover 
        {
            cursor: pointer;
            color: #1e266d;
            font-weight: 500;
            background-color: rgb(247, 247, 247);
        }

        .header .navbar ul li:hover .dropdown 
        {
            display: block;
        }

        .container
        {
            margin-top:40px;
        }

        .container table .table-head td
        {
            font-size:16px;
            font-weight:700;
        }

        .container table tr td
        {
            font-size:14px;
        }

        .container
        {
            margin-bottom:100px;
        }

        .container h3
        {
            margin:20px;
            text-align:center;
            font-size:22px;
            font-weight:600;
        }

        @media (max-width: 800px)
        {
            .container table .table-head td
            {
                font-size:14px;
                font-weight:600;
            }

            .container table tr td
            {
                font-size:10px;
            }
        }

        @media (max-width: 500px)
        {
            .container table .table-head td
            {
                font-size:10px;
                font-weight:500;
            }

            .container table tr td
            {
                font-size:7px;
            }
        }

    </style>


</head>

<body>

    <header class="header">

        <a href="index.php" class="logo"> <img src="images/logo.png" alt=""> Q-SOFT </a>

        <nav class="navbar">

            <ul>

                <li><a href="index.php">Home</a></li>
                <li><a href="#"> About</a>
                    <div class="dropdown" id="d1">
                        <ul>
                            <li><a href="overview.php">Company Overview</a></li>
                            <li><a href="career.php">Careers</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="services.php">Services</a>
                    <div class="dropdown" id="d1">
                        <ul>
                            <li><a href="services.php">Software Development</a></li>
                            <li><a href="services.php">Web Development</a></li>
                            <li><a href="services.php">Mobile Apps Development</a></li>
                            <li><a href="services.php">Scoial Media/Digital Development</a></li>
                            <li><a href="services.php">IT Consultancy</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Products</a>
                    <div class="dropdown" id="d1">
                        <ul>
                            <li><a href="aims.php">Point of Sale (POS)</a></li>
                            <li><a href="aims.php">Distribution Management Software</a></li>
                            <li><a href="aims.php">Wholesale Management Software</a></li>
                            <li><a href="aims.php">School Management Software</a></li>
                            <li><a href="hms.php">Hospital Management Software</a></li>
                            <li><a href="hms.php">Leasing Management Software</a></li>
                            <li><a href="trs.php">Ticket Reservation Software</a></li>
                            <li><a href="services.php">Vegetable Market Software</a></li>
                            <li><a href="services.php">Foodpanda like cross platform Application</a></li>
                            <li><a href="services.php">eCommerce like cross platform Application</a></li>
                            <li><a href="services.php">Zameen.com like cross platform Application</a></li>
                            <li><a href="services.php">Uber & Careem like cross platform Application</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="contact.php">Contact</a></li>

            </ul>


            <div class="menu-btn">
                <button class="btn"><i class="icons fa-solid fa-bars" id="menu"></i></button>
            </div>

        </nav>

    </header>

    <div class="side-bar">

        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="menu">
            <div class="item"><a href="index.php"> <i class="fa-solid fa-house"> </i> Home </a></div>
            <div class="item">
                <a class="sub-btn"><i class="fa-solid fa-address-card"></i> About <i
                        class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="overview.php" class="sub-item"> Company Overview </a>
                    <a href="career.php" class="sub-item"> Careers </a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn" href="services.php"><i class="fa-brands fa-servicestack"></i> Services <i
                        class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="services.php" class="sub-item"> Software Development </a>
                    <a href="services.php" class="sub-item"> Web Development </a>
                    <a href="services.php" class="sub-item"> Mobile Apps Development </a>
                    <a href="services.php" class="sub-item"> Social Media/Digital Marketing </a>
                    <a href="services.php" class="sub-item"> IT Consultancy </a>
                </div>
            </div>

            <div class="item">
                <a class="sub-btn"><i class="fa-brands fa-product-hunt"></i> Products <i
                        class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="aims.php" class="sub-item"> Point of Sale (POS) </a>
                    <a href="aims.php" class="sub-item"> Distribution Management Software </a>
                    <a href="aims.php" class="sub-item"> Wholesale Management Software </a>
                    <a href="aims.php" class="sub-item"> School Management Software </a>
                    <a href="hms.php" class="sub-item"> Hospital Management Software </a>
                    <a href="hms.php" class="sub-item"> Leasing Management Software </a>
                    <a href="trs.php" class="sub-item"> Ticket Reservation oftware </a>
                    <a href="services.php" class="sub-item"> Vegetable Market Software </a>
                    <a href="services.php" class="sub-item">Foodpanda like cross platform Application</a>
                    <a href="services.php" class="sub-item">eCommerce like cross platform Application</a>
                    <a href="services.php" class="sub-item">Zameen.com like cross platform Application</a>
                    <a href="services.php" class="sub-item">Uber & Careem like cross platform Application</a>
                </div>
            </div>


            <div class="item"><a class="sub-btn" href="contact.php"><i class="fas fa-table"></i> Contact </a></div>

        </div>

    </div>


    <div class="container">
    <h3>All Applications of new Applicants</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6">All Applications</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                        
                        <table class="table table-bordered">
                            <tr class="table-head">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>CV</td>
                                <td>Action</td>
                            </tr>

                            <?php
                            $userdata = "select * from form";
                            $result = mysqli_query($conn, $userdata);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $fileId = $row['id'];

                                echo "
                                    <tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['name']."</td>
                                        <td>".$row['phone']."</td>
                                        <td>".$row['email']."</td>
                                        <td><a href='adminpage.php?file_id=$fileId' target='_blank'>Open PDF</a></td>
                                        <td style='width:9%'><a href='adminpage.php?id={$row['id']}'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <h3>All Schedules</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6">All Schedules</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                        
                        <table class="table table-bordered">

                            <tr class="table-head">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Company</td>
                                <td>Industry</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Marketing COM</td>
                                <td>Comments</td>
                                <td>Action</td>
                                
                            </tr>

                            <?php

                                $userdata = "select * from schedule";

                                $result = mysqli_query($conn,$userdata);

                                while($row = mysqli_fetch_assoc($result))
                            
                                echo "
                                    
                                    <tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['name']."</td>
                                        <td>".$row['company']."</td>
                                        <td>".$row['industry']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['phone']."</td>
                                        <td>".$row['radio']."</td>
                                        <td style='width:25%'>".$row['comments']."</td>
                                        <td style='width:9%'><a href='delete.php?id={$row['id']}'>Delete</a></td>
                                     </tr>

                                "
                                    
                            ?>

                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="Js/script.js"> </script>
    <script src="Js/jquery.js"> </script>

    <script>
        $(document).ready(function () {
            $('.sub-btn').click(function () {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            $('.menu-btn').click(function () {
                $('.side-bar').addClass('active');
                $('#menu').css("visibility", "hidden");
            });

            $('.close-btn').click(function () {
                $('.side-bar').removeClass('active');
                $('#menu').css("visibility", "visible");
            });

            $('.schedulebtn').click(function () {
                $('.schedule').addClass('active');
            });

            $('.scheduleclose-btn').click(function () {
                $('.schedule').removeClass('active');
            });

        });
    </script>

    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('.header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('active', windowPosition);
        })
    </script>



    <!-- <?php include 'footer.php'; ?> -->

    



</body>

</html>