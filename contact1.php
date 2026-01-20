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
  <link rel="stylesheet" href="css/contact.css">
  <title>Document</title>

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
          <a href="index.php">services</a>
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

<section>
<h1 class="heading1">Contact Us</h1>
    <div class="shubham">
  <form action="contact1.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Mobile Number</label>
    <input type="text" id="mno" name="mobileno" placeholder="Your mobile number..">

    <label for="country">City</label>
    <select id="country" name="city">
      <option value="Kolhapur">Kolhapur</option>
      <option value="Satara">Satara</option>
      <option value="Pune">Pune</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit" class="btn">

  </form>
</div>
</section>
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
        <p>rohandonerd@gmail.com</p>
      </div>

    </div>

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Shubham & Rohan</span> </div>

  </section>
  <script src="js/script.js"></script>


  <?php
  $conn = mysqli_connect('localhost','root','','project');
  // if (!empty($_POST['$name']) && !empty($_POST['$lname'])&&!empty($_POST['$Mobileno']) && !empty($_POST['$city']) &&!empty($_POST['$subject'])) 
  if (isset($_POST['submit']))
  {
      $name = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $Mobileno = $_POST['mobileno'];
      $city = $_POST['city'];
      $subject = $_POST['subject'];
     
      // $sql = "INSERT INTO contact_us VALUES (NULL, '$name','$lname','$Mobileno','$country',$subject)";
      $sql = "INSERT INTO `contact_us` (`sr no`, `Name`, `lname`, `Mobileno`, `city`, `subject`) VALUES ('', '$name', '$lname', '$Mobileno', '$city', '$subject')";
      $res = mysqli_query($conn,$sql);
      echo '<script>location.href = "redirect.php?file='.$_SERVER['PHP_SELF'].'"</script>';

      if($res)
      {
        echo "<script>alert('Thank you for contact us..')</script>";
      }
      else {
        echo "<script>alert('Failed')</script>";
      }

  }
?>


</body>

</html>