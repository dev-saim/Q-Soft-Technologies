<?php

    include 'config.php';

    if(isset($_POST['submit']))
    {

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $company = mysqli_real_escape_string($conn, $_POST['company']);
        $dropdown = mysqli_real_escape_string($conn, $_POST['dropdown']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = $_POST["phone"];
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $want = mysqli_real_escape_string($conn, $_POST['want']);
        
     
        mysqli_query($conn, "INSERT INTO `schedule`(name, company, industry, email, phone, comments, radio) VALUES('$name', '$company', '$dropdown', '$email', '$phone', '$message', '$want')") or die('query failed');

            
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q-Soft Technologies</title>
</head>
<body>
    
    <div class="schedule">

        <div class="scheduleclose-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="menu">

            <h3>Schedule a Demo</h3>

            <div class="itembox">

                <form action="" method="post">

                    <div class="item"> <label> Your Name </label><br> <input type="text" name="name" required> </div>
                    <div class="item"> <label> Company </label><br> <input type="text" name="company" required> </div>
                    <div class="item"> <label> Industry </label><br>
                        <select name="dropdown" required>

                            <option value="" disabled selected hidden>Please select an option</option>
                            <option value="Health & Beauty">Health & Beauty</option>
                            <option value="Grocery">Grocery</option>
                            <option value="Departement Store">Departement Store</option>
                            <option value="Luxury">Luxury</option>
                            <option value="Consumer Electronics">Consumer Electronics</option>
                            <option value="Gas Stations/onvenience">Gas Stations/onvenience</option>
                            <option value="Toys">Toys</option>
                            <option value="Others">Others</option>

                        </select>

                    </div>
                    <div class="item"> <label> Email </label><br> <input type="email" name="email" required> </div>
                    <div class="item"> <label> Phone </label><br> <input type="number" name="phone" required> </div>
                    <div class="item"> <label> Comments </label><br> <textarea rows="4" cols="50" name="message" required> </textarea></div>
               

            </div>

            <p>Do you want to receive marketing-related communications from Q-Soft?</p>

            <input type="radio" id="yes" name="want" value="Yes" required>
            <label id="radio" for="yes">Yes</label><br><br>

            <input type="radio" id="no" name="want" value="No" required>
            <label id="radio" for="no">No</label><br>

            <p id="scheduletext">
                By selecting "Yes", I agree to receive electronic messages from Q-Soft related to its business and
                products or services. You can withdraw your consent at any time by contacting info@QSoft.pk with ‘please
                unsubscribe me’ in the subject line.
            </p>

            <input type="submit" class="btn" name="submit" value="Schedule a Demo"></input>

            </form>

        </div>

        
    </div>

    <script src="Js/script.js"> </script>
    <script src="Js/jquery.js"> </script>

    <script>
        $(document).ready(function () {

            $('.schedulebtn').click(function () {
                $('.schedule').addClass('active');
            });

            $('.scheduleclose-btn').click(function () {
                $('.schedule').removeClass('active');
            });

        });
    </script>



</body>
</html>