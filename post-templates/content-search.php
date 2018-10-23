<article id="post-<?php the_ID(); ?>" class="mb-4" <?php post_class(); ?>>
    <div class="pr-5 pl-5 pt-5 pb-2">
        <div class="row">
            <a href="<?php the_permalink(); ?>">
                <div class="col-lg-4">
                    <div class="entry-thumbnail mb-3">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h6 class="text-center">
                        <?php the_title(); ?>
                    </h6>
                </div>
            </a>
        </div>
        
    </div>

</article><!--/#post-->
