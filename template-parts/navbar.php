<?php
/**
 * Template Part: Shared Navigation Bar (Logo Badge + Nav Pill)
 *
 * @package Wheelhouse
 */

$is_home = is_front_page() || is_home();
$is_about = is_page( 'about' ) || is_page_template( 'page-about.php' );
$is_work = is_page( 'work' ) || is_page_template( 'page-work.php' ) || is_post_type_archive( 'projects' );
$is_services = is_page( 'services' ) || is_page_template( 'page-services.php' );
$is_contact = is_page( 'contact' ) || is_page_template( 'page-contact.php' );
?>

<!-- Top Left Logo Badge (Positioned in top-left cutout notch outside clipped card) -->
<div class="hero-logo-badge">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link flex-center">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="hero-logo-img">
	</a>
</div>

<!-- Top Right Header Navigation -->
<header class="site-header">
	<div class="hero-nav-container flex-center">
		<nav class="hero-nav-pill rounded-full flex-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hero-nav-link text-sm rounded-full <?php echo $is_home ? 'active' : ''; ?>">Home</a>
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="hero-nav-link text-sm rounded-full <?php echo $is_about ? 'active' : ''; ?>">About</a>
			<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="hero-nav-link text-sm rounded-full <?php echo $is_work ? 'active' : ''; ?>">Work</a>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="hero-nav-link text-sm rounded-full <?php echo $is_services ? 'active' : ''; ?>">Services</a>
		</nav>


		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-contact text-sm rounded-full flex-center <?php echo $is_contact ? 'active' : ''; ?>">Contact Us</a>
	</div>
</header>

