<?php
// Theme setup
function avenstone_theme_setup() {
    register_nav_menus(array(
        'primary-menu' => __('Top Menu', 'avenstone'),
    ));
}

add_action('after_setup_theme', 'avenstone_theme_setup');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
register_sidebar(
    array(
      'name'=>'Sidebar Location',
      'id' => 'sidebar'
    )
    );
add_theme_support('custom-background');
add_post_type_support('page','excerpt');
function avenstone_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');

    // Custom Styles
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('templatemo', get_template_directory_uri() . '/assets/css/templatemo-villa-agency.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');

    // Swiper CDN
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

    // JS Files (add if needed)
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'avenstone_enqueue_scripts');
function avenstone_create_all_pages() {
    $pages = array(
        'Home'              => 'home.php',
        'Contact'           => 'contact.php',
        'Properties'        => 'properties.php',
        'Property Details'  => 'property-details.php',
        'Category'          => 'category.php',
        'Single'            => 'single.php',
        '404'               => '404.php',
    );

    foreach ($pages as $title => $template_file) {
        $page = get_page_by_title($title);
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title'   => $title,
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'post_content' => '',
            ));

            if (file_exists(get_template_directory() . '/' . $template_file)) {
                update_post_meta($page_id, '_wp_page_template', $template_file);
            }
        }
    }

    // Set 'Home' as front page
    $home = get_page_by_title('Home');
    if ($home) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home->ID);
    }
}
add_action('after_switch_theme', 'avenstone_create_all_pages');
function avenstone_customize_register($wp_customize) {

    // --- Email ---
    $wp_customize->add_setting('avenstone_email', array(
        'default' => 'info@company.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('avenstone_email', array(
        'label' => __('Email', 'avenstone'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // --- Address ---
    $wp_customize->add_setting('avenstone_address', array(
        'default' => 'Sunny Isles Beach, FL 33160',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('avenstone_address', array(
        'label' => __('Address', 'avenstone'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // --- Social Links ---
    $socials = ['facebook', 'twitter', 'linkedin', 'instagram'];

    foreach ($socials as $social) {
        $wp_customize->add_setting("avenstone_{$social}_link", array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("avenstone_{$social}_link", array(
            'label' => ucfirst($social) . ' URL',
            'section' => 'title_tagline',
            'type' => 'url',
        ));
    }

}
add_action('customize_register', 'avenstone_customize_register');
add_action('after_setup_theme', function () {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('editor-style');
  add_theme_support('elementor');
});
function avenstone_customize_footer_section($wp_customize) {

    // Footer Section
    $wp_customize->add_section('avenstone_footer_section', array(
        'title'    => __('Footer Settings', 'avenstone'),
        'priority' => 160,
    ));

    // Footer Logo Text
    $wp_customize->add_setting('avenstone_footer_logo_text', array(
        'default'           => 'Avenstone',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('avenstone_footer_logo_text', array(
        'label'    => __('Footer Logo Text', 'avenstone'),
        'section'  => 'avenstone_footer_section',
        'type'     => 'text',
    ));

    // Footer Address
    $wp_customize->add_setting('avenstone_footer_address', array(
        'default'           => '123 Street, City, Country',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('avenstone_footer_address', array(
        'label'    => __('Footer Address', 'avenstone'),
        'section'  => 'avenstone_footer_section',
        'type'     => 'textarea',
    ));

    // Footer Social Links
    $socials = ['facebook', 'twitter', 'instagram', 'linkedin'];
    foreach ($socials as $social) {
        $wp_customize->add_setting("avenstone_footer_{$social}", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("avenstone_footer_{$social}", array(
            'label'    => ucfirst($social) . ' URL',
            'section'  => 'avenstone_footer_section',
            'type'     => 'url',
        ));
    }

}
add_action('customize_register', 'avenstone_customize_footer_section');


/*
step 1: create basic structure for theme like basic file index.php , header.php ,footer,php,function.php
step 2: convert html template into php template 
step 3:Html template code paste in index.php for theme home page default calling 
step 4:sperate header footer code in header.php or footer code in footer.php and use function get_header() for header calling
or get_footer() for footer calling ,
step 5: than register nav menu dynamic in theme using function 
function avenstone_theme_setup() {
    register_nav_menus(array(
        'primary-menu' => __('Top Menu', 'avenstone'),
    ));
}
add_action('after_setup_theme', 'avenstone_theme_setup');
step 6: than design it using css class  
step 7:  get_template_directory_uri(); use this function for calling all css js file 
<?php echo get_template_directory_uri(); ?> like this paste it before all file  link css, js etc
step 8: <?php echo get_site_url(); ?> than use this function inside logo for main url of theme like home page 
step 9: than create page.php for every page like if any one create new page the file page.php calling 
<?php 
    if (have_posts()) : 
      while (have_posts()) : the_post();
        the_content();
      endwhile; 
    endif;
 ?>
    <?php the_post_thumbnail(); ?>
</div> use this function for calling page data in frontend also use the_title() function for getting title of page dynamic
step 10:than create different pages for dynamic code like <?php 
//Template Name:home
get_header(); ?> use this for template and go to page template setting to asgin the template 
step 11: than asgin index.html to blog page for by default copy home page code from index.php to paste in home.php ok
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
              </a>
            <?php endif; ?>

            <div class="card-body">
              <h5 class="card-title blog-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h5>
              <p class="card-text"><?php the_excerpt(); ?></p> 
              this is the code of blog page for call all blog  the_permalink() function call the url of post 
              the_post_thumbnail call the image of thi post the_excerpt() calling the excerpt
step 12: create single.php for every single blog page 
step 13 : add_theme_support('post-thumbnails'); use this function for register post thumnails pics than user add pic
for every post
step 14: add_theme_support('custom-header'); use this function for logo in header 
step 15: create category.php for calling every category of post 
step 16: use this function for widget register 
register_sidebar(
    array(
      'name'=>'Sidebar Location',
      'id' => 'sidebar'
    )
    );
    use this function for calling widget in any page <?php dynamic_sidebar('sidebar'); ?>
step 17: if you want sidebar many pages than we create a new file sidebar.php and paste the code of side par 
        <?php get_sidebar() ?>
use this function  for calling sidebar file in those page you want
step 18: use this function add_theme_support('custom-background'); for adding image in body background of website
add this in body tag <?php body_class(); ?> for display bg image 
step 19: 
    <title><?php bloginfo('name') ?> <?php if (is_front_page(){bloginfo('description') }?><?php wp_title() ?></title>
use this for title  and site title or description
step 20: use this function for adding excerpt functionailty in page 
add_post_type_support('page','excerpt');
step 21: we use wp_query() functipn for custom post type like use this function to getting data of custom 
post types ok 
step 22: use this function get_terms() for getting category taxonmy data from custom post type 



*/