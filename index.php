<?php
get_header();
?>

<main class="site-main">

	<!-- Home Hero Section -->
	<section class="hero-section">
		<div class="hero-card-wrapper">

			<!-- Clipped Hero Background Card -->
			<div class="hero-card">


			<!-- Bottom Left Headline -->
			<div class="hero-content">

				<h1 class="hero-title text-display">
					<span class="text-white">CREATING BRAND</span><br>
					<span class="text-accent">EXPERIENCES</span> <span class="text-white">THAT</span><br>
					<span class="text-white">PEOPLE</span> <span class="text-accent">REMEMBER.</span>
				</h1>
			</div>

		</div> <!-- End .hero-card -->

		<!-- Bottom Right Description & CTA Card (Positioned in bottom-right notch outside clipped card) -->
		<div class="hero-bottom-card rounded-lg-tl">
			<p class="hero-description text-md">
				From events and activations to branding and marketing, we create experiences that leave a lasting impact.
			</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-project rounded-full">
				<span>START A PROJECT</span>

				<span class="btn-arrow rounded-full flex-center">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
						<line x1="5" y1="12" x2="19" y2="12"></line>
						<polyline points="12 5 19 12 12 19"></polyline>
					</svg>
				</span>
			</a>
		</div>

	</div> <!-- End .hero-card-wrapper -->
	</section>



    <!-- Brand Logos Marquee Section -->
	<section class="marquee-section">
		<div class="marquee-container">
			<div class="marquee-track">
				<div class="marquee-content">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/glenmark.svg' ); ?>" alt="Glenmark" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/hp.svg' ); ?>" alt="HP" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/cisco.svg' ); ?>" alt="Cisco" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/samsung.svg' ); ?>" alt="Samsung" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/siemens.svg' ); ?>" alt="Siemens" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/colgate.svg' ); ?>" alt="Colgate" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/bigbasket.svg' ); ?>" alt="BigBasket" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/tvs.svg' ); ?>" alt="TVS" class="marquee-logo">
				</div>
				<div class="marquee-content" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/glenmark.svg' ); ?>" alt="Glenmark" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/hp.svg' ); ?>" alt="HP" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/cisco.svg' ); ?>" alt="Cisco" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/samsung.svg' ); ?>" alt="Samsung" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/siemens.svg' ); ?>" alt="Siemens" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/colgate.svg' ); ?>" alt="Colgate" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/bigbasket.svg' ); ?>" alt="BigBasket" class="marquee-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/tvs.svg' ); ?>" alt="TVS" class="marquee-logo">
				</div>
			</div>
		</div>
	</section>

	



	<!-- About Section (Pinned Dual-Slide Section) -->
	<section class="about-section" id="about">
		<div class="about-sticky-wrapper">

			<!-- Slide 1: Original Brand Statement & Floating Assets -->
			<div class="about-slide slide-1">
				<!-- Floating Image 1 (Bottom Left) -->
				<div class="about-float-img float-img-left">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about floating image 1.png' ); ?>" alt="Wheelhouse Event Execution" class="about-img rounded-md">
				</div>

				<!-- Floating Image 2 (Top Right) -->
				<div class="about-float-img float-img-right">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about floating image 2.png' ); ?>" alt="Wheelhouse Corporate Event" class="about-img rounded-md">
				</div>



				<div class="about-container">
    				<!-- Floating Pills -->
				<div class="float-pill pill-1 rounded-full text-sm">MARKETING CAMPAIGNS</div>
				<div class="float-pill pill-2 rounded-full text-sm">CORPORATE EVENTS</div>
				<div class="float-pill pill-3 rounded-full text-sm">DISPLAY SOLUTIONS</div>
				<div class="float-pill pill-4 rounded-full text-sm">BRANDING & ACTIVATIONS</div>

					<div class="about-content">
						<h2 class="about-headline">
							WE CREATE IMPACTFUL BRAND <span class="text-green">EXPERIENCES</span> THROUGH EVENTS, BRANDING, AND MARKETING. STRATEGY, CREATIVITY, AND EXECUTION—ALL UNDER <span class="text-green">ONE ROOF.</span>
						</h2>
					</div>
				</div>
			</div>

			<!-- Slide 2: Our Impact in Numbers -->
			<div class="about-slide slide-2">
				<div class="impact-container flex-center">
					<h2 class="impact-title title-left">OUR IMPACT</h2>

					<!-- Metric Circles Cluster -->
					<div class="impact-circles-cluster">
						<!-- Top-Left Green Circle -->
						<div class="impact-circle circle-green flex-center">
							<span class="circle-val">10+</span>
							<span class="circle-label">YEARS IN BUSINESS</span>
						</div>

						<!-- Main Center Yellow Circle -->
						<div class="impact-circle circle-yellow flex-center">
							<span class="circle-val">25,000+</span>
							<span class="circle-label">PROJECT'S COMPLETED</span>
						</div>

						<!-- Bottom-Left Purple Circle -->
						<div class="impact-circle circle-purple flex-center">
							<span class="circle-val">1000+</span>
							<span class="circle-label">CLIENTS SERVED</span>
						</div>

						<!-- Bottom-Right Dark CTA Circle -->
						<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="impact-circle circle-dark flex-center">
							<span>VIEW MORE<br>ABOUT US</span>
						</a>
					</div>

					<h2 class="impact-title title-right">IN NUMBERS</h2>
				</div>
			</div>

		</div>
	</section>



	<!-- Selected Projects Section -->
	<section class="projects-section" id="work">
		<!-- Header Bar -->
		<div class="projects-header flex-between">
			<div class="projects-tag flex-center">
				<span class="tag-dot"></span>
				<span class="text-sm">SELECTED PROJECTS</span>
			</div>
			<div class="projects-years text-sm">(2013 – 2026)</div>
			<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="projects-link text-sm">See All Of Our Work</a>
		</div>

		<!-- Main Headline -->
		<div class="projects-hero flex-center">
			<h2 class="projects-title">
				<span class="text-green">EXPERIENCES</span>
				<span class="text-dark">WE'VE CREATED</span>
			</h2>
		</div>

		<!-- Projects Grid Showcase (2x2 Grid Layout queried from CPT) -->
		<div class="projects-grid-container">
			<div class="projects-grid">
				<?php
				// 1. Query projects checked with 'Homepage Settings' meta checkbox (limit to 4)
				$featured_args = array(
					'post_type'      => 'projects',
					'posts_per_page' => 4,
					'post_status'    => 'publish',
					'meta_query'     => array(
						array(
							'key'     => '_featured_on_home',
							'value'   => '1',
							'compare' => '=',
						),
					),
				);
				$home_projects_query = new WP_Query( $featured_args );

				// 2. Fallback: If no projects are checked yet, query latest 4 published projects
				if ( ! $home_projects_query->have_posts() ) {
					$fallback_args = array(
						'post_type'      => 'projects',
						'posts_per_page' => 4,
						'post_status'    => 'publish',
						'orderby'        => 'date',
						'order'          => 'DESC',
					);
					$home_projects_query = new WP_Query( $fallback_args );
				}



				if ( $home_projects_query->have_posts() ) :
					while ( $home_projects_query->have_posts() ) : $home_projects_query->the_post();
						$project = wheelhouse_get_project_card_data( get_the_ID() );

						?>
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="grid-project-card cursor-pointer">
							<div class="project-img-wrapper rounded-lg">
								<img src="<?php echo esc_url( $project['image'] ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>" class="project-img">
							</div>
							<div class="project-meta flex-between">
								<span class="project-name"><?php echo esc_html( strtoupper( $project['title'] ) ); ?></span>
								<div class="project-cat-year">
									<span class="project-category"><?php echo esc_html( $project['category'] ); ?></span>
									<span class="project-year"><?php echo esc_html( $project['year'] ); ?></span>
								</div>
							</div>
						</a>


						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>



			<!-- View All Work Section (Flex-Column Aligned to Right End of Container) -->
			<?php
			$compilation_images = array();
			$compilation_query  = new WP_Query( array(
				'post_type'      => 'projects',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			) );

			if ( $compilation_query->have_posts() ) {
				while ( $compilation_query->have_posts() ) {
					$compilation_query->the_post();
					$p_id = get_the_ID();

					// 1. Pull project gallery execution photos
					$g_ids = get_post_meta( $p_id, '_wheelhouse_project_gallery_ids', true );
					if ( ! empty( $g_ids ) ) {
						$id_arr = explode( ',', $g_ids );
						foreach ( $id_arr as $g_id ) {
							$g_id = intval( trim( $g_id ) );
							if ( $g_id > 0 ) {
								$url = wp_get_attachment_image_url( $g_id, 'full' );
								if ( $url && ! in_array( $url, $compilation_images, true ) ) {
									$compilation_images[] = $url;
								}
							}
						}
					}

					// 2. Pull featured cover photo
					$thumb = get_the_post_thumbnail_url( $p_id, 'full' );
					if ( $thumb && ! in_array( $thumb, $compilation_images, true ) ) {
						$compilation_images[] = $thumb;
					}
				}
				wp_reset_postdata();
			}

			// Randomize project gallery photos
			if ( ! empty( $compilation_images ) ) {
				shuffle( $compilation_images );
			}

			// Fallback to valid theme assets if gallery has fewer photos
			$theme_fallbacks = array(
				get_template_directory_uri() . '/assets/images/People in Conference.webp',
				get_template_directory_uri() . '/assets/images/services hero image.webp',
				get_template_directory_uri() . '/assets/images/about make moments.webp',
				get_template_directory_uri() . '/assets/images/about injoy solutions.webp',
				get_template_directory_uri() . '/assets/images/about the wheel house.webp',
			);

			foreach ( $theme_fallbacks as $fb_url ) {
				if ( count( $compilation_images ) >= 5 ) {
					break;
				}
				if ( ! in_array( $fb_url, $compilation_images, true ) ) {
					$compilation_images[] = $fb_url;
				}
			}

			$compilation_images = array_slice( $compilation_images, 0, 6 );
			$total_projects_count = wp_count_posts( 'projects' )->publish;
			?>
			<div class="projects-footer-column">
				<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="view-all-title-bar">
					<span class="view-all-text">VIEW ALL WORK <sup>(<?php echo esc_html( $total_projects_count > 0 ? $total_projects_count : 7 ); ?>)</sup></span>
					<span class="view-all-arrow">
						<?php echo file_get_contents( get_template_directory() . '/assets/svgs/fontisto_arrow-right.svg' ); ?>
					</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="view-all-preview-card rounded-lg" aria-label="View All Work Showcase Compilation">
					<div class="compilation-slideshow">
						<?php foreach ( $compilation_images as $comp_idx => $comp_img ) : ?>
							<img src="<?php echo esc_url( $comp_img ); ?>" 
							     alt="Work Compilation Showcase <?php echo esc_attr( $comp_idx + 1 ); ?>" 
							     class="mini-img compilation-img <?php echo 0 === $comp_idx ? 'active' : ''; ?>">
						<?php endforeach; ?>
					</div>
				</a>
			</div>

		</div>

	</section>

	<!-- Page Break Banner Section (100svh Viewport Height with Inverted Corner Cutout Mask) -->
	<section class="page-break-section">
		<div class="page-break-wrapper">
			<!-- Main Image Card Container -->
			<div class="page-break-card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Page%20Break.webp" alt="Page Break Background" class="page-break-bg-img">
				<div class="page-break-overlay"></div>

				<!-- Top-Right Yellow Indicator Dot -->
				<span class="page-break-dot"></span>

				<!-- Bold Yellow Headline Overlay -->
				<h2 class="page-break-title">
					WE CREATE.<br>
					WE COMMUNICATE.<br>
					WE DELIVER.
				</h2>
			</div>

			<!-- Cutout Container holding Purple CTA Button (Positioned in bottom-right SVG cutout notch) -->
			<div class="page-break-cutout-container">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="page-break-cta">
					<span class="cta-text">CONNECT WITH US</span>
					<span class="cta-icon-circle">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="#58337E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</span>
				</a>
			</div>
		</div>
	</section>


	<!-- Services Section -->
	<section class="services-section" id="services">

	<!-- Header Bar (Consistent with Selected Projects section) -->
			<div class="services-header flex-between">
				<div class="projects-tag flex-center">
					<span class="tag-dot"></span>
					<span class="text-sm">SERVICES</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="projects-link text-sm">Learn More About Our Services</a>
			</div>

		<div class="services-container">
			
			



			<!-- Main Title & Subtitle -->
			<div class="services-title-wrapper text-center">
				<h2 class="services-title text-center">WHAT ARE YOU LOOKING FOR?</h2>
				<p class="services-subtitle text-center">Choose The Right Wheelhouse Team <br> For Your Next Project.</p>
			</div>

			<!-- Three Overlapping Interactive Service Circles -->
			<div class="services-circles-wrapper">
				
				<!-- Circle 1: Green (Make Moments / Branding) -->
				<a href="<?php echo esc_url( home_url( '/services/#capabilities' ) ); ?>" class="service-circle circle-brand-green flex-center">
					
					<!-- Top-Left Yellow 3-Line Spark Burst -->
					<div class="service-spark spark-top-left">
						<svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="50" y1="24" x2="44" y2="4" stroke="#F5B81C" stroke-width="5.5" stroke-linecap="round" />
							<line x1="38" y1="38" x2="16" y2="16" stroke="#F5B81C" stroke-width="6" stroke-linecap="round" />
							<line x1="24" y1="50" x2="4" y2="44" stroke="#F5B81C" stroke-width="5.5" stroke-linecap="round" />
						</svg>
					</div>

					<div class="circle-content text-center">
						<h3 class="service-circle-name">Make Moments</h3>
						<span class="service-circle-desc">Branding</span>
					</div>
				</a>

				<!-- Circle 2: Purple (InJoy Solutions / Events) -->
				<a href="<?php echo esc_url( home_url( '/services/#capabilities' ) ); ?>" class="service-circle circle-brand-purple flex-center">
					<div class="circle-content text-center">
						<h3 class="service-circle-name">InJoy Solutions</h3>
						<span class="service-circle-desc">Events</span>
					</div>
				</a>

				<!-- Circle 3: Yellow (Wheelhouse / Full Service) -->
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-circle circle-brand-yellow flex-center">
					
					<!-- Bottom-Right Yellow 3-Line Spark Burst -->
					<div class="service-spark spark-bottom-right">
						<svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="46" y1="20" x2="66" y2="26" stroke="#F5B81C" stroke-width="5.5" stroke-linecap="round" />
							<line x1="32" y1="32" x2="54" y2="54" stroke="#F5B81C" stroke-width="6" stroke-linecap="round" />
							<line x1="20" y1="46" x2="26" y2="66" stroke="#F5B81C" stroke-width="5.5" stroke-linecap="round" />
						</svg>
					</div>

					<div class="circle-content text-center">
						<h3 class="service-circle-name">Wheelhouse</h3>
						<span class="service-circle-desc">Full Service</span>
					</div>
				</a>

			</div>



			<!-- Footer Instruction -->
			<div class="services-footer-hint text-center">
				<span>Tap A Circle To See How We Can Help</span>
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

				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-project rounded-full testimonial-btn">
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
					
					<!-- 1. Top Person Avatar Image -->
					<div class="testimonial-person-img-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/testimonials images/AIMA.jpg' ); ?>" alt="AIMA" class="testimonial-person-img" id="testimonial-img">
					</div>


					<!-- 2. Green Main Card Block (Clipped to SVG Path) -->
					<div class="testimonial-green-card">
						
						<!-- Top Quote Area -->
						<div class="testimonial-quote-box">
							<p class="testimonial-quote" id="testimonial-quote">
								"WE ARE PROUD TO RECOGNIZE THE WHEELHOUSE FOR THEIR INVALUABLE SUPPORT DURING AIMA INDEX 2025. THEIR HANDS-ON DEDICATION MADE THEM AN ESSENTIAL PARTNER IN BRINGING THE INVESTMENT MAHA KUMBH TO LIFE."
							</p>
						</div>


						<!-- Large Slide Counter inside bottom-left block -->
						<div class="testimonial-counter" id="testimonial-counter">01/04</div>

					</div>

					<!-- 3. Author Meta (Positioned in bottom cutout notch) -->
					<div class="testimonial-author-meta">
						<h4 class="author-name" id="testimonial-name">MR. LALIT BOOB</h4>
						<span class="author-title" id="testimonial-title">PRESIDENT - AIMA</span>
					</div>

					<!-- 4. Cutout Pocket holding NEXT & PREV Buttons & Dots -->
					<div class="testimonial-next-pocket">
						<div class="testimonial-nav-btns">
							<button type="button" class="testimonial-nav-btn testimonial-next-btn" id="testimonial-next-btn">
								<span>NEXT</span>
							</button>
							<button type="button" class="testimonial-nav-btn testimonial-prev-btn" id="testimonial-prev-btn">
								<span>PREV</span>
							</button>
						</div>
						
						<!-- Indicator Dots -->
						<div class="testimonial-dots-nav">
							<span class="dot-item active" data-index="0"></span>
							<span class="dot-item" data-index="1"></span>
							<span class="dot-item" data-index="2"></span>
							<span class="dot-item" data-index="3"></span>
						</div>
					</div>


				</div>
			</div>




		</div>
	</section>

</main>



<?php
get_footer();

