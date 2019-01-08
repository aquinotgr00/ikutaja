<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo base_url('admin'); ?>">
                        <img class="align-content" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="get" action="<?php echo base_url('admin/dashboard'); ?>">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>                        
                        </div>
                        <input value="Sign in" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">                    
                    </form>
                </div>
            </div>
        </div>
    </div>