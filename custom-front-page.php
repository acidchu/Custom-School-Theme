<?php
/**
 * Template Name: Custom Front Page
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    // Insert content from another page (use the ID of the page you want to include)
    $page_id = 25; // Replace 123 with the ID of the page you want to insert
    $page = get_post($page_id);
    if ($page) {
        echo '<div class="inserted-page-content"><div class="container">';
        echo apply_filters('the_content', $page->post_content);
        echo '</div></div>';
    }

    // If any one section is enabled then show custom home page.
    $home_sections = array('banner-box', 'about', 'course-feature', 'cta', 'featured', 'video', 'blog');
    if ($home_sections) {
        foreach ($home_sections as $section) {
            get_template_part('section/home/' . esc_attr($section));
        }
    }
    ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_sidebar();
get_footer();
