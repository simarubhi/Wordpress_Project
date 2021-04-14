<?php get_header();?>

<!-- BANNER SECTION -->
<section>

    <div class="banner-container">

        <!-- Background Gradient -->
        <img src="<?php echo get_template_directory_uri();?>/assets/gradients/home.jpg" class='gradient-home' alt="gradient background">

        <!-- SVG Image -->
        <img src="<?php echo get_template_directory_uri();?>/assets/svg/homepage.svg" class='svg-person-home' alt="person picture">

        <!-- Contains Quote + Explore Button -->
        <div class="quote-btn-container">

            <!-- Quote -->
            <div class="quote-container">
                <h1 class="quote-name"><?php echo get_theme_mod('home_quote_heading', 'Observe');?></h1>
                <p class="quote-para"><?php echo get_theme_mod('home_quote_para', 'A hotspot for education, guides and reviews with a goal of productivity and success');?></p>
            </div>

            <!-- Explore Button Below Quote -->
            <div class="explore-btn">
                <a href="#scroll">Explore</a>
            </div>

        </div>

    </div>

</section>
<!-- END OF BANNER -->

<!-- POSTS SECTION  -->
<section>

    <!-- Grid/container for all content -->
    <div class="main-grid">

        <!-- When Clicking Explore Button Screen Scrols To This Element -->
        <div id="scroll"></div>

        <!-- Sidebar Column -->
        <div class="sidebar-container">

            <!-- Popular Posts Card -->
            <div class="popular-posts">
                <h1 class="title">Popular Posts</h1>

                <!-- Three Popular Posts -->
                <div class="posts-container">

                <?php 
                
                $query = new WP_Query(array(
                    'post_type' => 'any',
                    'category_name' => 'popular-posts',
                    'orderby' => 'date',
                    'posts_per_page' => '3',
                ));

                if ($query->have_posts() ) : 
                    while ($query->have_posts() ) : $query->the_post(); 
                ?>

                    <a href="<?php the_permalink();?>" class="popular-post">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="post-img" alt="Post Image">
                        <p class="post-title"><?php the_title();?></p>
                    </a>
            
                <?php
                            
                    endwhile; 
                endif;

                    wp_reset_postdata();

                ?>

                </div>
            </div>

            <!-- Sidebar With Position Sticky, Includes Entire Sidebar Other Than "Popular Posts" Card -->
            <div class="sticky-sidebar">

                <!-- Search Card -->
                <div class="search">
                    <h1 class="title">Search</h1>

                    <?php
                        // Get searchform.php template file using get_search_form()
                        get_search_form();
                    ?>

                </div>

                <!-- Categories Card -->
                <div class="categories">
                    <h1 class="title">Categories</h1>

                    <div class="container">
                        <?php get_template_part('inc/categories', 'content');?>
                    </div>

                </div>

                <!-- Newsletter Card -->
                <?php echo do_shortcode('[newsletter_form form="1"]');?>
                
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
        </div>

        <!-- Posts Column -->
        <div class="posts-area">

            <!-- LATEST POSTS Section -->
            <h1 class="section-heading">Latest Posts</h1>

                <!-- "Columns" Has Masonry.js Applied, This Allows Masonry Grid -->
                <div class="columns">

                    <!-- Gutter Used For Distance Between Posts, Masonry.js -->
                    <div class="gutter">
                    </div>

                    <?php

                        $query = new WP_Query(array(
                            'post_type' => array('post', 'reviews'),
                            'orderby' => 'date',
                            'posts_per_page' => '4',
                        ));

                        if ($query->have_posts() ) : 
                            while ($query->have_posts() ) : $query->the_post(); 
                                if(get_post_type() == 'reviews')  {
                                ?>
                                <div class="post review" data-aos="zoom-in-up">
                                    
                                    <a href="<?php the_permalink();?>" class="img-link">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="post-img" alt="Post Image">
                                    </a>
                        
                                    <div class="post-content">
                        
                                        <p class="meta">Posted on <?php echo get_the_date();?> in <?php get_template_part('inc/post_categories', 'content');?></p>
                                            
                                        <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>
                                            
                                        <p class="description"><?php the_excerpt();?></p>
                        
                                        <a href="<?php the_permalink();?>" class="post-btn review">
                                            <span>Review</span>
                                        </a>
                                                
                                    </div>
                        
                                </div>
                        
                                <?php
                                } else {
                                ?>
                        
                                <div class="post" data-aos="zoom-in-up">
                                    
                                    <a href="<?php the_permalink();?>" class="img-link">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="post-img" alt="Post Image">
                                    </a>
                        
                                    <div class="post-content">
                        
                                        <p class="meta">Posted on <?php echo get_the_date();?> in <?php get_template_part('inc/post_categories', 'content');?></p>
                                            
                                        <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>
                                            
                                        <p class="description"><?php the_excerpt();?></p>
                        
                                        <a href="<?php the_permalink();?>" class="post-btn">
                                            <span>Article</span>
                                        </a>
                                                
                                    </div>
                        
                                </div>
                        
                                <?php
                                }
                            endwhile; 
                        endif;

                        wp_reset_postdata();

                    ?>
                                            
                </div>

            <!-- View More Button Found At the End Bottom Of Each Section -->
            <a href="<?php echo home_url('/posts');?>" class="viewmore-btn">
                <span>View More</span>
            </a>

            <!-- ARTICLE Section -->
            <h1 class="section-heading">Articles</h1>

            <div class="columns">

                <div class="gutter">
                </div>

                    <?php

                        $query = new WP_Query(array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'posts_per_page' => '4',
                        ));

                        if ($query->have_posts() ) : 
                            while ($query->have_posts() ) : $query->the_post();?>

                                    <div class="post" data-aos="zoom-in-up">
                                        
                                        <a href="<?php the_permalink();?>" class="img-link">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="post-img" alt="Post Image">
                                        </a>
                            
                                        <div class="post-content">
                            
                                            <p class="meta">Posted on <?php echo get_the_date();?> in <?php get_template_part('inc/post_categories', 'content');?></p>
                                                
                                            <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>
                                                
                                            <p class="description"><?php the_excerpt();?></p>
                            
                                            <a href="<?php the_permalink();?>" class="post-btn">
                                                <span>Article</span>
                                            </a>
                                                    
                                        </div>
                            
                                    </div>
                        
                                <?php
                            endwhile; 
                        endif;

                        wp_reset_postdata();

                    ?>

            </div>

            <a href="<?php echo home_url('/articles');?>" class="viewmore-btn">
                <span>View More</span>
            </a>

            <!-- REVIEW Section -->
            <h1 class="section-heading">Reviews</h1>

            <div class="columns">

                <div class="gutter">
                </div>

                    <?php

                        $query = new WP_Query(array(
                            'post_type' => 'reviews',
                            'orderby' => 'date',
                            'posts_per_page' => '4',
                        ));

                        if ($query->have_posts() ) : 
                            while ($query->have_posts() ) : $query->the_post();?>

                                    <div class="post review" data-aos="zoom-in-up">
                                        
                                        <a href="<?php the_permalink();?>" class="img-link">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="post-img" alt="Post Image">
                                        </a>
                            
                                        <div class="post-content">
                            
                                            <p class="meta">Posted on <?php echo get_the_date();?> in <?php get_template_part('inc/post_categories', 'content');?></p>
                                                
                                            <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>
                                                
                                            <p class="description"><?php the_excerpt();?></p>
                            
                                            <a href="<?php the_permalink();?>" class="post-btn review">
                                                <span>Review</span>
                                            </a>
                                                    
                                        </div>
                            
                                    </div>
                        
                                <?php
                            endwhile; 
                        endif;

                        wp_reset_postdata();

                    ?>

            </div>

            <a href="<?php echo home_url('/reviews');?>" class="viewmore-btn">
                <span>View More</span>
            </a>

        </div>

    </div>

</section>
<!-- END OF POSTS SECTION -->

<!-- CONTACT SECTION -->
<section>

    <!-- Background URL + Container For Section -->
    <div class="contact-container" style="background: url(<?php echo get_template_directory_uri()?>/assets/images/contact-bg.png) no-repeat bottom">

        <!-- Contact Us Heading -->
        <h1 class="heading">Contact Us</h1>

        <!-- Contact Form -->
        <?php echo do_shortcode('[contact-form-7 id="104" title="Contact Form"]');?>

    </div>

</section>
<!-- END OF CONTACT SECTION -->

<?php get_footer();?>