<?php
// Register Customizer Settings
function customizer_settings($wp_customize) {
    // Adding Quotes Panel
    $wp_customize->add_panel('quote_panel', array(
        'title' => 'Quotes',
        'priority' => 10,
        'capability' => 'edit_theme_options',
    ));

    // Adding Home Page Section
    $wp_customize->add_section('quote_panel_home', array(
        'title' => 'Home Section',
        'description' => __('Home Quote Setting And Control'),
        'panel' => 'quote_panel'
    ));

    // Adding About Page Section
    $wp_customize->add_section('quote_panel_about', array(
        'title' => 'About Section',
        'description' => __('About Quotes Settings And Controls'),
        'panel' => 'quote_panel'
    ));

    // Adding Setting (Home Quote Heading)
    $wp_customize->add_setting('home_quote_heading', array(
        'default' => __('Observe'),
    ));

    // Adding contorl (Home Quote Heading)
    $wp_customize->add_control('home_quote_heading', array(
        'label' => 'Home Quote Heading',
        'section' => 'quote_panel_home',
        'priority' => '2'
    ));

    // Adding Setting (Home Quote Paragraph)
    $wp_customize->add_setting('home_quote_para', array(
        'default' => __('A hotspot for education, guides and reviews with a goal of productivity and success'),
    ));

    // Adding contorl (Home Quote Paragraph)
    $wp_customize->add_control('home_quote_para', array(
        'label' => 'Home Quote Paragraph',
        'section' => 'quote_panel_home',
        'priority' => '3',
        'type' => 'textarea',
    ));

    // Adding Setting (About Banner Quote Heading)
    $wp_customize->add_setting('about_banner_quote_heading', array(
        'default' => __('About'),
    ));

    // Adding contorl (About Banner Quote Heading)
    $wp_customize->add_control('about_banner_quote_heading', array(
        'label' => 'About Banner Quote Heading',
        'section' => 'quote_panel_about',
        'priority' => '4',
    ));

    // Adding Setting (About Quote Heading One)
    $wp_customize->add_setting('about_quote_heading_one', array(
        'default' => __('From Learning To Teaching'),
    ));

    // Adding contorl (About Quote Heading One)
    $wp_customize->add_control('about_quote_heading_one', array(
        'label' => 'About Quote Heading One',
        'section' => 'quote_panel_about',
        'priority' => '5',
    ));

    // Adding Setting (About Quote Paragraph One)
    $wp_customize->add_setting('about_quote_para_one', array(
        'default' => __('From Learning To Teaching'),
    ));

    // Adding contorl (About Quote Paragraph One)
    $wp_customize->add_control('about_quote_para_one', array(
        'label' => 'About Quote Paragraph One',
        'section' => 'quote_panel_about',
        'priority' => '6',
    ));

    // Adding Setting (About Quote Heading Two)
    $wp_customize->add_setting('about_quote_heading_two', array(
        'default' => __('The Mission'),
    ));

    // Adding contorl (About Quote Heading Two)
    $wp_customize->add_control('about_quote_heading_two', array(
        'label' => 'About Quote Heading Two',
        'section' => 'quote_panel_about',
        'priority' => '7',
    ));

    // Adding Setting (About Quote Paragraph Two)
    $wp_customize->add_setting('about_quote_para_two', array(
        'default' => __('The Mission'),
    ));

    // Adding contorl (About Quote Paragraph Two)
    $wp_customize->add_control('about_quote_para_two', array(
        'label' => 'About Quote Paragraph Two',
        'section' => 'quote_panel_about',
        'priority' => '8',
    ));
}

add_action('customize_register', 'customizer_settings');