<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
            <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
<?php get_footer(); ?>