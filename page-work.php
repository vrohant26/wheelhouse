<?php
/**
 * Template Name: Work Page Template
 * Description: Custom page template for displaying Projects filtered by Branding & Events categories.
 *
 * @package Wheelhouse
 */

get_header();
?>

<main class="site-main page-work-main">
	
	<!-- Work Hero Section (Solid Brand Purple Card with Top-Left Notch) -->
	<section class="about-hero-section work-hero-section">
		<div class="hero-card-wrapper about-hero-wrapper">

			<!-- Clipped Solid Purple Hero Card -->
			<div class="about-hero-card work-hero-card">
				<!-- Hero Content Area -->
				<div class="about-hero-content work-hero-content">
					<h1 class="hero-title text-display about-hero-title">
						<span class="text-white">OUR WORK.</span><br>
						<span class="text-white">DRIVING</span> <span class="text-accent">IMPACT.</span>
					</h1>
				</div>
			</div>

		</div>
	</section>

	<!-- Main Work Projects Showcase Section -->
	<section class="work-showcase-section">
		<div class="work-showcase-container">
			
			<!-- Section Top Header & Category Filter Tabs -->
			<div class="work-header-box flex-between align-center flex-wrap gap-md">
				<div class="work-header-left">
					<div class="projects-tag flex-center work-tag">
						<span class="tag-dot"></span>
						<span class="text-sm">PORTFOLIO</span>
					</div>
					<h2 class="work-title hero-title text-display">
						EXPLORE OUR <span class="text-purple">PROJECTS</span>
					</h2>
				</div>

				<!-- Category Filter Pill Buttons -->
				<div class="work-filter-pills flex-center">
					<button type="button" class="work-filter-btn active" data-filter="all">
						<span>ALL PROJECTS</span>
					</button>
					<button type="button" class="work-filter-btn" data-filter="branding">
						<span>BRANDING & DISPLAYS</span>
					</button>
					<button type="button" class="work-filter-btn" data-filter="events">
						<span>EVENTS & EXPERIENCES</span>
					</button>
				</div>
			</div>

			<!-- Dynamic Projects Grid Container -->
			<div class="work-projects-grid" id="work-projects-grid">
				<?php
				$args = array(
					'post_type'      => 'projects',
					'posts_per_page' => -1,
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC',
				);

				$projects_query = new WP_Query( $args );

				if ( $projects_query->have_posts() ) :
					while ( $projects_query->have_posts() ) :
						$projects_query->the_post();

						$terms = get_the_terms( get_the_ID(), 'project_service' );
						$term_slugs_arr = array();

						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
							foreach ( $terms as $term ) {
								$term_slugs_arr[] = strtolower( $term->slug );
							}
						}

						$category_filter_class = implode( ' ', $term_slugs_arr );
						$project = wheelhouse_get_project_card_data( get_the_ID() );
						$filter_class = ! empty( $category_filter_class ) ? $category_filter_class : $project['category_slug'];

						?>


						<!-- Project Card Item -->
						<article class="work-project-card project-item <?php echo esc_attr( $filter_class ); ?>" data-category="<?php echo esc_attr( $filter_class ); ?>">
							<a href="<?php echo esc_url( get_permalink() ); ?>" class="work-card-media-box">
								<img src="<?php echo esc_url( $project['image'] ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>" class="work-card-img" loading="lazy">
								<div class="work-card-overlay flex-column justify-between">
									<span class="work-card-category-pill"><?php echo esc_html( $project['category'] ); ?></span>
									
									<span class="btn-project rounded-full work-card-btn">
										<span>VIEW PROJECT</span>
										<span class="btn-arrow rounded-full flex-center">
											<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
												<line x1="5" y1="12" x2="19" y2="12"></line>
												<polyline points="12 5 19 12 12 19"></polyline>
											</svg>
										</span>
									</span>
								</div>
							</a>

							<div class="work-card-body">
								<div class="work-card-meta flex-between align-center">
									<span class="work-card-date flex-center">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
											<line x1="16" y1="2" x2="16" y2="6"></line>
											<line x1="8" y1="2" x2="8" y2="6"></line>
											<line x1="3" y1="10" x2="21" y2="10"></line>
										</svg>
										<?php echo esc_html( $project['year'] ); ?>
									</span>
									<span class="work-card-cat"><?php echo esc_html( $project['category'] ); ?></span>
								</div>
								<h3 class="work-card-title">
									<a href="<?php echo esc_url( get_permalink() ); ?>" style="color: inherit; text-decoration: none;">
										<?php echo esc_html( strtoupper( $project['title'] ) ); ?>
									</a>
								</h3>
								<p class="work-card-excerpt"><?php echo esc_html( $project['card_summary'] ); ?></p>
							</div>
						</article>


					<?php
					endwhile;
					wp_reset_postdata();
				else :
					// Fallback / Demonstration Projects when CPT posts are not added yet
					$fallback_projects = array(
						array(
							'title'    => 'AIMA INDEX 2025 MAHA KUMBH',
							'category' => 'events',
							'label'    => 'EVENTS & EXPERIENCES',
							'excerpt'  => 'Planned and executed corporate activation and ground experiences.',
							'image'    => '/assets/images/people in conference.webp',
							'date'     => '2025',
						),
						array(
							'title'    => 'MAKE MOMENTS RETAIL BRANDING',
							'category' => 'branding',
							'label'    => 'BRANDING & DISPLAYS',
							'excerpt'  => 'Custom spatial branding, premium POSM kiosks, and displays.',
							'image'    => '/assets/images/about make moments.webp',
							'date'     => '2024',
						),
						array(
							'title'    => 'INJOY CORPORATE ACTIVATION & MICE',
							'category' => 'events',
							'label'    => 'EVENTS & EXPERIENCES',
							'excerpt'  => 'End-to-end corporate event strategy and brand activations.',
							'image'    => '/assets/images/about injoy solutions.webp',
							'date'     => '2024',
						),
						array(
							'title'    => 'THE WHEELHOUSE EXHIBITION PAVILION',
							'category' => 'branding',
							'label'    => 'BRANDING & DISPLAYS',
							'excerpt'  => 'Architectural exhibition booth design and illuminated signage.',
							'image'    => '/assets/images/about the wheel house.webp',
							'date'     => '2025',
						),
					);

					foreach ( $fallback_projects as $item ) :
						?>
						<article class="work-project-card project-item <?php echo esc_attr( $item['category'] ); ?>" data-category="<?php echo esc_attr( $item['category'] ); ?>">
							<div class="work-card-media-box">
								<img src="<?php echo esc_url( get_template_directory_uri() . $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="work-card-img" loading="lazy">
								<div class="work-card-overlay flex-column justify-between">
									<span class="work-card-category-pill"><?php echo esc_html( $item['label'] ); ?></span>
									
									<button type="button" class="btn-project rounded-full work-card-btn js-open-project-modal"
										data-title="<?php echo esc_attr( $item['title'] ); ?>"
										data-category="<?php echo esc_attr( $item['label'] ); ?>"
										data-date="<?php echo esc_attr( $item['date'] ); ?>"
										data-image="<?php echo esc_url( get_template_directory_uri() . $item['image'] ); ?>"
										data-description="<?php echo esc_attr( $item['excerpt'] ); ?>">
										<span>VIEW PROJECT</span>
										<span class="btn-arrow rounded-full flex-center">
											<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
												<line x1="5" y1="12" x2="19" y2="12"></line>
												<polyline points="12 5 19 12 12 19"></polyline>
											</svg>
										</span>
									</button>
								</div>
							</div>

							<div class="work-card-body">
								<div class="work-card-meta flex-between align-center">
									<span class="work-card-date flex-center">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
											<line x1="16" y1="2" x2="16" y2="6"></line>
											<line x1="8" y1="2" x2="8" y2="6"></line>
											<line x1="3" y1="10" x2="21" y2="10"></line>
										</svg>
										<span><?php echo esc_html( $item['date'] ); ?></span>
									</span>
								</div>
								<h3 class="work-card-title"><?php echo esc_html( $item['title'] ); ?></h3>
								<p class="work-card-excerpt"><?php echo esc_html( wp_trim_words( $item['excerpt'], 10, '...' ) ); ?></p>
							</div>
						</article>

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


