<?php get_header(); 
$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
} 
?>
<div class="row">
    <div id="content" class="site-content <?php echo $col ?>" role="main">
        <?php if ( have_posts() ) { ?>
        <header class="page-header">
            <div class="p-5 bg-white border-radius mb-4">
                <h3 class="page-title font-weight-light"><?php printf( __( 'Buscando por: %s', ZEETEXTDOMAIN ), get_search_query() ); ?></h3>
            </div>
            
        </header>
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) { the_post(); 
            ?>
            <?php get_template_part( 'post-templates/content', 'search' ); ?>
            <?php } ?>
            <div class="p-3 bg-white border-radius">
                <div class="d-flex">
                    <div class="mx-auto justify-content-center">
                        <?php echo zee_pagination(); ?>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <?php get_template_part( 'post-templates/content', 'none' ); ?>
            <?php } ?>
        </div><!-- #content -->
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>