<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In to admin panel</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="../assest/img/icon/favicon.png" type="image/x-icon">
    <!-- CSS Me -->
    <link rel="stylesheet" text="text/css" href="../assest/css/style.css">
    <!-- Bootstrap 5.2.3 CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Font Awesome 6.2.1 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Sweetalert2 11.7.0 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">
    <!-- Jquery 3.6.3 JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'
        integrity='sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=='
        crossorigin='anonymous'></script>
    <style>
        .elevation-2{box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)!important}
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="assets/img/jordan.jpg" alt="login form" 
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-4 text-black">

                                    <form data-parsley-validate="" novalidate="" onsubmit="return false">

                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-database fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Bill</span>
                                        </div>

                                        <h5 class="fw-normal mb-3" style="letter-spacing: 1px;">Sign in into your
                                            account</h5>

                                        <div class="form-outline mb-1">
                                            <input type="text" id="username" placeholder="Username"
                                                data-parsley-required="true"
                                                data-parsley-error-message="Please insert your username"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="username"><i class="fas fa-user-tie"></i>
                                                Username</label>
                                        </div>

                                        <div class="form-outline mb-1">
                                            <input type="password" id="password" placeholder="Password"
                                                data-parsley-required="true"
                                                data-parsley-error-message="Please insert your password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="password"><i class="fas fa-key"></i>
                                                Password</label>
                                        </div>

                                        <div class="pt-1 mb-2 text-center">
                                            <button class="btn btn-dark btn-lg btn-block px-5" type="submit"
                                                id="login_btn">Login</button>
                                        </div>

                                        <a class="small text-muted" href="#">Forgot password?</a>
                                        <p class="mb-2 pb-lg-1" style="color: #393f81;">Don't have an account? <a
                                                href="register.php" style="color: #393f81;">Register here</a></p>
                                        <a href="" class="small text-muted">Terms of use.</a>
                                        <a href="" class="small text-muted">Privacy policy</a>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block mt-2"
                                            id="liveToastBtn">Show default account</button>

                                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                            <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header bg-info">
                                                    <img src="../assest/dist/img/avatar.png"
                                                        class="rounded-circle elevation-2 me-2" style="width: 10%; height: 10%;" alt="admin">
                                                    <strong class="me-auto text-black">Admin Nabil</strong>
                                                    <small>Online <i class="fa-solid fa-circle text-sm-right" style="color: green;"></i></small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Username : admin <br>
                                                    Password : admin
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }
        
        let username = document.getElementById('username');
        let password = document.getElementById('password');
        let login_btn = document.getElementById('login_btn');
        login_btn.addEventListener("click", funtion = () => {
            event.preventDefault();
            username = username.value;
            password = password.value;
            if (username == "admin" && password == "admin") {
                window.alert("selamat datang admin");
                window.location.href = '../admin/';
            }

        })

        
    </script>
    <!-- Login JS Me -->
    <script src="../admin/js/login.js"></script>
    <!-- Bootstrap 5.2.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Sweetalert2 11.7.0 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <!-- Parsley 2.9.2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>

</body>

</html>