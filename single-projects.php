<?php
/**
 * Single Project Template
 *
 * @package Wheelhouse
 */

get_header();

$project = wheelhouse_get_project_card_data( get_the_ID() );
$next_post = get_next_post();
$prev_post = get_previous_post();
?>

<main class="main-content single-project-main">
	
	<!-- Single Project Hero Section -->
	<section class="about-hero-section project-single-hero-section">
		<div class="hero-card-wrapper about-hero-wrapper">
			<div class="about-hero-card project-single-hero-card" style="background-image: linear-gradient(rgb(0 0 0 / 35%) 0%, rgb(0 0 0 / 88%) 100%), url('<?php echo esc_url( $project['image'] ); ?>') !important;">
				
				<!-- Top Bar: Back Link & Category -->
				<div class="project-single-top-bar flex-between align-center">
					<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="project-back-btn flex-center">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="19" y1="12" x2="5" y2="12"></line>
							<polyline points="12 19 5 12 12 5"></polyline>
						</svg>
						<span>BACK TO WORK</span>
					</a>

				</div>

				<!-- Hero Header Titles -->
				<div class="project-single-header-content">
					<h1 class="hero-title text-display project-single-title">
						<?php echo esc_html( strtoupper( $project['title'] ) ); ?>
					</h1>

					<?php if ( ! empty( $project['subtitle'] ) ) : ?>
						<p class="project-single-subtitle">
							<?php echo esc_html( $project['subtitle'] ); ?>
						</p>
					<?php endif; ?>

					<!-- Meta Badges Strip -->
					<div class="project-single-meta-strip flex-center">
						<div class="meta-pill flex-center">
							<span class="meta-label">YEAR</span>
							<span class="meta-val"><?php echo esc_html( $project['year'] ); ?></span>
						</div>
						<div class="meta-pill flex-center">
							<span class="meta-label">CATEGORY</span>
							<span class="meta-val"><?php echo esc_html( $project['category'] ); ?></span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- WYSIWYG Description & Rich Content Section -->
	<section class="project-single-content-section">
		<div class="container project-single-container">
			<div class="project-single-content-card">
				<div class="project-modal-rich-text single-project-rich-text">
					<?php echo wp_kses_post( $project['description'] ); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Image Gallery Grid Section (if gallery photos exist) -->
	<?php if ( ! empty( $project['gallery'] ) && is_array( $project['gallery'] ) ) : ?>
		<section class="project-single-gallery-section">
			<div class="container project-single-container">
				<div class="project-gallery-header">
					<div class="projects-tag flex-center section-tag project-gallery-tag">
						<span class="tag-dot"></span>
						<span class="text-sm">EXECUTION GALLERY</span>
					</div>
					<h2 class="hero-title text-display project-gallery-heading">PROJECT PHOTOS & HIGHLIGHTS</h2>
				</div>

				
				<div class="project-single-gallery-grid">
					<?php foreach ( $project['gallery'] as $g_url ) : ?>
						<div class="single-gallery-item">
							<img src="<?php echo esc_url( $g_url ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?> Photo" class="single-gallery-img" loading="lazy">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Single Project Bottom Navigation (Prev & Next Project Buttons) -->
	<section class="project-single-nav-section">
		<div class="container project-single-container">
			<div class="project-single-nav-bar flex-between align-center">
				<?php if ( $prev_post ) : ?>
					<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="btn-primary rounded-full project-nav-btn prev-btn">
						<span class="btn-arrow rounded-full flex-center" style="transform: rotate(180deg);">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</span>
						<span>PREVIOUS PROJECT</span>
					</a>
				<?php else : ?>
					<div></div>
				<?php endif; ?>

				<?php if ( $next_post ) : ?>
					<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="btn-primary rounded-full project-nav-btn next-btn">
						<span>NEXT PROJECT</span>
						<span class="btn-arrow rounded-full flex-center">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</span>
					</a>
				<?php else : ?>
					<div></div>
				<?php endif; ?>
			</div>
		</div>
	</section>


</main>

<?php
get_footer();
