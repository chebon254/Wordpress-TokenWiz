<body class="page-ath">
    
    <div class="page-ath-wrap">
        <div class="page-ath-content">
            <div class="page-ath-header">
                <a href="index.php" class="page-ath-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" srcset="images/logo2x.png 2x" alt="logo"></a>
            </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Reset password <span>If you forgot your password, well, then we’ll email you instructions to reset your password.</span></h2>
                <form action="#">
                    <div class="input-item">
                        <input type="text" placeholder="Your Email" class="input-bordered">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <button class="btn btn-primary btn-block">Send Reset Link</button>
                        </div>
                        <div>
                            <a href="index.php?page=sign-in">Return to login</a>
                        </div>
                    </div>
                    <div class="gaps-2x"></div>
                </form>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="index.php?page=regular-page">Privacy Policy</a></li>
                    <li><a href="index.php?page=regular-page">Terms</a></li>
                    <li>&copy; 2018 TokenWiz.</li>
                </ul>
            </div>
        </div>
        <div class="page-ath-gfx">
           <div class="w-100 d-flex justify-content-center">
               <div class="col-md-8 col-xl-5">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/ath-gfx.png" alt="image">
               </div>
           </div>            
        </div>
    </div>

	<!-- JavaScript (include all script here) -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.bundle.js?ver=104"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js?ver=104"></script>
</body>
</html>
