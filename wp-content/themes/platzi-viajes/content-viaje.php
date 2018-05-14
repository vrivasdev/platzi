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
    <headerclass="entry-header">
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
    <aside class="entry-meta">

     <?phpif ( 'post' == get_post_type() ):?>
     	<div class="vcard author">
        <?php
          echo get_avatar( get_the_author_meta( 'ID' ), 128 );
          echo'<div class="label">' . esc_attr( __( 'Written by', 'storefront' ) ) . '</div>';
          echo sprintf( '<a href="%1$s" class="url fn" rel="author">%2$s</a>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author() );
        ?>
      </div>

      <?php
      /* translators: used between list items, there is a space after the comma */
      $categories_list = get_the_category_list( __( ', ', 'storefront' ) ); ?>
      <?phpif ( $categories_list ):?>
        <div class="cat-links">
          <?php
            echo'<div class="label">' . esc_attr( __( 'Posted in', 'storefront' ) ) . '</div>';
            echo wp_kses_post( $categories_list );
          ?>
        </div>
      <?phpendif; // End if categories. ?>

      <?php
      /* translators: used between list items, there is a space after the comma */
      $tags_list = get_the_tag_list( '', __( ', ', 'storefront' ) );?>

      <?phpif ( $tags_list ) : ?>
        <div class="tags-links">
          <?php
            echo'<div class="label">' . esc_attr( __( 'Tagged', 'storefront' ) ) . '</div>';
            echo wp_kses_post( $tags_list );
          ?>
        </div>
      <?phpendif; // End if $tags_list. ?>

 	 <?phpendif; // end if post ?> 


 	 <?phpif ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        <div class="comments-link">
          <?php echo'<div class="label">' . esc_attr( __( 'Comments', 'storefront' ) ) . '</div>'; ?>
          <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'storefront' ), __( '1 Comment', 'storefront' ), __( '% Comments', 'storefront' ) ); ?></span>
        </div>
      <?phpendif; ?>

    </aside>
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
    $campos_viaje = get_post_custom( $post_id );
  		 //var_dump($campos_viaje);
    ?>
      <div class="campos_viaje">
    		<div class="campo_viaje">
    			<div class="viaje_label">
    				<strong>Destino: &nbsp;</strong>
    			</div>
    			<div class="viaje_valor">
    				<?php echo $campos_viaje['destino'][0]; ?>
    			</div>
    		</div>
    		<div class="campo_viaje">
    			<div class="viaje_label">
    				<strong>Vacunas obligatorias: &nbsp;</strong>
    			</div>
    			<div class="viaje_valor">
    				<?php echo $campos_viaje['vacunas_obligatorias'][0]; ?>
    			</div>
    		</div>
    		<div class="campo_viaje">
    			<div class="viaje_label">
    				<strong>Vacunas Recomendadas: &nbsp;</strong>
    			</div>
    			<div class="viaje_valor">
    				<?php echo $campos_viaje['vacunas_recomendadas'][0]; ?>
    			</div>
    		</div>
    		<div class="campo_viaje">
    			<div class="viaje_label">
    				<strong>Peligrosidad: &nbsp;</strong>
    			</div>
    			<div class="viaje_valor">
    				<?php echo $campos_viaje['peligrosidad'][0]; ?>
    			</div>
    		</div>
    		<div class="campo_viaje">
    			<div class="viaje_label">
    				<strong>Moneda Local: &nbsp;</strong>
    			</div>
    			<div class="viaje_valor">
    				<?php echo $campos_viaje['moneda_local'][0]; ?>
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