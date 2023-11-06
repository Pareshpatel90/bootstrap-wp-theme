<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,300;9..40,400;9..40,600;9..40,700&family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main">
<nav class="px-0 highlight border-bottom p-2 navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand p-0 m-0" href="<?php echo site_url();?>"><img class="header-logo" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="<?php echo bloginfo();?>-logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
          wp_nav_menu( array(
            'menu'              => 'primary',
            'depth'             => 2,
            'container'         => '',
            'container_class'   => '',
            'menu_class'        => 'navbar-nav m-auto',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
      ?>
      <?php 
      get_template_part('parts/search','header');
      ?>
    </div>
  </div>
</nav>
<main id="content" role="main">
<div class="d-flex flex-column flex-md-row align-items-md-center p-5 bg-light">
  <div class="container pt-md-3 pb-md-4">
    <h1 class="bd-title mt-0 hdfont fw-bold"><?php the_archive_title();?></h1>
    <p class="bd-lead">
    <nav aria-label="breadcrumb">
    <?php custom_breadcrumb(); ?>
    </nav>
    </p>
  </div>
</div>