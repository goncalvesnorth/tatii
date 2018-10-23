<article id="post-<?php the_ID(); ?>" class="mb-4" <?php post_class(); ?>>
    <div class="pr-5 pl-5 pt-5 pb-2">
    <header class="entry-header">

        

        <?php if ( is_single() ) { ?>
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>
        <div class="entry-meta mt-3">
            <ul class="list-inline">
                <?php if ( comments_open()) { ?>
                <li class="comments-link list-inline-item"><span class="lnr lnr-bubble"></span>
                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', ZEETEXTDOMAIN ) . '</span>', __( '0 comentários', ZEETEXTDOMAIN ), __( 'View all % comments', ZEETEXTDOMAIN ) ); ?>
                </li>
                <?php } //.comment-link ?>
                <li class="author list-inline-item"><span class="lnr lnr-user"> </span> <?php echo __('BY', ZEETEXTDOMAIN ); ?> <?php the_author(); ?></li>
                
                
                <li class="category list-inline-item"><span class="lnr lnr-pushpin"> </span> <?php echo get_the_category_list(', '); ?></li> 
                                       
            </ul>
        </div><!--/.entry-meta -->
        
        <?php } else { ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
            <sup class="featured-post"><?php _e( 'Sticky', ZEETEXTDOMAIN ) ?></sup>
            <?php } ?>
            
        </h2>
        <div class="entry-meta mt-3">
            <ul class="list-inline">
                <?php if ( comments_open()) { ?>
                <li class="comments-link list-inline-item"><span class="lnr lnr-bubble"></span>
                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', ZEETEXTDOMAIN ) . '</span>', __( '0 comentários', ZEETEXTDOMAIN ), __( 'View all % comments', ZEETEXTDOMAIN ) ); ?>
                </li>
                <?php } //.comment-link ?>
                <li class="author list-inline-item"><span class="lnr lnr-user"> </span> <?php echo __('BY', ZEETEXTDOMAIN ); ?> <?php the_author(); ?></li>
                
                
                <li class="category list-inline-item"><span class="lnr lnr-pushpin"> </span> <?php echo get_the_category_list(', '); ?></li> 
                                       
            </ul>
        </div><!--/.entry-meta -->
        <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
        <div class="entry-thumbnail mb-4">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php } //.entry-thumbnail ?>
        <?php } //.entry-title ?>

        

    </header><!--/.entry-header -->

    <?php if ( is_search() || is_home() || is_category() || is_archive() ) { ?>
    <div class="entry-summary">
        <?php 
            $content = get_the_content();
            $content = wpautop($content);
         ?>
        <?php echo substr($content, 0, 1000); echo "..."; ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block mt-2">VISUALIZAÇÃO COMPLETA <span class="meta-nav">&rarr;</span></a>
    </div>
    <?php } else { ?>
    <div class="entry-content">
        <div class="mb-4">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php the_content(); ?>
    </div>
    <?php } //.entry-content ?>

    
    <div class="like-share">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <?php echo do_shortcode('[likebtn theme="custom" icon_l_url="https://blogdatatii.com.br/wp-content/uploads/2018/10/heart.png#21" icon_d_c_v="#000000" bg_c="rgba(250,250,250,0)" bg_c_v="rgba(250,250,250,0)" brdr_c="rgba(198,198,198,0)" label_fs="r" lang="pt" dislike_enabled="0" icon_dislike_show="0" i18n_like="Curtir" ef_voting="push" white_label="1"]'); ?>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-12">
                <ul class="list-inline">
                    <li class="list-inline-item share-icon compartilhe">
                        <span class="compartilhe">COMPARTILHE:</span>
                    </li>
                    <li class="list-inline-item share-icon">
                        <?php 
                            $share = urlencode(get_permalink());
                            $share_title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
                        ?>
                        <span><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share; ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/facebook-social.png" alt=""></a></span>
                    </li>
                    <li class="list-inline-item share-icon">
                        <span><a href="whatsapp://send?text=<?php echo $share_title; echo $share; ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/whatsapp-social.png" alt=""></a></span>
                    </li>
                    <li class="list-inline-item share-icon">
                        <span><a href="https://twitter.com/intent/tweet?text=<?php echo $share_title; echo '&amp;url='; echo $share; echo '&amp;via=Blog da Tatii' ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/twitter-social.png" alt=""></a></span>
                    </li>
                    <li class="list-inline-item share-icon">
                        <span><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share; echo '&amp;title='; echo $share_title; ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/linkedin-social.png" alt=""></a></span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <img src="<?php bloginfo('template_url') ?>/assets/images/tatii-post.jpg" title="Tatii! 💕" class="tatii-mini" alt="">
            </div>
        </div>
    </div>
    
    </div>

</article><!--/#post-->
