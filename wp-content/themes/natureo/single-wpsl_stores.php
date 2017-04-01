<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <header class="entry-header">
                    <h1 class="entry-title"><?php single_post_title(); ?></h1>        
                </header>
                <div class="entry-content">
                <?php
					echo get_the_post_thumbnail( $queried_object->ID, 'medium' );
                    global $post;
                    $queried_object = get_queried_object();
                    
                    // Add the map shortcode
                    echo do_shortcode( '[wpsl_map]' );
                    
                    // Add the content
                    $post = get_post( $queried_object->ID );
                    setup_postdata( $post );
                    the_content();
                    wp_reset_postdata( $post );
                    
                    // Add the address shortcode
                    echo do_shortcode( '[wpsl_address]' );
					
					
					$appointment_url = get_post_meta( $queried_object->ID, 'wpsl_appointment_url', true );
					$test_field_value = get_post_meta( $queried_object->ID, 'wpsl_test_field', true );

if ( $appointment_url ) {
  echo '<p><a href="' . esc_url( $appointment_url ) . '">' . __( 'Make Appointment', 'wpsl' ) . '</a></p>';
}
if ( $appointment_url ) {
  echo '<p>' . $test_field_value . '</p>';
}

			

                ?>
                <h2><?php the_field('store_name'); ?></h2>
                <p><?php the_field('store_description'); ?></p>
                
                <img src="<?php the_field('store_image'); ?>" alt="" />
                </div>
            </article>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>