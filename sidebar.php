<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
    <div class="col-lg-3 col-md-12 bg-white border-radius" role="complementary">
        <div class="sidebar-inner">
            <aside class="widget-area">
                <?php dynamic_sidebar( 'sidebar' ); ?>
            </aside>
        </div>
    </div>
<?php }