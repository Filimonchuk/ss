<?php

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<div class="container">
	<?php
	print_var("page.php");
	?>
</div>

	</main><!-- .site-main -->

<!--	--><?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
