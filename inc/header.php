

<!-- navbar -->
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel Booking </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About Us</a>
                </li>
            </ul>
            <div class="d-flex">
             
             
                       
               
                        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                         </button>
                        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Register
             


            </div>

        </div>
    </div>
</nav>
<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <di class="modal-content">
            <form id="login-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id=""><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email/Mobile</label>
                        <input type="text" name="email_mob" required class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control shadow-none" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">

                        <button type="submit" class="btn btn-dark shadow-none">Login</button>


                        <button type="button" class="btn shadow-none p-0" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#forgotModal">
                            Forgot Password ?
                        </button>

                    </div>
                </div>
    </div>
    </form>
</div>


<!-- FORGOT MODAL Modal -->
<div class="modal fade" id="forgotModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <di class="modal-content">
            <form id="forgot-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id=""><i class="bi bi-person-circle fs-3 me-2"></i>Forgot Password</h5>
                   
                </div>
                <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: A link will be sent to your email to reset your password .</span>
                    <div class="mb-4">                  
                        <label class="form-label">Email</label>
                        <input type="text" name="email" required class="form-control shadow-none">
                    </div>
                   
                    <div class="mb-2 text-end">

                     

                        <button type="button" class="btn shadow-none p-0 me-2"  data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                           CANCEL
                        </button>
                        <button type="submit" class="btn btn-dark shadow-none">SEND LINK</button>


                    </div>
                </div>
    </div>
    </form>
</div>
<!-- Register Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h5>
                <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your
                    details must match with your ID (Aadhaar
                    Card, Passport, Driving License), That will be required during check-in.</span>
                <div class="container-fluid">
                    <form id="register-form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3 p-0">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3 ps-0">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" name="phone" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3 p-0">
                                <label for="profile" class="form-label">Profile</label>
                                <input type="file" name="profile" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 mb-3 p-0">
                                <label for="address" class="form-label">Address</label>
                                <textarea type="text" name="address" class="form-control shadow-none" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3 ps-0">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="number" name="pincode" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-4 p-0">
                                <label for="dob" class="form-label">DOB</label>
                                <input type="date" name="dob" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" name="pass" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3 p-0">
                                <label for="cpass" class="form-label">Confirm Password</label>
                                <input type="password" name="cpass" class="form-control shadow-none" required>
                            </div>
                            <div class="text-center mb-2">
                                <button type="submit" class="btn btn-dark shadow-none">Register</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

