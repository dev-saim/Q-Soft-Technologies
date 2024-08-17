<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q-Soft Technologies</title>
</head>
<body>

    <header class="header">

        <a href="index.php" class="logo"> <img src="images/logo2.png" alt=""> </a>

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

    
</body>
</html>