<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
</head>


<body>

     <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="/" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Incubation</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <a href="application" class="nav-item nav-link">Application</a>
                <a href="eventretrieve" class="nav-item nav-link">Events</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Guidance</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="advisoryretrieve" class="dropdown-item">Advisory Board</a>
                        <a href="mentorsretrieve" class="dropdown-item">Mentors</a>
                        <a href="coachingretrieve" class="dropdown-item">Coaching tools and facilities</a>
                    </div>
                </div>
                <a href="login" class="nav-item nav-link">Login</a>
            </div>
             <img src="template\img\carousel-3.png" alt="Phone Icon" class="me-2" style="width:50px">
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('template/img/carousel-1.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <!-- Add logo to the left -->
                <img src="template/img/carousel-3.png" alt="Left Logo" class="position-absolute top-0 start-0" style="width: 150px; height: 150px; margin-top: 300px; margin-left:100px;">
                <div class="container">
                    <div class="row justify-content-center"> <!-- Center the text -->
                        <div class="col-10 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3">JNEC-incubation</h5>
                            <h1 class="display-3 text-white mb-4">#1 Destination for Your <span class="text-primary">Entrepreneurial</span> Dream</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Great ideas are like seeds in need of incubation; with the right nurturing, they grow into mighty trees of success..</p>
                        </div>
                    </div>
                </div>
                <!-- Add logo to the right -->
                <img src="template/img/jnec-logo.png" alt="Right Logo" class="position-absolute top-0 end-0" style="width: 150px; height: 150px; margin-top: 300px; margin-right: 100px;">
            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->

    <!-- Service Start -->
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Stakeholders</h4>
                        <p>        <p>Alone we can do so little; together we can achieve so much. Stakeholders play a vital role in collaboration and collective success.</p>
                        <a class="btn-slide mt-2" href="stakeholderget"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Incubatees</h4>
                        <p>Successful incubatees are like seeds that flourish under the right conditions, nurtured with guidance and support, they grow into mighty oaks of innovation and achievement</p>
                        <a class="btn-slide mt-2" href="incubateeretrieve"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Feedback</h4>
                        <p>Feedback is the compass that guides improvement. Embrace it, for it holds the key to unlocking growth and success</p>
                        <a class="btn-slide mt-2" href="feedback"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Successful Startups</h6>
            <h1 class="mb-5">Recent Successful Startups</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="template/img/1.jpg" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Fruity Pads</h5>
                        <p class="card-text"> 
                            Fruity Pads is a unique and innovative product in the world of 
                            technology and lifestyle. These pads are now going to design by fruity pads group to enhance 
                             everyday experiences with a touch of fruit-inspired creativity</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="template/img/2.jpg" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Harvest connect inovation</h5>
                        <p class="card-text">They are going to develop an app for Selling vegtables. It is convenient and efficient way to connect with 
                            customers and facilitate the purchase and delivery of fresh produce..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="template/img/3.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title"> Heroic Realm</h5>
                        <p class="card-text">A virtual game is an interactive digital experience that allows 
                            players to engage in a simulated environment through a computer or gaming device. 
                            These games are noe going to design by Heroic Realm Group to provide entertainment, challenge, and immersive experiences 
                            for players of all ages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('template/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('template/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('template/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('template/js/main.js')}}"></script>
</body>
@include('common.footer');

</html>