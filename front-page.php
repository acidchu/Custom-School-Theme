<?php
/**
 * Front Page
 * 
 * @package Education_Center
 */
$home_sections = array( 'banner-box', 'about', 'course-feature', 'cta', 'featured', 'video', 'blog' );

if ( 'posts' == get_option( 'show_on_front' ) ) { //Show Static Blog Page
    include( get_home_template() );
}elseif( $home_sections ){ 
    get_header();
    //If any one section are enabled then show custom home page.
    foreach( $home_sections as $section ){
        get_template_part( 'section/home/' . esc_attr( $section ) );  
    }
    // Add this code to display a specific page as the homepage
    $page = get_page_by_title('Home');
    if ($page) {
        $content = apply_filters('the_content', $page->post_content);
        echo '<div class="inserted-page-content"><div class="container">' . $content . '</div></div>';
}
    get_footer();
}else {
    //If all section are disabled then show respective page template. 
    include( get_page_template() );
}

