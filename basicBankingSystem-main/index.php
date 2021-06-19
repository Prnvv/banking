<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>THE FOUNDATION BANK GROUP</title>
    <link rel="stylesheet" href="css/style11.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar py-3 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"  >THE FOUNDATION BANK GROUP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                            <li><a class="dropdown-item py-3" href="">Customer Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/ " target="_blank">About</a>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <class class="welcome">
        <h2>
            <!--<img src="logos/friend.webp" alt="Bank" width="75" height="75" style="font-weight: bold;">--> <strong>Welcome you in the most trusted Bank !</strong> <!--<img src="logos/trust.webp" alt="Bank" width="75" height="75">-->
        </h2>
    </class>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="background/bank-getty.jpg" width="1000" height="775" class="d-block w-100" alt="...">

            </div>
          
            <div class="carousel-item active">
                <img src="background/saving-deposits.jpg" width="1000" height="775" class="d-block w-100" alt="...">

            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- Cards -->
    <div class="container my-4 ">
        <div class="row mb-2">
            <div class="col-md-3">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover1"><strong class="d-inline-block mb-5 text-dark text-center ">
                                <a href="money.php" style="color: black;">
                                   

                                    <h6><strong>View Customers</strong></h6>
                                   
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong></strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Personal Banking</li>
                                <li>Corporate Banking</li>
                                <li>Digital Banking</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                   <!-- <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="350" height="300" src="background/c1.jfif" alt="">
                    </div>-->
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover2"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="history.php" style="color: black;">
                                    <h6><strong>Transaction History</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong></strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Here for you !
                                24 x 7 available
                                </li>
                                
                               
                                
                            </ul>
                        </div>
                        </p>
                    </div>
                   
                </div>
            </div>

            <div class="col-md-3">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover2"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="#" style="color: black;">
                                    <h6><strong>Locker Availability</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong></strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>State-of-the-art Lockers</li>
                                <li >The safe deposit vaults with fully equipped </li> 
                                <li> burglar alarm systems.</li>
                                                                                   
                                
                            </ul>
                        </div>
                        </p>
                    </div>
                   
                </div>
            </div>

            
            <div class="col-md-3">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover2"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="https://www.startupindia.gov.in/content/sih/en/government-schemes.html" style="color: black;">
                                    <h6><strong>Govt. Business</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong></strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>E-Kisan Vikas Patra Scheme, 2014</li> 
                                <li> Gold Bonds</li>
                                <li>Public Provident Fund (PPF)</li>
                                <li>Senior Citizen Savings Scheme 2019</li>
                                <li>Floating Rate Savings Bonds,2020(Taxable)</li>

                                                                                   
                                
                            </ul>
                        </div>
                        </p>
                    </div>
                   
                </div>
            </div>




        </div>
    </div>
    
    
</div>

    <div class="container my-6 ">
    <div class="footer-social-icons">
    <h4 class="_6 align-center"></i>>Follow us on</h4>
      <ul class="social-icons">
        <a href="https://www.facebook.com/pranav.ghelani.1/" class="social-icon"> <i class="fa fa-facebook"></i></a>
        <li><a href="https://twitter.com/_prnvvv_" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCmp55NCtiqqN7j98TotgU6Q" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="https://www.linkedin.com/in/pranav-ghelani-700084148/" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://github.com/Prnvv" class="social-icon"> <i class="fa fa-github"></i></a></li>
      </ul>
    </div>
    </div>























    <!-- footer -->


    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: grey";>
                © 2021 Copyright - Pranav Ghelani 
                
            </div>
            <!-- Copyright -->
        </footer>
    </div>


















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>