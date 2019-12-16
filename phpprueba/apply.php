<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font awesome Script-->
    <script src="https://kit.fontawesome.com/912da39ca5.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/Collegelogo.jpg">
    <title> Glasgow Kelvin College</title>
</head>

<body class="card">
    <!-- Logo Banner-->

    <div class="bg-light img-fluid max-width: 100%">
        <img src="img/NNGKClogowithtext.jpg" alt="College logo with text">

    </div>
    <header>
        <!-- Barra de navegador-->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="timetables.html">Timetables</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="students.html">Student Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-secondary" href="apply.html">Apply/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="contact.html">Contact</a>
                    </li>
                </ul>

            </div>

            <!-- Logo y Cabecera-->
            <div class="card-body bg-white">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="divider-text">
                        <span class="bg-light"> <strong>Application Form</strong> </span>
                    </h4>
                    <form method="post" action="register.php">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="txtname" class="form-control" placeholder="Full name" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="txtemail" class="form-control" placeholder="Email address" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <select class="custom-select" style="max-width: 120px;">
                                <option selected="">+971</option>
                                <option value="1">+972</option>
                                <option value="2">+198</option>
                                <option value="3">+701</option>
                            </select>
                            <input name="txtphone" class="form-control" placeholder="Phone number" type="text">
                        </div> <!-- form-group// -->
                        

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-book-reader"></i> </span>
                            </div>
                            <input name="txtcourse" class="form-control" placeholder="Course" type="text">
                        </div> <!-- form-group// -->


                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="txtpassw"class="form-control" placeholder="Create password" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="txtrpassw"class="form-control" placeholder="Repeat password" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bg-dark btn-block"> Create Account </button>
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div> <!-- card.// -->

            <?php
                include 'conection.php';
                $name=$_GET['txtname'];
                $phone=$_GET['txtphone'];
                $email=$_GET['txtemail'];
                $course=$_GET['txtcourse'];
                $passw=$_GET['txtpassw'];
                $rpassw=$_GET['txtrpassw'];
    if ($user!=null||$email!=null){
        $sql="insert into kelvinc(Name,Email)values('".$name."','".$email."',".$phone."',".$course."',".$passw."',".$rpassw."')";        
    mysql_query($sql);
        if ($user=1) {
           header("location:apply.php");
        }
        
    }
    ?>

</header>

    <footer>
        <div class="container mt-1">
            <div class="row">
                <div class="col">
                    <nav class="pt-2 float-left bg-white">
                        <br> <br>
                        <a href="#"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a href="#"><i class="fab fa-twitter text-dark" v></i></a>
                        <a href="#"><i class="fab fa-pinterest text-dark"></i></a>
                        <a href="#"><i class="fab fa-youtube text-dark"></i></a>
                        <a href="#"><i class="fab fa-instagram text-dark"></i></a>
                    </nav>
                </div>
                <div class="col pt-5">
                    <h6>All rights under Copyleft license 16-09-2019</h6>
                </div class=>
                <div class="col mt-1">
                    <br>
                    <img class="float-right" src="img/GKClogowithtextsmall.jpg" alt="Glasgow City Council Logo">
                </div>
            </div>


    </footer>

</body>

</html>