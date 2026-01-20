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
    <link rel="stylesheet" href="css/review.css">
    <title>Document</title>
    <style>
        body{
            border: 1px solid;
            border-color: black;
        }
        .head1{
            text-align: center;
            background-color: yellow;
            color: black;
            
        }
        .heading{
            text-align: center;
            margin-top: -120px;
            background-color: yellow;
            margin-left: 300px;
            margin-right: 300px;
        }
        th{
            border: 1px solid black ;
            font-size: 20px;
            color: red;
            
        }
        table{
            border-collapse: collapse;
            text-align: center;
           justify-content: center;
            margin-right: auto;
            margin-left: auto;
            margin-top: -10px;
            width: 500px;
            height: 30px;
            border: 2px solid black;
            
        }
        td{
            border: 1px solid;
            border-color: black;
            text-align: center;
            
        }
        .hr1{
            width: 400px;
            background-color: red;
            size: 8px solid;
        }
        .hr2{
            width: 400px;
            background-color: red;
            margin-left: 450px;
            margin-right: 450px;
            size: 8px solid;
            
        }
        .btn{
            margin-left: 25%;
        }
        
       

    </style>

</head>

<body>
    <?php
        $conn = mysqli_connect('localhost','root','','project');
        if(!empty($_POST['name']) && !empty($_POST['disease']) && !empty($_POST['review']))
        {
            $name = $_POST['name'];
            $disease = $_POST['disease'];
            $review = $_POST['review'];

            $sql = "INSERT INTO review VALUES (NULL,'$name','$disease','$review')";
            $res = mysqli_query($conn,$sql);
            echo '<script>location.href = "redirect.php?file='.$_SERVER['PHP_SELF'].'"</script>';
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

                <!-- <a href="#contact" class="link-btn">make appointment</a> -->

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->
    <section>
        <div>
            <form action="reviews.php" method="post" class="forms">
                <h1 class="head1">Give Your Review</h1>
                <hr class="hr1">
                Enter Your Name :<input type="text" name="name" required>
                <br>
                Describe Your Disease : <input type="text" name="disease" required>
                <br>
                Give Your Review : <input type="text" name="review" required>
                <br>
                <input type="submit" id="submit" name="submit" class="btn" value="Submit">
            </form>
            <hr class="hr2">
        </div>
    </section>
    <!-- Fetching reviews in table starts -->
    <section>
        <div class="tbl">
            <h1 class="heading">View Total Reviews</h1>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Disease</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost","root","","project");
                    $sql = "SELECT * FROM  review";
                    $result = mysqli_query($con,$sql);

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                        <td>'.$row['Name'].'</td>
                        <td>'.$row['Disease'].'</td>
                        <td>'.$row['review'].'</td>
                    </tr>';

                    }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Fetching reviews in table end -->
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