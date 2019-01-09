<!doctype html>
<html class=no-js lang=en>
    <head>
        <meta charset=utf-8>
        <meta http-equiv=x-ua-compatible content="ie=edge">
        
        <title>
            <?= $title ?>
        </title>

        <meta name=description content>
        <meta name=viewport content="width=device-width, initial-scale=1">        
        <link rel="shortcut icon" type=image/x-icon href=https://res.cloudinary.com/ikutaja/image/upload/v1546101683/img/fav/1.png>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">        
        <link rel="stylesheet" href="<?php echo base_url('assetsAdmin/css/style.css'); ?>">        
    
</head>

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo base_url('/'); ?>">
                        <img class="align-content" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt="">
                    </a>
                </div>
                <?php if(isset($error)) { echo $error; }; ?>
                <div class="login-form">                
                    <form method="post" action="<?php echo base_url('login/admin'); ?>">
                         
                        <div class="text-center">
                            <h4>ANDA TELAH LOGOUT</h4>
                            <p>Silahkan tekan tombol dibawah untuk masuk kembali.</p>
                        </div>

                        <input value="Sign in" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo base_url('assetsAdmin/js/main.js'); ?>"></script>        
    

</body>
</html>
