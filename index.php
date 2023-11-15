<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="./common/lib_css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>Mountainview</title>
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        a {
            list-style: none;
            text-decoration: none;
        }

        @media screen and(max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <?php require("inc/header.php"); ?>
    <!-- caraosel -->
    <div class="container-fluid mb-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">              
                            <div class="swiper-slide">
                                <img width="100%" height="500px" src="./images/carousel/IMG_99736.png" class="w-100 d-block" />
                            </div>
                            <div class="swiper-slide">
                                <img width="100%" height="500px" src="./images/carousel/IMG_62045.png" class="w-100 d-block" />
                            </div>
                            <div class="swiper-slide">
                                <img width="100%" height="500px" src="./images/carousel/IMG_83057.png" class="w-100 d-block" />
                            </div>
                            <div class="swiper-slide">
                                <img width="100%" height="500px" src="./images/carousel/IMG_43018.png" class="w-100 d-block" />
                            </div>
                           
                      
            </div>
            

        </div>
    </div>
    <!-- check availablity -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Availability</h5>
                <form action="rooms.php">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" class="form-control shadow-none" name="checkin" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" class="form-control shadow-none" name="checkout" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none" name="adult">
                
                               <option value='1'>1</option>";
                               <option value='2'>2</option>";
                               <option value='3'>3</option>";
                             
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label for="" class="form-label" style="font-weight:500;">Childern</label>
                            <select class="form-select shadow-none" name="children">
                            <option value='1'>1</option>";
                               <option value='2'>2</option>";
                               <option value='3'>3</option>";
                               

                            </select>
                        </div>
                        <input type="hidden" name="check_availability">
                        <div class="col-lg-1 mb-lg-3">
                            <button class="btn custom-bg" style="background-color: #04AA6D;" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row ">
        <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">
                        
                        <div class="swiper-slide  col-lg-3 col-md-6 my-3 "> 
                            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                                <img width="200px" height="300px" src="./images/rooms/1.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Luxury Summer Air</h5>
                                    <h6 class="mb-2">25000 per night</h6>
                                    <div class="features mb-4">
                                        <h6 >Features</h6>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>SWIMMING POOL</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 >Facilities</h6>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>LAUNDARY</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>BALLCONY</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>ABX+C</span>
                                    </div>
                                    <div class="guests mb-4">
                                        <h6 class="mb-1">GUESTS</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Adults</span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">4 Children</span>
                                    </div>
                                    <div class='rating mb-2'>
                                    <h6 class='mb-1'>Rating</h6>
                                    <span class='badge rounded-pill bg-light'>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                   
                                    </span></div>



                                        <div class="d-flex justify-content-evenly mb-2">
                                        <button  class='btn btn-sm text-white custom-bg shadow-none' style="background-color: #04AA6D;">Book Now</button>
                                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                                        </div>        
                                    
                                </div>
                            </div>          
                        </div>   
                        <div class="swiper-slide  col-lg-3 col-md-6 my-3 "> 
                            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                                <img width="200px" height="300px" src="./images/rooms/2.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Luxury Winter champ</h5>
                                    <h6 class="mb-2">5000 per night</h6>
                                    <div class="features mb-4">
                                        <h6 >Features</h6>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>SWIMMING POOL</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 >Facilities</h6>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>LAUNDARY</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>GROUND</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>ABX+C</span>
                                    </div>
                                    <div class="guests mb-4">
                                        <h6 class="mb-1">GUESTS</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Adults</span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">4 Children</span>
                                    </div>
                                    <div class='rating mb-2'>
                                    <h6 class='mb-1'>Rating</h6>
                                    <span class='badge rounded-pill bg-light'>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    </span></div>



                                        <div class="d-flex justify-content-evenly mb-2">
                                        <button  class='btn btn-sm text-white custom-bg shadow-none' style="background-color: #04AA6D;">Book Now</button>
                                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                                        </div>        
                                    
                                </div>
                            </div>          
                        </div> 
                        <div class="swiper-slide  col-lg-3 col-md-6 my-3 "> 
                            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                                <img width="200px" height="300px" src="./images/rooms/3.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Luxury champ</h5>
                                    <h6 class="mb-2">5000 per night</h6>
                                    <div class="features mb-4">
                                        <h6 >Features</h6>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>SWIMMING POOL</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 >Facilities</h6>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>LAUNDARY</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>GROUND</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>ABX+C</span>
                                    </div>
                                    <div class="guests mb-4">
                                        <h6 class="mb-1">GUESTS</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Adults</span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">4 Children</span>
                                    </div>
                                    <div class='rating mb-2'>
                                    <h6 class='mb-1'>Rating</h6>
                                    <span class='badge rounded-pill bg-light'>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    </span></div>



                                        <div class="d-flex justify-content-evenly mb-2">
                                        <button  class='btn btn-sm text-white custom-bg shadow-none' style="background-color: #04AA6D;">Book Now</button>
                                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                                        </div>        
                                    
                                </div>
                            </div>          
                        </div> 
                        <div class="swiper-slide  col-lg-3 col-md-6 my-3 "> 
                            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                                <img width="200px" height="300px" src="./images/rooms/4.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Luxury Summer champ</h5>
                                    <h6 class="mb-2">5000 per night</h6>
                                    <div class="features mb-4">
                                        <h6 >Features</h6>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>SWIMMING POOL</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 >Facilities</h6>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>LAUNDARY</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>GROUND</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>ABX+C</span>
                                    </div>
                                    <div class="guests mb-4">
                                        <h6 class="mb-1">GUESTS</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Adults</span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">4 Children</span>
                                    </div>
                                    <div class='rating mb-2'>
                                    <h6 class='mb-1'>Rating</h6>
                                    <span class='badge rounded-pill bg-light'>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    </span></div>



                                        <div class="d-flex justify-content-evenly mb-2">
                                        <button  class='btn btn-sm text-white custom-bg shadow-none' style="background-color: #04AA6D;">Book Now</button>
                                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                                        </div>        
                                    
                                </div>
                            </div>          
                        </div> 
                        <div class="swiper-slide  col-lg-3 col-md-6 my-3 "> 
                            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                                <img width="200px" height="300px" src="./images/rooms/5.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Luxury Summer champ</h5>
                                    <h6 class="mb-2">5000 per night</h6>
                                    <div class="features mb-4">
                                        <h6 >Features</h6>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>SWIMMING POOL</span>
                                      <span class='badge rounded-pill bg-light text-dark text-wrap'>WI-FI</span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 >Facilities</h6>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>LAUNDARY</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>GROUND</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap '>ABX+C</span>
                                    </div>
                                    <div class="guests mb-4">
                                        <h6 class="mb-1">GUESTS</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Adults</span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">4 Children</span>
                                    </div>
                                    <div class='rating mb-2'>
                                    <h6 class='mb-1'>Rating</h6>
                                    <span class='badge rounded-pill bg-light'>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    <i class='bi bi-star-fill text-warning'></i>
                                    </span></div>



                                        <div class="d-flex justify-content-evenly mb-2">
                                        <button  class='btn btn-sm text-white custom-bg shadow-none' style="background-color: #04AA6D;">Book Now</button>
                                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                                        </div>        
                                    
                                </div>
                            </div>          
                        </div>                             
                </div>
        </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
        <!-- FACILITIES -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
             
                            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                            <img src="./images/facilities/IMG_31909.svg" width="80px">
                            <h5 class="mt-3">Public Computer</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                            <img src="./images/facilities/IMG_40099.svg" width="80px">
                            <h5 class="mt-3">Wi-Fi</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                            <img src="./images/facilities/IMG_63364.svg" width="80px">
                            <h5 class="mt-3">Swimming Pool</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                            <img src="./images/facilities/IMG_63364.svg" width="80px">
                            <h5 class="mt-3">MASSAGE</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                            <img src="./images/facilities/IMG_63364.svg" width="80px">
                            <h5 class="mt-3">SHIPS</h5>
                        </div>


            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities
                    >>></a>
            </div>
        </div>
        <!-- TESTIMONIALS -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
        <!-- Swiper -->
        <div class="container mt-5">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">
                   
                                    <div class="swiper-slide bg-white p-4">
                                    <div class="profile d-flex align-items-center mb-3">
                                        <img src="./images/users/IMG_62046.jpeg" class="rounded-circle" "loading="lazy" width="30px">
                                        <h6 class="m-0 ms-2">Akshay Nagarwal</h6>
                                    </div>
                                   
                                        <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, ipsam.
                                        </p>
                                   
                                    <div class="rating">
                                        <span class="badge rounded-pill bg-light mb-4">
                                          $stars
                                        </span>
                                    </div>
                       
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="cantainer p-4">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13991.888660217995!2d75.82962799999997!3d26.746889000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc99ffc9ba69b:0x3854fc721b57b41f!2sA-26, KRISHNA VIHAR COLONY, CHANDLAI, Vatika Rd, near NAHAR KA CHORAHA, Chokhi Dhani, Sukhdeopura Nohara, Jaipur, Rajasthan 303905!5e1!3m2!1sen!2sin!4v1645596350741!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mt-5">
                    <h5>Call us</h5>
                    <a href="tel: +918560030482" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +918560030482</a> <br>
                    <a href="tel: +917976599185" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +917976599185</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i><a href="https://www.twitter.com/AkshayKrBairwa" target="_blank">Twitter</a></span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-linkedin me-1"></i><a href="https://www.linkedin.com/in/AkshayKrBairwa" target="_blank">Linkedin</a></span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i><a href="https://www.facebook.com/AkshayKrBairwa" target="_blank">Facebook</a></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--recovery Modal -->
    <div class="modal fade" id="recoveryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="recovery-form">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id=""><i class="bi bi-shield-lock fs-3 me-2"></i>Set new Password</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label class="form-label">New Password</label>
                            <input type="password" name="pass" required class="form-control shadow-none">
                            <input type="hidden" name="email">
                            <input type="hidden" name="token">
                        </div>
                        <div class="mb-2 text-end">
                            <button type="button" class="btn shadow-none me-2" data-bs-dismiss="modal">
                                CANCEL
                            </button>
                            <button type="submit" class="btn btn-dark shadow-none">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php'); ?>
   
    <script src="./common/lib_js/jQuery.js"></script>
    <script src="./common/lib_js/bootstrap.min.js"></script>
    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
       


        // ================================


        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 50,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "4",
            loop: true,
            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            // pagination: {
            //     el: ".swiper-pagination",
            // },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
       
    </script>
</body>

</html>
