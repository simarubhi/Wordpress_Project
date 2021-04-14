<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>

<body>

    <!-- HEADER SECTION -->
    <header>

        <!-- logo -->
        <div class="logo-container">
            <a href="<?php echo home_url();?>" class="logo"><?php bloginfo('name');?></a>
        </div>

        <!-- Menu Button -->
        <div class="menu-btn">
            <span class="bar"></span>
        </div>

        <!-- Dynamic Primary Menu -->
        <?php if(has_nav_menu('primary-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'items_wrap' => '<ul class="nav-links">%3$s</ul>'
            ));
        } 
        ?>

        <?php 
        
            if(is_single()) {
                ?>

                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>

                <?php
            }
        
        ?>

    </header>
    <!-- END OF HEADER -->