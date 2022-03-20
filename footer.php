<footer class="footer">
    <div class="footer__inner footerIn">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footerIn__logo"><img src="<?php echo get_template_directory_uri() ?>/images/common/CodeUps.svg" alt="codeupsロゴ"></a>
      <nav class="footerIn__menu footerNav">

        <?php
            wp_nav_menu(
            array(
            'depth'=>1,
            'theme_location'=>'global',
            'container'=>'nav',
            'container_class'=>'footerNav',
            'menu_class'=>'footerNav__items',
            )
            );
            ?>

      </nav>

    </div>
    <p class="copyright l-inner">© 2021 CodeUps Inc.</p>

  </footer> 
  <p class="pagetop"><a href="#" class="pagetop__btn"></a></p>
  <?php wp_footer(); ?>
</body>

</div>

</html>
