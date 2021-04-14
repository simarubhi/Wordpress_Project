<?php
    // Get Post Categories
    $categories = get_the_category();
    // Iteration Variable For Foreach Loop
    $i = 0;

    // If Categories
    if(!empty($categories)) {
        // For Each Category
        foreach($categories as $category) {
            // If Iteration = Second Last
            if($i == count($categories) - 2) {
                $i++;
                printf('<a href="%1$s"> %2$s and</a>',
                esc_url(get_category_link($category->term_id)),
                esc_html($category->name));
            // If Iteration = Last
            } elseif($i == count($categories) - 1) {
                printf('<a href="%1$s"> %2$s</a>',
                esc_url(get_category_link($category->term_id)),
                esc_html($category->name));
            // If Not Second Last Or Last Add Comma
            } else {
                $i++;
                printf('<a href="%1$s"> %2$s,</a>',
                esc_url(get_category_link($category->term_id)),
                esc_html($category->name));
            }
        }    
    }
?>