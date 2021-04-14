<?php get_header();?>

<!-- ABOUT SECTION -->
<section class="about-page">
        
    <!-- Banner Section -->
    <div class="banner">

        <!-- Background Gradient -->
        <img src="<?php echo get_template_directory_uri();?>/assets/gradients/about_1.jpg" class="gradient-about" alt="gradient">

        <!-- Flex Used For Quote + Explore Button and SVG -->
        <div class="flex">

            <!-- SVG Used In Banner -->
            <img src="<?php echo get_template_directory_uri();?>/assets/svg/Question.svg" class="question-svg" alt="question mark">

            <!-- Container For Quote + Explore Button -->
            <div class="quote-container">
    
                <div class="quote">
                    <h3 class="heading"><?php echo get_theme_mod('about_banner_quote_heading', 'About');?></h3>
                    <h1 class="title"><?php bloginfo('name');?></h1>
                </div>
    
                <div class="explore-btn">
                    <a href="#scroll">Explore</a>
                </div>
    
            </div>

        </div>

    </div>

    <!-- Content Section, ID Scroll Given For Banner Explore Button -->
    <div class="content" id="scroll">

        <!-- Content Gradient -->
        <img src="<?php echo get_template_directory_uri();?>/assets/gradients/about_2.jpg" class="gradient-content" alt="gradient">

        <!-- Quote/Paragraph + SVG, Work Class Given To Seperate Both Pairs-->
        <div class="pair work" data-aos="fade-down-right">

            <!-- SVG -->
            <img src="<?php echo get_template_directory_uri();?>/assets/svg/Work.svg" class="svg work-svg" alt="work svg">

            <!-- Quote/Paragraph -->
            <div class="quote">
                    
                <h1 class="heading"><?php echo get_theme_mod('about_quote_heading_one', 'From Learning To Teaching');?></h1>

                <p class="para"><?php echo get_theme_mod('about_quote_para_one', 'From Learning To Teaching');?></p>

            </div>

        </div>

        <div class="pair mission" data-aos="fade-down-left">

            <img src="<?php echo get_template_directory_uri();?>/assets/svg/rocket.svg" class="svg rocket" alt="rocket svg">

            <div class="quote">
                    
                <h1 class="heading"><?php echo get_theme_mod('about_quote_heading_two', 'The Mission');?></h1>

                <p class="para"><?php echo get_theme_mod('about_quote_para_two', 'The Mission');?></p>

            </div>

        </div>

    </div>

</section>
<!-- END OF ABOUT SECTION -->

<?php get_footer();?>