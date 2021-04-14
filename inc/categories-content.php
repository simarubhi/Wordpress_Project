<?php 
// Get List Of Categories
$categories = get_categories(array(
    'orderby' => 'name',
    'parent' => 0
));

// For Each Category Get Name And Link
foreach ($categories as $category) {
    printf('<a href="%1$s" class="category">%2$s</a>',
    // Get Category Link
    esc_url(get_category_link($category->term_id)),

    // Get Category Name
    esc_html($category->name));
}
