<?php if(!is_page()) { ?>
</div><!--/#primary-->
</div><!--/.col-lg-12-->
</div><!--/.row-->
</div><!--/.container.-->
</section><!--/#main-->
<?php } ?>

<footer class="footer p-5 bg-transparent">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="p-3 bg-white">
            <div class="d-flex">
                <div class="mx-auto justify-content-center">
                    <img src="https://blogdatatii.com.br/wp-content/uploads/2018/10/blog-da-tatii.png" width="130px;" alt="Blog da Tatii">
                </div>
            </div>
        </div>
      </div>
      <div class="col-lg-12 text-center">
        <div class="bg-white">
            <div class="d-flex">
                <div class="mx-auto justify-content-center">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-dark">

    
      <div class="container" >
  

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
          )
        ); ?>
        
      <?php if ( 'container' == $container ) : ?>
      </div><!-- .container -->
      <?php endif; ?>

    </nav><!-- .site-navigation -->
                </div>
            </div>
        </div>
      </div>
      <div class="col-lg-12 text-center">
        <div class="p-3">
          <small>
            © 2018 Blog da Tatii - Um blog concebido pela <a href="https://agencianorth.com/" title="Desenvolvimento Web de alta performance!" target="_blank">North</a>.
          </small>
        </div>
      </div>
    </div>
  </div>
</footer><!--/#footer-->

  <?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
    </div><!--/#boxed-->
  <?php } ?>

<?php google_analytics();?>

<?php wp_footer(); ?>

</body>
</html>