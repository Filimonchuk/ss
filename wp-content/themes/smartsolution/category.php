<?php

get_header();

echo '<pre>';
echo "category.php";
echo '</pre>';
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php woocommerce_content(); ?>

        </main><!-- .site-main -->

        <!--	--><?php //get_sidebar( 'content-bottom' ); ?>

    </div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>