<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shortcode
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<!-- Google fonts css -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shortcode' ); ?></a>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="logo">
						<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Logo"></a>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="top-info d-flex align-items-center">
						<div class="icon-box">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/location.png" alt="Location">
						</div>
						<div class="icon-text">
							<h2>House Building</h2>
							<p>Mirpur 02 , Dhaka 1210</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
				<div class="top-info d-flex align-items-center">
						<div class="icon-box">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arroba.png" alt="Arroba">
						</div>
						<div class="icon-text">
							<h2>Dryerco@Mail.Com</h2>
							<p>004 384 3607</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex justify-content-end align-items-start">
					<a href="#" class="btn order-now">Order now!</a>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-12">

				<nav class="navbar navbar-expand-lg">
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<?php
						wp_nav_menu(
							array(
								'menu' => 'main-menu',
								'theme_location' => 'main-menu',
								'container_id' => 'navbarTogglerDemo03',
								'container_class' => 'collapse navbar-collapse main-menu',
								'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
								'menu_id'        => false,
								'fallback_cb' => '__return_false',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							)
						);
				?>

				<div class="search-icon">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt="Search"></a>
				</div>
				
				</nav>
			</div>
			</div>
		</div>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$shortcode_description = get_bloginfo( 'description', 'display' );
			if ( $shortcode_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $shortcode_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->
