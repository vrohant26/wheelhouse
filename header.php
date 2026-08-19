<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!-- Centralized SVG ClipPath Definitions (DRY Centralized Sprite for 100% Hardware Accelerated GPU Rendering) -->
<svg width="0" height="0" style="position: absolute; pointer-events: none;">
	<defs>
		<!-- 1. Hero Card Desktop -->
		<clipPath id="hero-card-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.22 0
				L 0.96 0
				A 0.026 0.0535 0 0 1 1.00 0.0535
				L 1.00 0.65
				A 0.026 0.0535 0 0 1 0.974 0.7035
				L 0.70 0.7035
				A 0.026 0.0535 0 0 0 0.674 0.757
				L 0.674 0.9465
				A 0.026 0.0535 0 0 1 0.648 1.00
				L 0.026 1.00
				A 0.026 0.0535 0 0 1 0.00 0.9465
				L 0.00 0.25
				A 0.026 0.0535 0 0 1 0.026 0.1965
				L 0.16 0.1965
				A 0.026 0.0535 0 0 0 0.186 0.143
				L 0.186 0.0535
				A 0.026 0.0535 0 0 1 0.212 0
				Z
			" />
		</clipPath>

		<!-- 2. Hero Card Mobile -->
		<clipPath id="hero-card-mobile-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.74 0
				L 0.935 0
				A 0.065 0.038 0 0 1 1.00 0.038
				L 1.00 0.962
				A 0.065 0.038 0 0 1 0.935 1.000
				L 0.065 1.000
				A 0.065 0.038 0 0 1 0.00 0.962
				L 0.00 0.238
				A 0.065 0.038 0 0 1 0.065 0.200
				L 0.615 0.200
				A 0.065 0.038 0 0 0 0.680 0.162
				L 0.680 0.038
				A 0.065 0.038 0 0 1 0.745 0
				Z
			" />
		</clipPath>

		<!-- 3. Page Break Desktop -->
		<clipPath id="page-break-card-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.024 0
				L 0.976 0
				A 0.024 0.064 0 0 1 1.000 0.064
				L 1.000 0.73
				A 0.024 0.064 0 0 1 0.976 0.794
				L 0.624 0.794
				A 0.024 0.064 0 0 0 0.600 0.858
				L 0.600 0.936
				A 0.024 0.064 0 0 1 0.576 1.00
				L 0.024 1.00
				A 0.024 0.064 0 0 1 0.000 0.936
				L 0.000 0.064
				A 0.024 0.064 0 0 1 0.024 0
				Z
			" />
		</clipPath>

		<!-- 4. Page Break Mobile -->
		<clipPath id="page-break-card-mobile-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.065 0
				L 0.935 0
				A 0.065 0.038 0 0 1 1.00 0.038
				L 1.00 0.78
				A 0.065 0.038 0 0 1 0.935 0.818
				L 0.265 0.818
				A 0.065 0.038 0 0 0 0.200 0.856
				L 0.200 0.962
				A 0.065 0.038 0 0 1 0.135 1.00
				L 0.065 1.00
				A 0.065 0.038 0 0 1 0.00 0.962
				L 0.00 0.038
				A 0.065 0.038 0 0 1 0.065 0
			" />
		</clipPath>

		<!-- 5. Testimonial Desktop -->
		<clipPath id="testimonial-green-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.29 0
				L 0.956 0
				A 0.044 0.066 0 0 1 1.00 0.066
				L 1.00 0.514
				A 0.044 0.066 0 0 1 0.956 0.58
				L 0.404 0.58
				A 0.044 0.066 0 0 0 0.36 0.646
				L 0.36 0.934
				A 0.044 0.066 0 0 1 0.316 1.00
				L 0.044 1.00
				A 0.044 0.066 0 0 1 0.00 0.934
				L 0.00 0.486
				A 0.044 0.066 0 0 1 0.044 0.42
				L 0.216 0.42
				A 0.044 0.066 0 0 0 0.26 0.354
				L 0.26 0.066
				A 0.044 0.066 0 0 1 0.304 0
				Z
			" />
		</clipPath>

		<!-- 6. Testimonial Mobile -->
		<clipPath id="testimonial-green-clip-mobile" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.38 0
				L 0.935 0
				A 0.065 0.04 0 0 1 1.00 0.04
				L 1.00 0.68
				A 0.065 0.04 0 0 1 0.935 0.72
				L 0.540 0.72
				A 0.065 0.04 0 0 0 0.475 0.76
				L 0.475 0.96
				A 0.065 0.04 0 0 1 0.410 1.00
				L 0.065 1.00
				A 0.065 0.04 0 0 1 0.00 0.96
				L 0.00 0.36
				A 0.065 0.04 0 0 1 0.065 0.32
				L 0.295 0.32
				A 0.065 0.04 0 0 0 0.360 0.28
				L 0.360 0.04
				A 0.065 0.04 0 0 1 0.425 0
				Z
			" />
		</clipPath>

		<!-- 7. Footer Yellow Desktop -->
		<clipPath id="footer-yellow-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.220, 0 
				L 0.970, 0 
				A 0.030, 0.048 0 0, 1 1, 0.048 
				L 1, 0.952 
				A 0.030, 0.048 0 0, 1 0.970, 1 
				L 0.030, 1 
				A 0.030, 0.048 0 0, 1 0, 0.952 
				L 0, 0.288 
				A 0.030, 0.048 0 0, 1 0.030, 0.240 
				L 0.160, 0.240 
				A 0.030, 0.048 0 0, 0 0.190, 0.192 
				L 0.190, 0.048 
				A 0.030, 0.048 0 0, 1 0.220, 0 
				Z
			" />
		</clipPath>

		<!-- 8. Footer Yellow Mobile -->
		<clipPath id="footer-yellow-clip-mobile" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.550 0
				L 0.935 0
				A 0.065 0.038 0 0 1 1.00 0.038
				L 1.00 0.962
				A 0.065 0.038 0 0 1 0.935 1.000
				L 0.065 1.000
				A 0.065 0.038 0 0 1 0.00 0.962
				L 0.00 0.288
				A 0.065 0.038 0 0 1 0.065 0.250
				L 0.425 0.250
				A 0.065 0.038 0 0 0 0.490 0.212
				L 0.490 0.038
				A 0.065 0.038 0 0 1 0.555 0
				Z
			" />
		<!-- 9. About / Contact / Work Hero Desktop (Perfect 70svh Notch & Radii Fit) -->
		<clipPath id="about-hero-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.250, 0 
				L 0.980, 0 
				A 0.020, 0.045 0 0, 1 1.000, 0.045 
				L 1.000, 0.955 
				A 0.020, 0.045 0 0, 1 0.980, 1.000 
				L 0.020, 1.000 
				A 0.020, 0.045 0 0, 1 0.000, 0.955 
				L 0.000, 0.315 
				A 0.020, 0.045 0 0, 1 0.020, 0.270 
				L 0.200, 0.270 
				A 0.020, 0.045 0 0, 0 0.220, 0.225 
				L 0.220, 0.045 
				A 0.020, 0.045 0 0, 1 0.240, 0 
				Z" />
		</clipPath>

		<!-- 10. About / Contact / Work Hero Mobile -->
		<clipPath id="about-hero-clip-mobile" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.580 0
				L 0.950 0
				A 0.050 0.045 0 0 1 1.000 0.045
				L 1.000 0.955
				A 0.050 0.045 0 0 1 0.950 1.000
				L 0.050 1.000
				A 0.050 0.045 0 0 1 0.000 0.955
				L 0.000 0.315
				A 0.050 0.045 0 0 1 0.050 0.270
				L 0.460 0.270
				A 0.050 0.045 0 0 0 0.510 0.225
				L 0.510 0.045
				A 0.050 0.045 0 0 1 0.560 0
				Z" />
		</clipPath>

		<!-- 11. Services Hero Desktop (100svh Notch & Radii Fit) -->
		<clipPath id="services-hero-clip" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.240, 0 
				L 0.980, 0 
				A 0.020, 0.035 0 0, 1 1.000, 0.035 
				L 1.000, 0.965 
				A 0.020, 0.035 0 0, 1 0.980, 1.000 
				L 0.020, 1.000 
				A 0.020, 0.035 0 0, 1 0.000, 0.965 
				L 0.000, 0.195 
				A 0.020, 0.035 0 0, 1 0.020, 0.160 
				L 0.190, 0.160 
				A 0.020, 0.035 0 0, 0 0.210, 0.125 
				L 0.210, 0.035 
				A 0.020, 0.035 0 0, 1 0.230, 0 
				Z" />
		</clipPath>

		<!-- 12. Services Hero Mobile -->
		<clipPath id="services-hero-clip-mobile" clipPathUnits="objectBoundingBox">
			<path d="
				M 0.580 0
				L 0.950 0
				A 0.050 0.035 0 0 1 1.000 0.035
				L 1.000 0.965
				A 0.050 0.035 0 0 1 0.950 1.000
				L 0.050 1.000
				A 0.050 0.035 0 0 1 0.000 0.965
				L 0.000 0.215
				A 0.050 0.035 0 0 1 0.050 0.180
				L 0.460 0.180
				A 0.050 0.035 0 0 0 0.510 0.145
				L 0.510 0.035
				A 0.050 0.035 0 0 1 0.560 0
				Z" />
		</clipPath>






	</defs>
</svg>



<!-- Mobile Hamburger Menu Button (Fixed root z-index 100000 on top of menu drawer) -->
<button class="mobile-menu-btn flex-center" id="mobile-menu-btn" aria-label="Toggle Mobile Menu">
	<span class="burger-line"></span>
	<span class="burger-line"></span>
</button>

<!-- Mobile Navigation Drawer Card (70vh height yellow rounded rectangle) -->
<div class="mobile-menu-drawer" id="mobile-menu-drawer">
	<div class="mobile-menu-inner flex-column flex-center">
		<nav class="mobile-menu-nav flex-column align-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-menu-link">HOME</a>
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mobile-menu-link">ABOUT</a>
			<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="mobile-menu-link">WORK</a>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="mobile-menu-link">SERVICES</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mobile-menu-link">CONTACT US</a>

		</nav>
	</div>
</div>

<!-- Global Shared Fixed Navigation Bar (Root Level Position Fixed) -->
<?php get_template_part( 'template-parts/navbar' ); ?>







