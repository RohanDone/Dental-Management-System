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
    <link rel="stylesheet" href="services.css">
    <title>Document</title>
    <style>
        .contact form {
            border-radius: .5rem;
            /* background-color: var(--light-bg); */
            background-color: white;
            padding: 2rem;
            margin: 0 auto;
            max-width: 50rem;
            border: 2px solid black;
            align-items: center;
        }

        h1 {
            margin: 50px;
        }

        .contact form .message {
            margin-bottom: 2rem;
            border-radius: .5rem;
            background-color: var(--blue);
            padding: 1.2rem 1rem;
            font-size: 1.7rem;
            color: var(--white);
            text-align: center;
        }

        .contact form .box {
            width: 100%;
            margin-top: 1rem;
            margin-bottom: 2rem;
            border-radius: .5rem;
            background-color: white;
            padding: 1.2rem 1.4rem;
            font-size: 1.7rem;
            color: var(--black);
            text-transform: none;
            border: 2px solid black;
            display: block;
        }

        .contact form span {
            font-size: 1.7rem;
            color: var(--black);
        }
    </style>

</head>

<body>

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

                <!-- <a href="#contact" class="link-btn">make appointment</a> -->

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->
    <!-- services section starts  -->

    
    <!-- services section ends -->

    <!-- footer section starts  <!-- process section starts  -->

<section id="process">

<h1 class="heading">work process</h1>

<div class="box-container container">

<a href="Cosmetic_dentistry.php">
   <div class="box">
      <img src="images/process-1.png" alt="">
      <h3>Cosmetic Dentistry</h3>
      <p>Cosmetic dentistry is generally used to refer to any dental work that improves the 
         appearance (though not necessarily the functionality) of teeth, gums and/or bite.</p>
   </div>
</a>
   
<a href="PediatricDentistry.php">
  <div class="box">
      <img src="images/process-2.png" alt="">
      <h3>Pediatric Dentistry</h3>
      <p>Pediatric Dentistry is a primary and speciality oral care for infants and children through adolescence, including those with special health needs.</p>
   </div>
</a>



<a href="DentalImplants.php">
   <div class="box">
      <img src="images/process-3.png" alt="">
      <h3>Dental Implants</h3>
      <p>Dental implants are the materials used as artificial tooth roots, which are similar in shape to screws and are placed in jawbone.</p>
   </div>
</a>

</div>

</section>

<!-- process section ends -->

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
    