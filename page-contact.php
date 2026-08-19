<?php
/**
 * Template Name: Contact Us Template
 * Description: Custom page template for the Contact Us page.
 *
 * @package Wheelhouse
 */

get_header();
?>

<main class="site-main page-contact-main">
	
	<!-- Contact Hero Section (Solid Brand Purple Card with Top-Left Notch) -->
	<section class="about-hero-section contact-hero-section">
		<div class="hero-card-wrapper about-hero-wrapper">

			<!-- Clipped Solid Purple Hero Card -->
			<div class="about-hero-card contact-hero-card">
				<!-- Hero Content Area -->
				<div class="about-hero-content contact-hero-content">
					<h1 class="hero-title text-display about-hero-title">
						<span class="text-white">LET'S</span> <span class="text-accent">CONNECT.</span><br>
						<span class="text-white">START A</span> <span class="text-accent">CONVERSATION.</span>
					</h1>
				</div>
			</div>

		</div>
	</section>

	<!-- Main Contact Section (Details & Form) -->
	<section class="contact-main-section">
		<div class="contact-main-container">
			
			<!-- Left Column: Contact Information -->
			<div class="contact-info-col">
				<div class="projects-tag flex-center contact-tag">
					<span class="tag-dot"></span>
					<span class="text-sm">GET IN TOUCH</span>
				</div>

				<h2 class="contact-info-heading hero-title text-display">
					WE'D <span class="text-green">LOVE</span> TO<br>
					HEAR FROM YOU.
				</h2>


				<p class="contact-info-desc text-md">
					Whether you have a question about our services, want to start a project, or just want to connect, our team is ready to help bring your vision to impact.
				</p>

				<div class="contact-details-list">
					
					<!-- Office Address -->
					<div class="contact-detail-item">
						<div class="contact-icon-box flex-center">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
								<circle cx="12" cy="10" r="3"></circle>
							</svg>
						</div>
						<div class="contact-detail-text">
							<span class="detail-label">OFFICE LOCATION</span>
							<address class="detail-value">
								The Wheel House,<br>
								Jyoti Kalash Apartment, Jaibhavani Road,<br>
								Opp Suman Hospital, Nashik, Maharashtra 422101
							</address>
						</div>
					</div>

					<!-- Email Address -->
					<div class="contact-detail-item">
						<div class="contact-icon-box flex-center">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
								<polyline points="22,6 12,13 2,6"></polyline>
							</svg>
						</div>
						<div class="contact-detail-text">
							<span class="detail-label">EMAIL US</span>
							<a href="mailto:info@thewheelhouse.in" class="detail-value detail-link">info@thewheelhouse.in</a>
						</div>
					</div>

					<!-- Phone Number -->
					<div class="contact-detail-item">
						<div class="contact-icon-box flex-center">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
							</svg>
						</div>
						<div class="contact-detail-text">
							<span class="detail-label">CALL US</span>
							<a href="tel:+918956901393" class="detail-value detail-link">+91 895 690 1393</a>
						</div>
					</div>

					<!-- Website -->
					<div class="contact-detail-item">
						<div class="contact-icon-box flex-center">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"></circle>
								<line x1="2" y1="12" x2="22" y2="12"></line>
								<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
							</svg>
						</div>
						<div class="contact-detail-text">
							<span class="detail-label">WEBSITE</span>
							<a href="https://www.thewheelhouse.in" target="_blank" rel="noopener" class="detail-value detail-link">www.thewheelhouse.in</a>
						</div>
					</div>


				</div>
			</div>

			<!-- Right Column: Interactive Contact Form -->
			<div class="contact-form-col">
				<div class="contact-form-card">
					<h3 class="form-title">SEND US A MESSAGE</h3>

					<div id="contact-form-response" class="form-response-msg" style="display:none; margin-bottom: 20px; padding: 14px 18px; border-radius: 12px; font-weight: 600; font-size: 0.95rem; line-height: 1.5;"></div>

					<form action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post" class="contact-form" id="contact-form">
						<input type="hidden" name="action" value="wheelhouse_submit_contact">
						<?php wp_nonce_field( 'wheelhouse_contact_nonce', 'contact_nonce' ); ?>

						
						<!-- Full Name -->
						<div class="form-group">
							<label for="contact-name" class="form-label">YOUR NAME *</label>
							<input type="text" id="contact-name" name="name" class="form-input" placeholder="e.g. John Doe" required>
						</div>

						<!-- Email & Phone Row -->
						<div class="form-row">
							<div class="form-group">
								<label for="contact-email" class="form-label">EMAIL ADDRESS *</label>
								<input type="email" id="contact-email" name="email" class="form-input" placeholder="john@example.com" required>
							</div>

							<div class="form-group">
								<label for="contact-phone" class="form-label">PHONE NUMBER</label>
								<input type="tel" id="contact-phone" name="phone" class="form-input" placeholder="+91 98765 43210">
							</div>
						</div>

						<!-- Service Interest Selector -->
						<div class="form-group">
							<label class="form-label">SERVICES NEEDED</label>
							<div class="service-pills-selector">
								<label class="service-pill-item">
									<input type="checkbox" name="services[]" value="Events & Experiences">
									<span>Events & Experiences</span>
								</label>
								<label class="service-pill-item">
									<input type="checkbox" name="services[]" value="Branding & Displays">
									<span>Branding & Displays</span>
								</label>
								<label class="service-pill-item">
									<input type="checkbox" name="services[]" value="Media & Strategy">
									<span>Media & Strategy</span>
								</label>
							</div>
						</div>

						<!-- Message Field -->
						<div class="form-group">
							<label for="contact-message" class="form-label">YOUR MESSAGE *</label>
							<textarea id="contact-message" name="message" class="form-input form-textarea" rows="5" placeholder="Tell us about your project or inquiry..." required></textarea>
						</div>

						<!-- Submit Button -->
						<button type="submit" class="btn-project rounded-full btn-submit-contact">
							<span>SEND MESSAGE</span>
							<span class="btn-arrow rounded-full flex-center">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg>
							</span>
						</button>

					</form>
				</div>
			</div>

		</div>
	</section>


	<!-- Google Maps Section -->
	<section class="contact-map-section">
		<div class="contact-map-container">
			
			<!-- Map Wrapper Frame -->
			<div class="map-frame-wrapper">
				<iframe 
					src="https://maps.google.com/maps?q=Jyoti+Kalash+Apartment,+Jaibhavani+Road,+Opp+Suman+Hospital,+Nashik,+Maharashtra+422101&t=&z=16&ie=UTF8&iwloc=B&output=embed" 
					width="100%" 
					height="600" 
					style="border:0;" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade"
					title="The Wheelhouse Office Location Map">
				</iframe>



				<!-- Overlay Location Badge -->
				<div class="map-location-badge">
					<div class="badge-pin-icon flex-center">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
							<circle cx="12" cy="10" r="3"></circle>
						</svg>
					</div>
					<div class="badge-content">
						<h4 class="badge-title">THE WHEELHOUSE</h4>
						<p class="badge-address">Jyoti Kalash Apartment, Jaibhavani Road, Nashik</p>
					</div>
					<a href="https://maps.google.com/?q=Jyoti+Kalash+Apartment,+Jaibhavani+Road,+Opp+Suman+Hospital,+Nashik,+Maharashtra+422101" target="_blank" rel="noopener" class="btn-directions flex-center">
						<span>GET DIRECTIONS</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="7" y1="17" x2="17" y2="7"></line>
							<polyline points="7 7 17 7 17 17"></polyline>
						</svg>
					</a>
				</div>
			</div>


		</div>
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

</main>

<?php
get_footer();

