<?php get_sidebar('social_icons'); ?>
<div class="container-fluid footer" >
    <div class="row">
        <div class="col-md-12">
            <div class="container find-us-background text-center">
                <div class="find-us-text">Find us</div>
                <div class="icon-margin-down">
                    <a href="https://www.facebook.com/Sip-Sap-791493710977750/?fref=ts" target="_blank"><img class="icon-margin-left" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""/></a>
                    <a href="../index.html" target="_blank"><img class="icon-margin-left" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""/></a>
                    <a href="../index.html" target="_blank"><img class="icon-margin-left" src="<?php echo get_template_directory_uri(); ?>/img/google.png" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="height-125px" style="background: white;"></div>
<div style="background: white;">
    <div class="container text-center">
            <div class="subscribe-button center-block">
        <?php echo do_shortcode('[contact-form-7 id="235" title="Subscribe"]'); ?>
            </div>

            <div class="clearfix"></div>

        <div>
            <div class="newsletter"> Subscribe to NEWSLETTER</div>
            <div class="newsletter-text"> Get an email of every news! We’ll never share your address.</div>
        </div>
        </div>
        
        
    </div>
</div>

<div id="footer" style="background: #e5e7e4;">


    <div class="container" style="background: #e5e7e4;">
        <div class="line"></div>

        <div class="row ">
            <div class=" col-sm-12">
                <div class="row">
                    <?php get_sidebar('main_footer'); ?>
                    <div class="col-md-3 col-sm-4 col-sm-offset-4 col-md-offset-0">
                        <div class=""><img class="menu-footer-logo hidden-xs img-responsive " src="<?php echo get_template_directory_uri(); ?>/img/lt_eko_footer.jpg" alt=""/></div>
                    </div>
                </div>

            </div>

        </div>




    </div>
    <img class="center-block sip-sap-footer-logo hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/sip_sap_footer.jpg" alt=""/>
</div>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.viewport.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/js.js'></script>
<?php if ( is_page_template( 'template-index.php' ))  : ?>
    <script>     
        $(function() {

        $('.video-image').click(function () {
            $(this).hide();

            var html = $('.js-video-template').html();
            $('.youtube-container').html(html);
            resize();
        });

        resize();
        $(window ).resize(function() {
            resize();
        });

        function resize() {
            var new_height = 9 / 16 * $(window).width();
            $('.youtube').height(new_height);
            $('.video-image').height(new_height);
        }
    });


    $(window ).resize(function() {
//        if ($(window).width() > 1200 ) {
            var width =   Math.round( ($(window).width()-1000)/4);
            $('.padding-border-video').css('padding-top',width +'px');
//        }
    });
//    if ($(window).width() > 1200 ) {
        var width =   Math.round( ($(window).width()-1000)/4);
        $('.padding-border-video').css('padding-top',width +'px');
//    }
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/slideshow.js'></script>
<?php endif; ?>
<?php if ( is_page( 'contacts' ))  : ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<?php endif; ?>
<?php wp_footer(); //Crucial footer hook! ?>
</body>

</html>