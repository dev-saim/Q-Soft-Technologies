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



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">

    <style>
        #myModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        #apply {
            margin-top: 10px;
            padding: 6px 14px;
            background-color: black;
            color: white;
            border: 1px solid black;
            border-radius: 3px;
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .modal-content input {
            border: 1px solid rgb(158, 158, 158);
            border-radius: 3px;
            width: 100%;
            padding: 7px 8px;
            margin-top: 12px;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 10px 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }

        .custom-upload-btn {
            display: inline-block;
            padding: 10px 15px;
            margin: 15px 0px 5px 0px;
            background-color: #1e6ab6;
            color: #fff;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }

        #cv-upload {
            display: none;
        }

        @media (max-width: 600px) {
            .modal-content {
                margin: 30% auto;
            }
        }
    </style>

    <title>Career</title>

</head>

<body>

    <?php include 'header.php'; ?>


    <section class="careerhome">


        <div class="element">
            <img src="images/career1.png" alt="">
            <h3>HEALTHCARE <br> BENEFITS <br> PACKAGE</h3>
        </div>

        <div class="element">
            <img src="images/career2.png" alt="">
            <h3>Personal <br> Development <br> Budget</h3>
        </div>

        <div class="element">
            <img src="images/career3.png" alt="">
            <h3>Daily <br> Catered <br> Lunches</h3>
        </div>

        <div class="element">
            <img src="images/career5.png" alt="">
            <h3>GAMES ROOM <br> -AND- <br> PING PONG</h3>
        </div>

        <div class="element">
            <img src="images/career6.png" alt="">
            <h3>PARENTAL LEAVE <br> TOP-UP</h3>
        </div>

        <div class="element">
            <img src="images/career4.png" alt="">
            <h3>Healt Snacks <br> -AND- <br> WELLNESS PROGRAM</h3>
        </div>



    </section>

    <div class="career">
        <h2>Careers at Q-Soft</h2>

        <h3>Sr.Net developer | 60-75k | Full Time | Morning Shift | LHR office</h3>

        <ul>
            <li>Should be able to mentor junior Developers and perform Team Lead responsibilities.</li>
            <li>Highly motivated self-starter with excellent technical and communication skills.</li>
            <li>Responsible for analysis, design, coding, testing & implementation of software deliverables in a
                fast-paced environment.</li>
            <li>Deep understanding of the .NET Framework, ASP.Net, ASP.Net MVC C#.NET & MS SQL Server, .NET Core,
                desktop Services, APIs.</li>
            <li>Must possess strong Object-Oriented Programming & analytical skills.</li>
            <li>Solid experience with AJAX and JavaScript.</li>
            <li>Highly productive and effective time management in meeting deadlines.</li>
            <li>Outstanding interpersonal and written communication skills.</li>
            <li>Proven analytical and problem-solving skills, highly motivated, passionate, team-player.</li>
            <li>Good written and oral communications skills and ability to work with others in a fast paced environment
                in order to meet the deadlines.</li>
            <li>Strong understanding of software development methodologies and principles to perform assigned
                development tasks using established standards and procedures without any supervision.</li>
            <li>Excellent written and verbal communication skills and be able to successfully communicate and present
                ideas to colleagues, clients and senior management.</li>

            <button onclick="openModal()" id="apply">Apply now</button>

            <div id="myModal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span><br>

                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <input type="number" name="number" placeholder="Enter your contact number" required>
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <label for="cv-upload" class="custom-upload-btn">Upload CV (PDF)</label>
                        <input type="file" id="cv-upload" name="file"  accept=".pdf" required>
                        <input type="submit" name="submit">
                    </form>

                </div>
            </div>

        </ul>

    </div>

    <div class="career">

        <h3>Graphic Designer | 20-30k | Full Time | Morning Shift | LHR office</h3>

        <ul>
            <li>Have minimum 1 year design experience in print and social media.</li>
            <li>Have the ability to create catchy and attractive designs and layouts of different print and social media
                materials.</li>
            <li>Be experienced in promotional materials, corporate branding, LOGO designing and print collateral design.
            </li>
            <li>Be up to date with industry leading software and technologies (In Design, Illustrator, Photoshop etc.)
            </li>
            <li>Be highly proficient in all design aspects.</li>
            <li>Have professional approach to time, costs and deadlines.</li>
            <li>Have the ability to interact, communicate and present ideas. Photo & Video Editing, Creative Writing and
                Basic know how of Social Media Marketing would be an advantage.</li>

            <button onclick="openModal()" id="apply">Apply now</button>

        </ul>

        <p>If you don’t see any postings that match your skills, but feel your goals and motivations are aligned with
            ours, please email your resume or cover letter to info@qsoft.pk.</p>

    </div>


    <?php include 'footer.php'; ?>

    <script>
        function openModal() {
            document.getElementById('myModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        // Close modal if the user clicks outside the modal content
        window.onclick = function (event) {
            var modal = document.getElementById('myModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>



</body>

</html>