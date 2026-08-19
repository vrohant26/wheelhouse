<?php
/**
 * Template Name: About Page Template
 * Description: Custom page template for the About page.
 *
 * @package Wheelhouse
 */

get_header();
?>

<main class="site-main page-about-main">
	
	<!-- About Hero Section (100svh height, solid brand purple, top-left cutout notch) -->
	<section class="about-hero-section">
		<div class="hero-card-wrapper about-hero-wrapper">

			<!-- Clipped Solid Purple Hero Card -->
			<div class="about-hero-card">
				<!-- Hero Content Area -->
				<div class="about-hero-content">
					<h1 class="hero-title text-display about-hero-title">
						<span class="text-white">WE</span> <span class="text-accent">CREATE.</span><br>
						<span class="text-white">WE</span> <span class="text-accent">COMMUNICATE.</span><br>
						<span class="text-white">WE</span> <span class="text-accent">DELIVER.</span>
					</h1>
				</div>
			</div>


		</div>
	</section>

	<!-- About Grid Layout Section (4 Columns x 2 Rows) -->
	<section class="about-grid-section">
		<div class="about-grid-container">
			
			<!-- Row 1, Col 1: Asset Slot 1 (The Wheelhouse) -->
			<div class="about-grid-item item-wheelhouse">
				<div class="about-asset-box flex-center">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about the wheel house.webp' ); ?>" alt="The Wheelhouse" class="about-asset-img">
				</div>
				<h4 class="about-asset-label">The Wheelhouse</h4>
				<p class="about-asset-subtext">Parent Company</p>
			</div>

			<!-- Row 1, Col 2: About Us Heading -->
			<div class="about-grid-item about-grid-heading-item item-heading">
				<h2 class="about-grid-heading">Built on <span class="text-green">Trust.</span> Driven by <span class="text-green">Excellence.</span></h2>
			</div>

			<!-- Row 1, Col 3: Asset Slot 2 (Make Moments) -->
			<div class="about-grid-item item-moments">
				<div class="about-asset-box flex-center">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about make moments.webp' ); ?>" alt="Make Moments" class="about-asset-img">
				</div>
				<h4 class="about-asset-label">Make Moments</h4>
				<p class="about-asset-subtext">Branding & Display Solutions</p>
			</div>

			<!-- Row 1, Col 4: Asset Slot 3 (10+ Years) -->
			<div class="about-grid-item item-years">
				<div class="about-asset-box flex-center">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about 10 years.webp' ); ?>" alt="10+ Years" class="about-asset-img">
				</div>
				<h4 class="about-asset-label">10+ Years</h4>
				<p class="about-asset-subtext">Excellence & Trust</p>
			</div>

			<!-- Row 2, Col 1: Empty Spacer -->
			<div class="about-grid-item about-grid-empty"></div>

			<!-- Row 2, Col 2: Asset Slot 4 (Injoy Solutions) -->
			<div class="about-grid-item item-injoy">
				<div class="about-asset-box flex-center">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about injoy solutions.webp' ); ?>" alt="Injoy Solutions" class="about-asset-img">
				</div>
				<h4 class="about-asset-label">Injoy Solutions</h4>
				<p class="about-asset-subtext">Events & Marketing</p>
			</div>

			<!-- Row 2, Col 3: Empty Spacer -->
			<div class="about-grid-item about-grid-empty"></div>

			<!-- Row 2, Col 4: Text Content & CTA -->
			<div class="about-grid-item about-grid-text-item item-desc flex-column justify-center">
				<p class="about-grid-desc">
				We believe great work creates lasting partnerships. Our commitment to excellence, attention to detail, and consistent delivery have earned us the trust and referrals of the brands we work with.
				</p>
				<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="btn-project rounded-full">

					<span>ALL OUR WORK</span>
					<span class="btn-arrow rounded-full flex-center">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</span>
				</a>
			</div>


		</div>
	</section>

	<!-- What We Do Section (2 Large Cards Layout) -->
	<section class="what-we-do-section">
		<div class="what-we-do-container">
			
			<!-- Top Section Header -->
			<div class="what-we-do-header">
				<div class="projects-tag flex-center what-we-do-tag">
					<span class="tag-dot"></span>
					<span class="text-sm">WHAT WE DO</span>
				</div>

				<h2 class="hero-title text-display what-we-do-title">
					WE BRING BRANDS TO LIFE THROUGH <span class="text-green">EXPERIENCES</span> AND <span class="text-green">ENVIRONMENTS.</span>
				</h2>
			</div>

			<!-- 2 Cards Grid -->
			<div class="what-we-do-grid">
				
				<!-- Card 1: Injoy Solutions (Events & Experiences) -->
				<div class="what-we-do-card card-yellow">
					<div class="card-icon-wrapper">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
						</svg>
					</div>

					<div class="card-content-bottom">
						<span class="card-company-tag">INJOY SOLUTIONS</span>
						<h3 class="card-heading">EVENTS & EXPERIENCES</h3>
						<p class="card-desc">
							We plan and execute corporate events, MICE, product launches, conferences, activations, roadshows, promotions, and other on-ground experiences that connect brands with their audiences.
						</p>
						<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="btn-project rounded-full btn-card-cta">
							<span>VIEW OUR SERVICES</span>
							<span class="btn-arrow rounded-full flex-center">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg>
							</span>
						</a>
					</div>
				</div>

				<!-- Card 2: Make Moments (Branding & Displays) -->
				<div class="what-we-do-card card-purple">

					<div class="card-icon-wrapper">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
							<polyline points="2 17 12 22 22 17"></polyline>
							<polyline points="2 12 12 17 22 12"></polyline>
						</svg>
					</div>

					<div class="card-content-bottom">
						<span class="card-company-tag">MAKE MOMENTS</span>
						<h3 class="card-heading">BRANDING & DISPLAYS</h3>
						<p class="card-desc">
							We create physical brand experiences through retail branding, displays, signage, POSM, kiosks, exhibitions, and other custom branding solutions.
						</p>
						<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="btn-project rounded-full btn-card-cta">
							<span>VIEW OUR SERVICES</span>
							<span class="btn-arrow rounded-full flex-center">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg>
							</span>
						</a>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- Metrics Section (100svh Center Layout with Image Parallax) -->
	<section class="metrics-section">
		<div class="metrics-bg-wrapper">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/People in Conference.webp' ); ?>" alt="People in Conference" class="metrics-bg-img">
			<div class="metrics-overlay"></div>
		</div>

		<div class="metrics-container flex-column flex-center">
			
			<!-- Top Center-Aligned Header -->
			<div class="metrics-header-col text-center flex-column flex-center">
				<h2 class="hero-title text-display metrics-title">
					<span class="text-yellow">THE NUMBERS</span> BEHIND THE WHEELHOUSE
				</h2>
			</div>


			<!-- Bottom Flexed Row of Metrics -->
			<div class="metrics-stats-grid">
				
				<div class="metric-item">
					<span class="metric-number">10+</span>
					<span class="metric-label">YEARS IN BUSINESS</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">25,000+</span>
					<span class="metric-label">PROJECTS COMPLETED</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">1,000+</span>
					<span class="metric-label">CLIENTS SERVED</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">20,000+</span>
					<span class="metric-label">EVENTS EXECUTED</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">5,000+</span>
					<span class="metric-label">BRANDING EXECUTED</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">180+</span>
					<span class="metric-label">CITIES COVERED</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">10</span>
					<span class="metric-label">STATES COVERED</span>
				</div>

				<div class="metric-item">
					<span class="metric-number">35+</span>
					<span class="metric-label">TEAM MEMBERS</span>
				</div>

			</div>

		</div>
	</section>

	<!-- Vision & Mission Section -->
	<section class="about-vision-mission-section">
		<div class="about-vm-container">
			
			<!-- Section Header Tag & Title -->
			<div class="about-vm-header">
				<div class="projects-tag flex-center about-vm-tag">
					<span class="tag-dot"></span>
					<span class="text-sm">OUR PURPOSE</span>
				</div>
				<h2 class="hero-title text-display about-vm-main-title">
					DRIVING IMPACT THROUGH <span class="text-green">PURPOSE</span> & <span class="text-yellow">PRECISION</span>
				</h2>
			</div>

			<!-- Two Cards Grid (Vision & Mission) -->
			<div class="about-vm-grid">
				
				<!-- Vision Card -->
				<div class="about-vm-card vision-card">
					<div class="about-vm-card-top flex-between align-center">
						<div class="about-vm-icon-box flex-center">
							<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"></circle>
								<circle cx="12" cy="12" r="6"></circle>
								<circle cx="12" cy="12" r="2"></circle>
							</svg>
						</div>
						<span class="about-vm-badge">01 / VISION</span>
					</div>

					<h3 class="hero-title text-display about-vm-card-title">OUR VISION</h3>
					<p class="about-vm-card-desc">
						To master the art of strategic communication, delivering exceptional value that empowers clients and drives growth for all stakeholders.
					</p>
				</div>

				<!-- Mission Card -->
				<div class="about-vm-card mission-card">
					<div class="about-vm-card-top flex-between align-center">
						<div class="about-vm-icon-box flex-center">
							<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
								<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
							</svg>
						</div>
						<span class="about-vm-badge">02 / MISSION</span>
					</div>

					<h3 class="hero-title text-display about-vm-card-title">OUR MISSION</h3>

					<p class="about-vm-card-desc">
						To provide seamless, 360° solutions across Event Production, Branding, and Activations, making success effortless for our clients.
					</p>
				</div>

			</div>

		</div>
	</section>

	<!-- Testimonials Section -->

	<section class="testimonial-section" id="testimonials">
		<div class="testimonial-container">
			
			<!-- Left Column: Headline & Description CTA -->
			<div class="testimonial-left">
				<div class="projects-tag flex-center testimonial-tag">
					<span class="tag-dot"></span>
					<span class="text-sm">TESTIMONIALS</span>
				</div>

				<h2 class="testimonial-title text-display">
					WHAT IT'S LIKE<br>
					WORKING WITH US
				</h2>

				<p class="testimonial-description text-md">
					Hear From The Brands We've Partnered With And The Experiences We've Helped Bring To Life.
				</p>

				<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn-project rounded-full testimonial-btn">
					<span>LEARN MORE</span>
					<span class="btn-arrow rounded-full flex-center">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</span>
				</a>
			</div>

			<!-- Right Column: Interactive Testimonial Carousel Card -->
			<div class="testimonial-right">
				<div class="testimonial-card-wrapper">
					
					<!-- Green Main Card Block -->
					<div class="testimonial-green-card">
						
						<!-- Top Quote Area -->
						<div class="testimonial-quote-box">
							<p class="testimonial-quote" id="testimonial-quote">
								"WE ARE PROUD TO RECOGNIZE THE WHEELHOUSE FOR THEIR INVALUABLE SUPPORT DURING AIMA INDEX 2025. THEIR HANDS-ON DEDICATION MADE THEM AN ESSENTIAL PARTNER IN BRINGING THE INVESTMENT MAHA KUMBH TO LIFE."
							</p>
						</div>

						<!-- Author Meta -->
						<div class="testimonial-author-meta">
							<h4 class="author-name" id="testimonial-name">MR. LALIT BOOB</h4>
							<span class="author-title" id="testimonial-title">PRESIDENT - AIMA</span>
						</div>

						<!-- Bottom Row: Counter & Nav Buttons -->
						<div class="testimonial-card-bottom">
							<div class="testimonial-counter" id="testimonial-counter">01/21</div>

							<div class="testimonial-nav-btns">
								<button type="button" class="testimonial-nav-btn testimonial-prev-btn" id="testimonial-prev-btn">
									<span>PREV</span>
								</button>
								<button type="button" class="testimonial-nav-btn testimonial-next-btn" id="testimonial-next-btn">
									<span>NEXT</span>
								</button>
							</div>
						</div>

					</div>

				</div>
			</div>


		</div>
	</section>

	<!-- Clients We Worked With Section (Filter by Industry Categories) -->
	<section class="about-clients-section" id="clients">
		<div class="about-clients-container">
			
			<!-- Section Header -->
			<div class="about-clients-header flex-column align-center text-center">
				<div class="projects-tag flex-center clients-tag">
					<span class="tag-dot"></span>
					<span class="text-sm">OUR CLIENTS & PARTNERS</span>
				</div>

				<h2 class="about-clients-title hero-title text-display">
					CLIENTS WE'VE <br> <span class="text-purple">WORKED WITH</span>
				</h2>

				<p class="about-clients-subtitle text-md">
					Trusted by Customers, Partners, and Industry Leaders Across Diverse Sectors.
				</p>
			</div>

			<!-- Industry Category Filter Pills -->
			<div class="clients-filter-pills flex-center">
				<?php
				$industries = get_terms( array(
					'taxonomy'   => 'client_industry',
					'hide_empty' => false,
				) );

				if ( ! empty( $industries ) && ! is_wp_error( $industries ) ) {
					$first = true;
					foreach ( $industries as $ind ) {
						$clean_name = wp_specialchars_decode( $ind->name, ENT_QUOTES );
						$active_cls = $first ? 'active' : '';
						echo '<button type="button" class="client-filter-btn ' . esc_attr( $active_cls ) . '" data-filter="' . esc_attr( strtolower( $ind->slug ) ) . '">';
						echo '<span>' . esc_html( strtoupper( $clean_name ) ) . '</span>';
						echo '</button>';
						$first = false;
					}
				} else {
					// Default Fallback Filter Pills
					$fallback_filters = array(
						'tech'                 => 'TECHNOLOGY & IT',
						'pharma'               => 'HEALTHCARE & PHARMA',
						'fmcg'                 => 'AUTOMOTIVE & FMCG',
						'events-entertainment' => 'EVENTS & ENTERTAINMENT',
						'retail-branding'      => 'RETAIL & BRANDING',
					);
					$first = true;
					foreach ( $fallback_filters as $f_slug => $f_name ) {
						$active_cls = $first ? 'active' : '';
						echo '<button type="button" class="client-filter-btn ' . esc_attr( $active_cls ) . '" data-filter="' . esc_attr( $f_slug ) . '">';
						echo '<span>' . esc_html( $f_name ) . '</span>';
						echo '</button>';
						$first = false;
					}
				}
				?>
			</div>



			<!-- Logo Cards Grid -->
			<div class="clients-logos-grid" id="clients-logos-grid">
				<?php
				$client_query_args = array(
					'post_type'      => 'clients',
					'posts_per_page' => -1,
					'post_status'    => 'publish',
				);

				$client_posts = new WP_Query( $client_query_args );

				if ( $client_posts->have_posts() ) :
					while ( $client_posts->have_posts() ) :
						$client_posts->the_post();

						$c_terms = get_the_terms( get_the_ID(), 'client_industry' );
						$c_slugs = array();
						if ( ! empty( $c_terms ) && ! is_wp_error( $c_terms ) ) {
							foreach ( $c_terms as $ct ) {
								$c_slugs[] = strtolower( $ct->slug );
							}
						}
						$c_filter_class = implode( ' ', $c_slugs );

						// Get uploaded logo IDs from metabox or featured image
						$logo_ids_str = get_post_meta( get_the_ID(), '_wheelhouse_client_logo_ids', true );
						$logo_ids_arr = ! empty( $logo_ids_str ) ? explode( ',', $logo_ids_str ) : array();

						if ( has_post_thumbnail() ) {
							$logo_ids_arr[] = get_post_thumbnail_id();
						}

						if ( ! empty( $logo_ids_arr ) ) {
							foreach ( $logo_ids_arr as $l_id ) {
								$l_id = intval( trim( $l_id ) );
								if ( $l_id > 0 ) {
									$logo_url = wp_get_attachment_image_url( $l_id, 'medium' );
									$logo_alt = get_post_meta( $l_id, '_wp_attachment_image_alt', true );
									if ( ! $logo_alt ) {
										$logo_alt = get_the_title();
									}
									if ( $logo_url ) :
										?>
										<div class="client-logo-card client-item <?php echo esc_attr( $c_filter_class ); ?>" data-category="<?php echo esc_attr( $c_filter_class ); ?>">
											<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $logo_alt ); ?>" class="client-brand-img" loading="lazy">
										</div>
										<?php
									endif;
								}
							}
						}
					endwhile;
					wp_reset_postdata();
				else :
					// Demonstration Client Logos Grid across all categories
					$fallback_clients = array(
						array( 'name' => 'Glenmark', 'cat' => 'pharma', 'file' => 'glenmark.svg' ),
						array( 'name' => 'HP', 'cat' => 'tech', 'file' => 'hp.svg' ),
						array( 'name' => 'Cisco', 'cat' => 'tech', 'file' => 'cisco.svg' ),
						array( 'name' => 'Samsung', 'cat' => 'tech', 'file' => 'samsung.svg' ),
						array( 'name' => 'Siemens', 'cat' => 'tech', 'file' => 'siemens.svg' ),
						array( 'name' => 'Colgate', 'cat' => 'fmcg', 'file' => 'colgate.svg' ),
						array( 'name' => 'BigBasket', 'cat' => 'retail-branding', 'file' => 'bigbasket.svg' ),
						array( 'name' => 'TVS', 'cat' => 'fmcg', 'file' => 'tvs.svg' ),
						array( 'name' => 'AIMA', 'cat' => 'events-entertainment', 'file' => 'AIMA.jpg', 'dir' => 'testimonials images/' ),
					);

					foreach ( $fallback_clients as $fc ) :
						$img_path = isset( $fc['dir'] ) ? '/assets/images/' . $fc['dir'] . $fc['file'] : '/assets/images/brands/' . $fc['file'];
						?>
						<div class="client-logo-card client-item <?php echo esc_attr( $fc['cat'] ); ?>" data-category="<?php echo esc_attr( $fc['cat'] ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() . $img_path ); ?>" alt="<?php echo esc_attr( $fc['name'] ); ?>" class="client-brand-img" loading="lazy">
						</div>
					<?php
					endforeach;
				endif;
				?>
			</div>

		</div>
	</section>

</main>

<?php
get_footer();

