<!-- FOOTER -->
<footer>

    <!-- Background URL + Container For Footer -->
    <div class="footer-container" style="background: url(<?php echo get_template_directory_uri();?>/assets/gradients/footer.jpg) no-repeat center">

        <!-- Used To Split Elements Into Row When Medium Sized Viewport -->
        <div class="footer-flex">

            <!-- Footer Widgets, Example: Search Card, Social Media Card -->
            <div class="widgets">

            <!-- Search Card -->
            <div class="search">
                <h1 class="title">Search</h1>

                <?php
                    // Get searchform.php template file using get_search_form()
                    get_search_form();
                ?>

            </div>

                <!-- Social Media Card -->
                <div class="social-media">
                    <h1 class="title">Social Media</h1>

                    <div class="icon-container">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>

            </div>

            <!-- Navigation Links -->
            <div class="footer-navlinks">

                <!-- Section of Links -->
                <div class="link-section">
                    <h1 class="heading">Navigation</h1>

                    <!-- Dynamic Primary Menu -->
                    <?php if(has_nav_menu('primary-menu')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => '',
                            'items_wrap' => '<ul class="link-group">%3$s</ul>'
                        ));
                    } 
                    ?>

                </div>

            </div>

        </div>

        <h6 class="copyright">Copyright 2020 &copy;Observe</h6>

    </div>
</footer>
<!-- END OF FOOTER SECTION -->

<?php wp_footer();?>

</body>

</html>