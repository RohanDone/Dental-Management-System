<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/appoiment.css">
    <title>Document</title>

</head>

<body>
    <?php

    include "sendmail.php";
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die('connection failed');

    if (isset($_POST['submit'])) {

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

        if ($insert) {
            // $message[] = 'appointment made successfully!';
            echo "<script>alert('Appointment Booked Successfully')</script>";
            sendAppointment($email);
        } else {
            $message[] = 'appointment failed';
        }
    }
    ?>
    <!-- header section starts  -->

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="#home" class="logo">RS-dental<span>Care.</span></a>

                <nav class="nav">
                    <a href="index.php">home</a>
                    <a href="index.php">about</a>
                    <a href="services.php">services</a>
                    <a href="work_process.php">Work Process</a>
                    <a href="reviews.php">reviews</a>
                    <a href="contact1.php">contact</a>
                    <a href="Appointment.php">Make Appointment</a>
                </nav>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->
    <!-- contact section starts  -->

    <section class="contact" id="contact">
        <h1 class="head">Make Appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <center><input type="submit" value="make appointment" name="submit" class="link-btn"></center>
        </form>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>9322605913</p>
                <p>8545956245</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>Kolhapur</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:07am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Address</h3>
                <p>shubham412805@gmail.com</p>
                <p>rohan1234@gmail.com</p>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Shubham & Rohan</span> </div>

    </section>
    <script src="js/script.js"></script>

</body>

</html>