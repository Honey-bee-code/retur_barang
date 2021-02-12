<!DOCTYPE html>
<html lang="en">
<head>
<title>Aplikasi Return Barang</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?=base_url()?>_assets/images/bee.png">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/css/util.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>_assets/Login_v3/css/main.css">

</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?=base_url()?>_assets/Login_v3/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?=site_url('auth/proses')?>" method="post">
                    <span class="login100-form-logo">
                        <img src="<?=base_url()?>_assets/images/bee.png" style="width: 80px" alt="">
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Silahkan masuk
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <!-- <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div> -->
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-20">
                        <a class="txt1" href="#">
                            Lupa Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="<?=base_url()?>_assets/Login_v3/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="<?=base_url()?>_assets/Login_v3/vendor/animsition/js/animsition.min.js"></script>

    <script src="<?=base_url()?>_assets/Login_v3/vendor/bootstrap/js/popper.js"></script>
    <script src="<?=base_url()?>_assets/Login_v3/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?=base_url()?>_assets/Login_v3/vendor/select2/select2.min.js"></script>

    <script src="<?=base_url()?>_assets/Login_v3/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=base_url()?>_assets/Login_v3/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="<?=base_url()?>_assets/Login_v3/vendor/countdowntime/countdowntime.js"></script>

    <script src="<?=base_url()?>_assets/Login_v3/js/main.js"></script>

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
        </script>
    <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"version":"2021.2.0","rayId":"61fdb5d9ceb0d1df","si":10}'></script> -->
</body>
</html>
