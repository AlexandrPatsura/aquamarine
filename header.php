<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags always come first -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php wp_title('|',true,'right'); ?>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="test__body-wrapper">

    <div class="test__loader">
      <div class="test__loader-inner"></div>
    </div>

    <div class="test__nav-to-top">
      <a href="#">
        <i class="fa fa-hand-o-up fa-2x" aria-hidden="true"></i>
      </a>
    </div>

    <header>
      <div class="test__header-wrapper">
        <div class="test__header-wrapper-bg">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-sm-4 col-md-3 test__logo">
                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
              </div>
              <div class="col-xs-6 col-sm-8 col-md-9 test__menu">
                <div class="test__toggle-menu">
                  <span class="sandwich">
                    <span class="top"></span>
                    <span class="center"></span>
                    <span class="bottom"></span>
                  </span>
                </div>
                <nav class="test__header-menu">
                  <?php wp_nav_menu( array(
                    'theme_location'	=> 'test_header_menu',
                    ) ); ?>
                  </nav>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 test__header-center-text">
                  <h1 class="test__header-center-title"><?php bloginfo( 'name' ); ?></h1>
                  <p class="test__header-center-description"><?php bloginfo( 'description' ); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <main>