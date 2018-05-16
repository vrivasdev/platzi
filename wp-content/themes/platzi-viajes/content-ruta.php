<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */
?>

<divid="post-<?php the_ID(); ?>" <?phppost_class(); ?>>
	<?php
	do_action( 'storefront_single_post_top' );
	/**
	 * Functions hooked into storefront_single_post add_action
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_meta            - 20
	 * @hooked storefront_post_content         - 30
	 */
  // do_action( 'storefront_single_post' );
  ?>
  <div>
    <header class="entry-header">
      <?php
        if ( is_single() ) {
          storefront_posted_on();
          the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
          if ( 'post' == get_post_type() ) {
            storefront_posted_on();
          }
          the_title( sprintf( '<h2 class="alpha entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        }
      ?>
    </header><!-- .entry-header -->    
    <?php
    /**
     * Functions hooked in to storefront_post_content_before action.
     *
     * @hooked storefront_post_thumbnail - 10
     */
    do_action( 'storefront_post_content_before' );
    the_content(
      sprintf(
        __( 'Continue reading %s', 'storefront' ),
        '<span class="screen-reader-text">' . get_the_title() . '</span>'
      )
    );
    /*************CUSTOM FIELDS********************************/
    $campos_ruta = get_post_custom( $post_id );
    ?>
      <div class="campos_ruta">
    		<div class="campo_ruta">
    			<div class="ruta_label">
    				<strong>Dificultad: &nbsp;</strong>
    			</div>
    			<div class="ruta_valor">
    				<?php echo $campos_ruta['dificultad'][0]; ?>
    			</div>
    		</div>
        <div class="campo_ruta">
          <div class="ruta_label">
            <strong>Tiempo: &nbsp;</strong>
          </div>
          <div class="ruta_valor">
            <?php echo $campos_ruta['tiempo'][0]; ?>
          </div>
        </div>
    	</div>
    <?php
    do_action( 'storefront_post_content_after' );
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'storefront' ),
      'after'  => '</div>',
    ) );
    ?>
  </div><!-- .entry-content -->
  <?php
	/**
	 * Functions hooked in to storefront_single_post_bottom action
	 *
	 * @hooked storefront_post_nav         - 10
	 * @hooked storefront_display_comments - 20
	 */
	do_action( 'storefront_single_post_bottom' );
    
	?>

</div><!-- #post-## -->