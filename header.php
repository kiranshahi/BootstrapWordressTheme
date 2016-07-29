<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<title><?php bloginfo('name'); ?></title>
			<?php wp_head(); ?>
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		    <!--[if lt IE 9]>
		        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		    <![endif]-->
		</head>
		<body <?php body_class(); ?>>


			<!-- Navigation -->
			    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
			        <div class="container-fluid">
			            <!-- Brand and toggle get grouped for better mobile display -->
			            <div class="navbar-header page-scroll">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                    <span class="sr-only">Toggle navigation</span>
			                    Menu <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			            </div>

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			                
			                <!--<ul class="nav navbar-nav navbar-right">-->

			                     <?php
						            wp_nav_menu( array(
						                'menu'              => 'primary',
						                'theme_location'    => 'primary',
						                'depth'             => 2,
						                'container'         => 'ul',
						                'container_class'   => 'collapse navbar-collapse',
						        'container_id'      => 'bs-example-navbar-collapse-1',
						                'menu_class'        => 'nav navbar-nav navbar-right',
						                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						                'walker'            => new wp_bootstrap_navwalker())
						            );
						        ?>
			               
			            </div>
			            <!-- /.navbar-collapse -->
			        </div>
			        <!-- /.container -->
			    </nav>