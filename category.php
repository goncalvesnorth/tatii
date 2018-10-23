<?php get_header(); 

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
} 

//get_template_part( 'sub', 'title' ); 

?>
<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
     <?php if ( have_posts() ) { ?>
     <header class="archive-header">
     	<div class="p-5 bg-white border-radius mb-4">
     		<h3 class="archive-title font-weight-light"><?php printf( __( 'Tudo sobre: %s', ZEETEXTDOMAIN ), single_cat_title( '', false ) ); ?></h3>
     	</div>
</header><!-- .archive-header -->
<?php /* The loop */ ?>
<?php while ( have_posts() ) { the_post(); ?>
<?php get_template_part( 'post-templates/content-category', get_post_format() ); ?>
<?php } ?>

		<div class="p-3 bg-white border-radius">
            <div class="d-flex">
                <div class="mx-auto justify-content-center">
                    <?php echo zee_pagination(); ?>
                </div>
            </div>
        </div>
<?php } else { ?>
<?php get_template_part( 'post-templates/content-category', 'none' ); ?>
<?php } ?>
</div><!-- #content -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>