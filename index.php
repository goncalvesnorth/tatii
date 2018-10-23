<?php get_header();

$col= 'col-lg-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-lg-9';
}
?>

<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
        <?php if ( have_posts() ) { ?>

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) { the_post(); ?>
        <?php get_template_part( 'post-templates/content', get_post_format() ); ?>
        <?php } ?>
        <div class="p-3 bg-white border-radius mb-4">
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
<?php get_footer();