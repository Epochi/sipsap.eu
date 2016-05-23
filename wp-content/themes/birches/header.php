<?php
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
		<?php wp_head(); ?>
	</head>
<body  <?php body_class(); ?>>
	<nav  class="navbar navbar-default remove_border navbar-remove-margin">
	  <div class="container-fluid header-color">
        <div class="navbar-header sip-sap-logo">
            <button type="button" class="navbar-toggle collapsed menu_icon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon_line_inside"></span>
                <span class="icon-bar icon_line_inside"></span>
                <span class="icon-bar icon_line_inside"></span>
            </button>
            <a class="navbar-brand menu_height" href="<?php echo get_home_url(); ?>">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/lt_eko_logo.jpg" alt=""/>
            </a>
            <a class="brand2 menu_height hidden-xs" href="<?php echo get_home_url(); ?>">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/sip_sap_logo.jpg" alt=""/>
            </a>
        </div>
      <?php wp_nav_menu( array( 
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'bs-example-navbar-collapse-1',
      'menu_class' => 'nav navbar-nav navbar-right',
      'menu_id'  => 'menu-menu-1'
      ) ); ?>
    </div>
    	  
	  

	</nav>
	