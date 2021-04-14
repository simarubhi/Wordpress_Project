<?php get_header();?>
 
    <!-- SERVICES SECTION -->
    <section>

        <!-- Container For Services Section -->
        <div class="services-container">

            <!-- Our Services Heading -->
            <h1 class="heading">Our Services</h1>

            <!-- Service Cards Container -->
            <div class="cards">

                <!-- Service -->
                <a href="<?php echo home_url('/contact');?>" class="service" data-aos="zoom-in-up">
                    
                    <!-- Service Image -->
                    <img src="<?php echo get_template_directory_uri();?>/assets/svg/blog-post.svg" alt="Blog Post">

                    <!-- Service Title -->
                    <h3 class="title">Blog Post Writing</h3>

                    <!-- Service Description -->
                    <p class="description">Have a us write a blog post for you! Contact for more information, questions etc.</p>
                </a>

                <!-- Service -->
                <a href="<?php echo home_url('/contact');?>" class="service" data-aos="zoom-in-up">

                    <!-- Service Image -->
                    <img src="<?php echo get_template_directory_uri();?>/assets/svg/wordpress.svg" alt="Wordpress Site">

                    <!-- Service Title -->
                    <h3 class="title">Wordpress Site</h3>

                    <!-- Service Description -->
                    <p class="description">Get yourself a wordpress site! We do custom wordpress sites, website design and support! Contact for more details, questions etc.</p>
                </a>

                <!-- Service -->
                <a href="<?php echo home_url('/contact');?>" class="service" data-aos="zoom-in-up">

                    <!-- Service Image -->
                    <img src="<?php echo get_template_directory_uri();?>/assets/svg/review-service.svg" alt="Product Review">

                    <!-- Service Title -->
                    <h3 class="title">Product Review</h3>

                    <!-- Service Description -->
                    <p class="description">Do you have a product you want reviewed? You've come to the right place! We do sponsered and unsponsered articles, blogs reviews etc. Contact us today!</p>
                </a>

            </div>

        </div>

    </section>
    <!-- END OF SERVICES SECTION -->

<?php get_footer();?>