<?php
session_start();
include('includes/header.php');
?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-7 col-md-7 ">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg-10 offset-md-1">
                            <div class="p-5 offset-md-1">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>


                                    <?php


                                    if (isset($_SESSION['status']) && $_SESSION['status'] != '')
                                     {
                                        echo '<h4 class="bg-danger text-white">' . $_SESSION['status'] . '</h4>';
                                        unset($_SESSION['status']);
                                    }

                                    ?>


                                </div>
                                <form class="user" action="code.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>


                                    <hr>
                                    <a href="" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                </form>
                                <hr>





                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>














</div>
<!-- End of Main Content -->

<?php
include('includes/script.php');
include('includes/footer.php');
?>