

<?php
 
 /* connection to DataBase*/ 


   $server="localhost";
   $user="root";
   $password="";
   $dbName="Portfoliomessage";
   $sent = false;

   $connection = mysqli_connect($server,$user,$password,$dbName);


  if(!$connection){
      mysqli_connect_error($connection) ;
       echo "We are Having Issus to connect with DataBase";
  }
  
  






if(($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['submit'])){
    $userName = $_POST['username'];
    $mail = $_POST['useremail'];
    $message = $_POST['message'];


    $query ="INSERT INTO `users` (`name`, `email`, `message`) VALUES ('$userName', '$mail', '$message')";
    $result= mysqli_query($connection,$query);
    if($result){
        $sent = true;
    }

}   
    ?>







<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <title> <i class="fa fa-user"></i> Amir</title>
</head>

<body>
    <!-- Navbar position is sticky based on body-->

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <i class="fa fa-aviato"></i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon pb-3 text-success d-flex justify-content-start"></span>
    </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header"><i class="fas fa-home fa-x p-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-address-card fa-x p-2"></i>About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects"><i class="fas fa-project-diagram fa-x p-2"></i>Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact"><i class="fas fa-comments fa-x p-2"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <?php 

   if($sent){

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your Message has sent.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   }

?>

    <section id="header">

        <div class="intro ">
            <h1 class="mt-5">
                <h1> Hello! I'm Amir</h1> <br><br>
                <h3 class="text-danger">A Web Developer</h3>
        </div>
        <hr>
    </section>


    <section id="about">
     <h4 class="text-center text-danger  mt-2"> <i class="fas fa-user-tie fa-x"></i>  <strong> About Me:</strong>
        </h4>
        <div class="container-fluid row">
            <div class="col-md-6  my-3">
                <div class="myIMG my-5">
                    <img class="myIMG img-fluid" src="img1.jpg" alt="" height="200px" srcset="">
                    <h4 class="my-5 mx-5 pl-5 text-amir "> Mohammad Amir</h4>
                    <p class="mx-5 mb-2 pl-5 text-dark font-weight-bold shadow">I'm from Bangladesh.Studying in Computer Science and Engineering. As well as i develop websites with following technologies.I love programming and building new things. Thanks for visiting my portfolio.


                    </p>
                </div>
            </div>
            <div class="col-md-6 skill ml-5">
                <p style="font-size:1.5em;" class="text-dark text-center my-3" id="proficient"><strong>Proficient:</strong></p>

                <div class="row text-center">
                    <!-- icon 1 -->
                    <div class="col-md-4 col-sm-3 mb-2">
                        <i class="fab fa-html5 fa-4x"></i>
                        <p><strong>HTML</strong></p>
                    </div>
                    <!-- icon 2 -->
                    <div class="col-md-4 col-sm-3 mb-2">
                        <i class="fab fa-css3 fa-4x"></i>
                        <p><strong>CSS</strong></p>
                    </div>
                    <!-- icon 3 -->
                    <div class="col-md-4  col-sm-3 mb-2">
                        <i class="fab fa-bootstrap fa-4x"></i>
                        <p><strong>BOOTSTRAP 5</strong></p>
                    </div>
                </div>




                <div class="row text-center">
                    <!-- icon 1 -->
                    <div class="col-md-4 col-sm-3 my-4">
                        <i class="fab fa-js fa-4x"></i>
                        <p><strong>JavaScript</strong></p>
                    </div>
                    <!-- icon 2 -->
                    <div class="col-md-4  col-sm-3 my-4">
                        <i class="fab fa-php fa-4x"></i>
                        <p><strong>PHP</strong></p>
                    </div>
                    <div class="col-md-4  col-sm-3 my-4">
                        <i class="fa  fa-database fa-4x"></i>
                        <p><strong>mySQL</strong></p>
                    </div>


                    <!--Learning curve-->
                    <p style="font-size:1.5em;" class="text-dark my-5"><strong>Learning:</strong></p>




                    <div class="row text-center">

                        <div class="col-md-4 my-4">
                            <i class="fab fa-laravel fa-4x mb-1"></i>
                            <p><strong>Laravel</strong></p>
                        </div>

                        <div class="col-md-4 my-4">
                            <i class="fa fa-robot fa-4x mb-2 "></i>
                            <p><strong class="mx-3">C++</strong></p>
                        </div>
                        <div class="col-md-4 my-4">
                            <i class="fab fa-app-store fa-4x"></i>
                            <p><strong>Data Stucture and Algorithm</strong></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>

    <hr>
    <section id="projects" class="mb-0">
        <h4 class="text-center text-danger  mr-5 my-5"><i class="fas fa-laptop-house"></i>  <strong> Projects:</strong>
        </h4>
        <div class="container mt-5">
            <div class="row ">
                <div class="col-md-4 mx-auto text-center">
                    <div class="card myCard border border-dark rounded my-2" style="width: 16rem;">
                        <img src="s4.png" class="card-img-top  img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">A blog System with User Authentications</h5>
                            <p class="card-text">This is a forum site with user authertications and other Dynamic Functionalitites
                            </p>
                            <a href="http://idiscuss-forum.rf.gd/" class="btn btn-primary">View Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card myCard border border-dark rounded my-2" style="width: 16rem;">
                        <img src="s5.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Covid19 Tracker</h5>
                            <p class="card-text">A website which shows  real time covid records across the world. 
                                It loads the data via API call.
                            </p>
                            <a href="http://covid19tracker627.rf.gd/" class="btn btn-primary">View Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card myCard border border-dark rounded my-2" style="width: 16rem;">
                        <img src="s3.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mobile Banking Landing Page</h5>
                            <p class="card-text">A landing page for a Mobile Banking Agency made with HTML5 and CSS3</p>
                            <a href="#" class="btn btn-primary" aria-details="-1">View Online</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-4">
                    <div class="card myCard border border-dark rounded my-2" style="width: 16rem;">
                        <img src="s2.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Resturant Landing Page</h5>
                            <p class="card-text">A Landing Page for Resturant and it is Fully Responsive Website. User Can view in any type of Device</p>
                            <a href="https://amir6278.github.io/Steak-House/" class="btn btn-primary">View Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card myCard border border-dark rounded my-2" style="width: 16rem;">
                        <img src="s1.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Drum Kit</h5>
                            <p class="card-text">A Functional Responsive Drum kit. it is made with HTML CSS and vanilla JavaScript </p>
                            <a href="https://amir6278.github.io/Drum-kit/" class="btn btn-primary">View Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card myCard border border-dark rounded my-2" style="width: 16rem;">
                        <img src="s6.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">A todo App By php</h5>
                            <p class="card-text">A Dynamic To-do app which can include update and delete data. Made with PHP and mySQL</p>
                            <a href="https://github.com/Amir6278/To-Do-List" class="btn btn-primary">View Detail </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section id="contact" class="mb-0">

        <div class="profile  mt-5">
            <h2 class="mb-5">Let's Work Together <i class="fas fa-laptop-code"></i> </h2>
            <a class="" href="facebbok.com"> <i class="fab fa-facebook "></i> Facebook
            </a>
            <a class="fa fa-github" href="https://github.com/Amir6278"><i class="fab fa-github "></i> Github</a>
            <a class="fa fa-google-plus" href="mailto:mohammadamir627@gmail.com"> <i class="fab fa-google-plus-square mx-1"></i>Gmail</a>
            <a class="fa fa-linkedin-in" href="https://www.linkedin.com/in/amir-mohammad-145220216/"><i class="fab fa-linkedin mr-1"></i>LinkedIn</a>
        </div>
        <hr>
        <div class="message container-fluid mt-3 pl-5">
            <h4 class="text-center text-dark my-3 p-5"> <i class="fas fa-comment"></i> Contact Me:</h4>
            <!--Bootstrap form taking message -->
            <form action="index.php" method="POST">
                <div class="mb-3 col-md-7 mx-5">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="username" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="useremail" id="exampleInputEmail1" placeholder="Enter your email" required aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group col-md-7 mx-5">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control my-2" id="exampleFormControlTextarea1" name="message" placeholder="leave your message" required rows="5"></textarea>
                </div>
                <button type="submit " name="submit" class="btn btn-lg btn-outline-success my-4 mx-5"> Send </button>
            </form>
        </div>
    </section>
    <!-- Footer -->

    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->
      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
     <!-- Jquery CDN  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      
    <script src="main.js"></script>
</body>
<footer class="bg-light mt-0 mb-0 text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center text-dark form-weight-bold p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyright 2021 ||  ©mohammadAmir

    </div>
    <!-- Copyright -->
</footer>

</html>