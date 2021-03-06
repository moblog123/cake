<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title></title>
</head>

<body>
    <!--navbar starts-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">CAKEBAKES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-hamburger"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/cake/testim.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#about">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link scrollto" href="#product">trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#news">Support</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn0" type="submit">Search</button>
                </form>
               
                <div class="mx-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                        login
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupModal">
                        signup
                    </button>

                </div>
            </div>
        </div>
    </nav>
    <!--nav bar ends-->

    <!--main code-->
    <section id="main" class="main">
        <div class="container-fluid py-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row py-4">
                <div class="col-lg-7 pt-5 text-center">
                    <h1 class="pt-5">welcome to creamy world</h1>
                    <button class="btn1 mt-3" data-toggle="modal" data-target="#loginModal">order now</button>
                </div>

            </div>
        </div>
    </section>
   <!---->
    <!--section 2 starts-->
    <section id="new" class="new">
        <div class="container-fluid py-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row pt-5">
                <div class="col-lg-7 m-auto">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <img src="./images/imgsm27.jfif" class="img-luid" alt="">
                            <h6>children</h6>
                        </div>
                        <div class="col-lg-4">
                            <img src="./images/imgsm30.jfif" class="img-luid" alt="">
                            <h6>occations</h6>
                        </div>
                        <div class="col-lg-4 my-2">
                            <img src="./images/imgsm26.jfif" class="img-luid" alt="">
                            <h6>birthdays</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--section 2 ends-->

    <!--section 3 trending---->
    <section id="product" class="product">
        <div class="container-fluid py-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row pt-5">
                <div class="col-lg-5  m-auto text-center">
                    <h1 class="my-2">Most Trending </h1>
                    <h6 style="color: red;">delicious</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="van.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <h6>vanila cream</h6>
                    <p>???460</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light" >
                        <div class="card-body">
                            <img src="black.jpeg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <h6>black forest</h6>
                    <p>???550</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="./images/choco.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <h6>chocolate</h6>
                    <p>???530</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="./images/black2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <h6>choco black</h6>
                    <p>???480</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1" data-toggle="modal" data-target="#loginModal">click for more</button>

                </div>
            </div>

        </div>

    </section>
    <!--section3 ending-->
    <!--section4 starting-->
    <section id="about" class="about">
        <div class="container-fluid py-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row py-5">
                <div class="col-lg-8 text-left"></div>
                <h1>welcome to our delicious store</h1>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="./images/img30.jpg" class="img-fluid" alt="">
                    <h5>best quality cakes</h5>
                    <p>The film is made in the editing room. The shooting of the film is about shopping, almost. It's
                        like going to get all the ingredients together, and you've got to make sure before you leave the
                        store that you got all the ingredients.
                        And then you take those ingredients and you can make a good cake - or not</p>
                </div>
                <div class="col-lg-4">
                    <img src="./images/img31.jpg" class="img-fluid" alt="">
                    <h5>Tasty Flavours</h5>
                    <p> our cakes provides veg non-veg and all kinds of flavoured cakes on time with money back guranty</p>
                </div>
                <div class="col-lg-4">
                    <img src="./images/img25.jpg" class="img-fluid" alt="">
                    <h5>Fast Delivery</h5>
                    <p> The CakeSafe is a transportation system for moving cakes, large and small. ... Your cakes are protected from rain, wind, heat, 
                        and anything airborne like dust or pollen, any sudden or unexpected movements, bumpy rides, and sudden stops.   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1" data-toggle="modal" data-target="#loginModal">click for more</button>
                </div>
            </div>
        </div>
    </section>
    <!--section4 ending-->
    <!--session 5 store-->

    <section id="apple" class="apple py-5">
        <div class="container-fluid text-white" data-aos="fade-up" data-aos-delay="100">
            <div class="row py-5">
                <div class="col-lg-6 m-auto text-center">
                    <h1 class="font-weight-bold py-3">explore our website</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1" data-toggle="modal" data-target="#loginModal">click for more</button>
                </div>
            </div>

    </section>
    <!--session store ending-->

    <section id="news" class="news">
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row my-2">
                <div class="col-lg-9 m-auto text-center">
                    <h1>join our society</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-3 py-3">
                            <h5>Custmer Care</h5>
                            <p>on time</p>
                            <p>always care</p>
                        </div>
                        <div class="col-lg-3 py-3">
                            <h5 class="pb-3">FAQ'S</h5>
                            <p>No-Echarges</p>
                            <p>Shipping & delivering</p>
                            <p>always care</p>
                        </div>
                        <div class="col-lg-3 py-3">
                            <h5 class="pb-3">OUR COMPLAINT</h5>
                            <p>about</p>
                            <p>New product</p>
                            <p>Food</p>
                        </div>
                        <div class="col-lg-3 py-3">
                            <h5 class="pb-3">social media</h5>
                            <span><i class="fab fa-facebook"></i></span>
                            <span><i class="fab fa-instagram"></i></span>
                            <span><i class="fab fa-twitter"></i></span>
                            <span><i class="fab fa-google"></i></span>
                        </div>

                    </div>

                </div>

            </div>
            <hr>
            <p class="text-center">Copyright  2021 All rights reserved</p>
        </div>

    </section>
    <!--main ends-->
    <!--modal login-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2>login form</h2>

                    <form action="testlogin.php" method="POST" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="uname">Username:</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter username"
                                name="username" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" required> I agree on
                                terms and conditions.
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">.</div>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <script>

                    (function () {
                        'use strict';
                        window.addEventListener('load', function () {
                            // Get the forms we want to add validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function (form) {
                                form.addEventListener('submit', function (event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();


                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
    <!--login end-->

    
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="signup-form">
                        <form action="testsignup.php" method="post">
                            <h2>Sign Up</h2>
                            <p>Please fill in this form to create an account!</p>
                            <hr>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" required="required">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required="required">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" required="required">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" required="required">
                                <label class="form-check-label">I accept the <a href="/cake/t&c.html">Terms of Use</a> &amp;
                                    <a href="/cake/t&c.html">Privacy
                                        Policy</a></label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!--modal end-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

         <!-- Template Main JS File -->
  <script src="main.js"></script>

</body>

</html>
