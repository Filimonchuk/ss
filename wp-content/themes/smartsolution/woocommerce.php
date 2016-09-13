<?php get_header(); ?>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php print_var("woocommerce.php");?>
            <?php woocommerce_content(); ?>

        </main><!-- .site-main -->

        <!--    --><?php //get_sidebar( 'content-bottom' ); ?>

    </div><!-- .content-area -->
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
