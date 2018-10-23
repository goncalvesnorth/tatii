<?php
get_header();
$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
}
?>
<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
        <?php /* The loop */ ?>
        <?php if(have_posts()){ while ( have_posts() ) { the_post(); ?>
        <?php get_template_part( 'post-templates/content', get_post_format() ); ?>
        <div class="p-3 mb-4 bg-white border-radius post-navigation">
            <?php zee_post_nav(); ?>
        </div>
        <div class="p-5 bg-white border-radius">
            <h3 class="text-center font-weight-light mb-3">
                Alguma dúvida? Deixe seu comentário!
            </h3>
            <?php disqus_embed('blogdatatii'); ?>
        </div>
        
        <?php } } ?>
    </div><!--/#content -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer();