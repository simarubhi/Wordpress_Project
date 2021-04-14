 <?php get_header();?>
 
 <!-- CONTACT SECTION -->
 <section>

<!-- Contact Section Container -->
<div class="contact-page">

    <!-- Contact Us Heading -->
    <h1 class="heading">Contact Us</h1>

    <!-- Background Gradient -->
    <img src="<?php echo get_template_directory_uri();?>/assets/gradients/contact.jpg" class="gradient-contact" alt="Gradient">

    <!-- SVG + Contact Form -->
    <div class="content" data-aos="zoom-in-up">
        
        <!-- SVG -->
        <img src="<?php echo get_template_directory_uri();?>/assets/svg/contact-page.svg" class="contact-svg" alt="Contact SVG">

        <!-- Contact Form -->
        <?php echo do_shortcode('[contact-form-7 id="104" title="Contact Form 1"]');?>

    </div>

</div>

</section>
<!-- END OF CONTACT SECTION -->

<?php get_footer();?>