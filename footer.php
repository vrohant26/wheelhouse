<?php
/**
 * Footer Template
 *
 * @package Wheelhouse
 */
?>

	<!-- Footer Section with Top-Left Cutout Notch & Logo Badge -->
	<footer class="site-footer">

		<div class="footer-layout-container">
			
			<!-- Bottom Main Yellow Footer Block -->
			<div class="footer-main-yellow-block">

				<!-- Top Left Logo Badge inside Footer Notch -->
				<div class="footer-logo-badge">
					<a href="#hero" class="footer-logo-link">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="footer-brand-logo">
					</a>
				</div>

				<div class="footer-yellow-shape">
					<div class="footer-yellow-content">
						
						<!-- Top Info Grid: Left Address & Contact + Right Menu & Connect Side-By-Side -->
						<div class="footer-grid">
							
							<!-- Left Column: Address & Contact Us Button -->
							<div class="footer-col-left">
								<address class="footer-address">
									THE WHEEL HOUSE,<br>
									JYOTI KALASH APARTMENT, JAIBHAVANI ROAD,<br>
									OPP SUMAN HOSPITAL, NASHIK, MAHARASHTRA 422101
								</address>

								<div class="footer-contact-info" style="margin-block: 1rem 1.4rem; display: flex; flex-direction: column; gap: 0.6rem;">
									<a href="tel:+918956901393" style="color: var(--color-dark); font-weight: 800; text-decoration: none; font-size: clamp(1.1rem, 1.3vw, 1.35rem); display: inline-flex; align-items: center; gap: 0.7rem;">
										<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
										+91 895 690 1393
									</a>
									<a href="mailto:info@thewheelhouse.in" style="color: var(--color-dark); font-weight: 800; text-decoration: none; font-size: clamp(1.1rem, 1.3vw, 1.35rem); display: inline-flex; align-items: center; gap: 0.7rem;">
										<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										info@thewheelhouse.in
									</a>
								</div>




								<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-project rounded-full">
									<span>CONTACT US</span>

									<span class="btn-arrow rounded-full flex-center">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
											<line x1="5" y1="12" x2="19" y2="12"></line>
											<polyline points="12 5 19 12 12 19"></polyline>
										</svg>
									</span>
								</a>

							</div>

							<!-- Right Columns: MENU and CONNECT Side-By-Side Flex Container -->
							<div class="footer-col-right flex-row">
								
								<!-- Menu Navigation Column -->
								<div class="footer-nav-col">
									<h4 class="footer-nav-header">MENU</h4>
									<ul class="footer-nav-list">
										<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
										<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">ABOUT</a></li>
										<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">SERVICES</a></li>
										<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">WORK</a></li>


										<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT</a></li>
									</ul>
								</div>



								<!-- Connect Socials Column -->
								<div class="footer-nav-col">
									<h4 class="footer-nav-header">CONNECT</h4>
									<ul class="footer-nav-list">
										<li><a href="https://instagram.com" target="_blank" rel="noopener">INSTAGRAM</a></li>
										<li><a href="https://facebook.com" target="_blank" rel="noopener">FACEBOOK</a></li>
										<li><a href="https://youtube.com" target="_blank" rel="noopener">YOUTUBE</a></li>
									</ul>
								</div>

							</div>

						</div>

						<!-- Bottom Scrolling Marquee Bar -->
						<div class="footer-marquee-bar">
							<div class="footer-marquee-track">
								<div class="footer-marquee-content">
									<span>LET'S WORK TOGETHER <span class="dot-purple">●</span> LET'S WORK TOGETHER <span class="dot-green">●</span> LET'S WORK TOGETHER <span class="dot-purple">●</span> LET'S WORK TOGETHER <span class="dot-green">●</span>&nbsp;</span>
								</div>
								<div class="footer-marquee-content">
									<span>LET'S WORK TOGETHER <span class="dot-purple">●</span> LET'S WORK TOGETHER <span class="dot-green">●</span> LET'S WORK TOGETHER <span class="dot-purple">●</span> LET'S WORK TOGETHER <span class="dot-green">●</span>&nbsp;</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	<!-- Global Shared Project Detail Modal (Rich Structured Layout) -->
	<div class="project-modal-backdrop" id="project-modal-backdrop" aria-hidden="true">
		<div class="project-modal-dialog">
			<button type="button" class="project-modal-close" id="project-modal-close" aria-label="Close Project Modal">&times;</button>
			<div class="project-modal-body">
				
				<!-- Header Meta & Titles -->
				<div class="project-modal-header">
					<div class="flex-between align-center modal-top-bar">
						<div class="project-tag flex-center modal-tag">
							<span class="tag-dot"></span>
							<span class="text-sm" id="modal-project-category"></span>
						</div>
						<span class="modal-project-year-badge" id="modal-project-year"></span>
					</div>
					<h2 class="project-modal-title" id="modal-project-title"></h2>
					<p class="project-modal-subtitle" id="modal-project-subtitle"></p>
				</div>

				<!-- Featured Image / Main Cover -->
				<div class="project-modal-media">
					<img src="" alt="" id="modal-project-img" class="project-modal-img">
				</div>

				<!-- Rich Text Content (WYSIWYG Editor Output) -->
				<div class="project-modal-rich-text" id="modal-project-desc"></div>


				<!-- Project Image Gallery Grid -->
				<div class="project-modal-gallery-wrapper" id="modal-project-gallery-wrapper">
					<h3 class="modal-gallery-heading">Project Execution Photos</h3>
					<div class="project-modal-gallery-grid" id="modal-project-gallery-grid"></div>
				</div>

				<!-- Modal CTA Actions -->
				<div class="project-modal-actions">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary modal-cta-btn">
						<span>GET IN TOUCH FOR A PROJECT LIKE THIS</span>
					</a>
				</div>

			</div>
		</div>
	</div>


<?php wp_footer(); ?>
</body>
</html>

