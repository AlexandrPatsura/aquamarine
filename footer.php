</main>

<footer>
  <div class="test__footer-wrapper">
    <div class="test__footer-main">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2 test__logo">
            <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 test__footer-about">
            <h1>WE'RE A LOS ANGELES BASED STUDIO THAT LOVES TO TELL STORIES!</h1>
            <p>
              Cotton Love Studios is the home to a team of creatives who work with both cinematography and photography and they thrive from the inspiration that they get from working with both mediums.
            </p>
            <p>
              We love working with people, and for us, there's nothing more awesome than telling stories through the unique emotions and personalities that our clients have. Documenting real and genuine stories with our cameras is what we do best.
            </p>
            <p>
              Our local coverage area includes Los Angeles and Orange County. We regularly travel to San Francisco, Napa, and San Diego. Please feel free to inquire about destination weddings because we love to travel!
            </p>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 test__footer-menu">
            <nav>
              <?php wp_nav_menu( array(
                'theme_location'  => 'test_header_menu',
                ) ); ?>
              </nav>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 test__footer-contact">
              <address>
                <ul>
                  <li>69000, zaporozhye</li>
                  <li>address st. 12/99</li>
                  <li><a href="tel:+380000000000">+38 000 - 000 - 00 - 00</a></li>
                  <li><a href="tel:+380000000000">+38 000 - 000 - 00 - 00</a></li>
                  <li><a href="mailto:mail@gmail.com">mail@gmail.com</a></li>
                </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
      <div class="test__footer-basement">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 test__powered">
              <p>Create by <a href="http://alexandrpatsura.comli.com">alexandr patsura</a></p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 test__copyright">
              <p>&copy <?php echo date('Y'); ?></p>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 test__social">
              <div class="test__social-btn">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </div>
              <div class="test__social-btn">
                <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
              </div>
              <div class="test__social-btn">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>