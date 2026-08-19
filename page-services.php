<?php
/**
 * Template Name: Services Page Template
 * Description: Custom page template for displaying Wheelhouse Services.
 *
 * @package Wheelhouse
 */

get_header();
?>

<main class="site-main page-services-main">
	
	<!-- Services Hero Section (Solid Brand Purple Card with Top-Left Notch) -->
	<section class="about-hero-section services-hero-section">
		<div class="hero-card-wrapper about-hero-wrapper">

			<!-- Clipped Solid Purple Hero Card -->
			<div class="about-hero-card services-hero-card">
				<!-- Hero Content Area -->
				<div class="about-hero-content services-hero-content">
					<h1 class="hero-title text-display about-hero-title">
						<span class="text-white">OUR</span> <span class="text-accent">SERVICES.</span><br>
						<span class="text-white">STRATEGY TO</span> <span class="text-accent">EXECUTION.</span>
					</h1>
				</div>
			</div>

		</div>
	</section>

	<!-- Services Spotlight Section -->
	<section class="services-spotlight-section">
		<div class="services-spotlight-container">
			
			<!-- Top Headline Text -->
			<div class="services-spotlight-top">
				<h2 class="services-spotlight-headline text-display">
					WHERE IDEAS COME TOGETHER <br> AND BRANDS <span class="text-green">MOVE FORWARD</span>.
				</h2>
			</div>

			<!-- 3-Column Layout: Left Testimonial + Middle Collage + Right About Services -->
			<div class="services-spotlight-grid">
				
				<!-- Left Column: Testimonial Quote -->
				<div class="services-spotlight-left">
					<blockquote class="services-quote-box">
						<p class="services-quote-text">
							“The Wheelhouse proved to be an exceptional partner during our 15-city H40 launch across Maharashtra &amp; Other States. Their dedication, flawless large-scale execution, and alignment with our international quality standards make them a standout team.”
						</p>
						<cite class="services-quote-author">
							<span class="author-name">— Mr. Jayesh Chawla</span><br>
							<span class="author-company">Kerakoll India Private Limited</span>
						</cite>
					</blockquote>
				</div>


				<!-- Middle Column: Image Collage -->
				<div class="services-spotlight-middle">
					<div class="services-collage-wrapper">
						<!-- Main Central Showcase Image -->
						<div class="services-main-img-box">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about the wheel house.webp' ); ?>" alt="The Wheelhouse Services" class="services-main-img">
						</div>

						<!-- Floating Tilted Accent Cards -->
						<div class="services-floating-card card-top">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about make moments.webp' ); ?>" alt="Make Moments Branding" class="services-floating-img">
						</div>
						<div class="services-floating-card card-bottom">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about injoy solutions.webp' ); ?>" alt="Injoy Solutions Events" class="services-floating-img">
						</div>
					</div>
				</div>

				<!-- Right Column: About Wheelhouse Services -->
				<div class="services-spotlight-right flex-column justify-center">
					<h3 class="services-right-title text-display">
						EVERY BRAND & EVENT IS CRAFTED TO REFLECT YOUR VISION WITH PRECISION AND CARE.
					</h3>
					<p class="services-right-desc text-md">
						Modern methods and strategic execution ensure your brand stays vibrant and memorable for years to come. Expect details that do more than look good; they help your brand stand out, tell a powerful story, and hold up in the real world. When you invest in our craft, your ideas come to life and make a lasting impact.
					</p>
				</div>
			</div>
		</div>
	</section>


	<!-- Services & Capabilities Section (Brand Yellow Grid Layout) -->
	<section class="services-capabilities-section" id="capabilities">
		<div class="services-capabilities-container">


			
			<!-- Top Section Header -->
			<div class="services-capabilities-header">
				<div class="services-capabilities-tag flex-center">
					<span class="tag-dot"></span>
					<span class="tag-label">SERVICES AND CAPABILITIES</span>
				</div>

				<div class="services-capabilities-title-box">
					<h2 class="services-capabilities-title text-display">
						SPECIALIZED EVENT ARCHITECTURE &amp; STRATEGIC BRANDING ENGINES BUILT FOR MAXIMUM IMPACT.
					</h2>
				</div>
			</div>

			<!-- Divider Line -->
			<div class="services-capabilities-divider"></div>

			<!-- Numbered Capabilities Rows -->
			<div class="services-capabilities-list">
				
				<!-- Row 01: Injoy Solutions -->
				<div class="services-capability-row">
					<div class="capability-num-col">
						<span class="capability-num">(01)</span>
					</div>
					<div class="capability-img-col">
						<div class="capability-img-box">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about injoy solutions.webp' ); ?>" alt="Injoy Solutions" class="capability-img">
						</div>
					</div>
					<div class="capability-content-col">
						<h3 class="capability-brand-title text-display">INJOY SOLUTIONS</h3>
						<p class="capability-philosophy">
							<strong>Philosophy:</strong> “Industrial Joy Solutions” — The Experiential Event, MICE &amp; Activation Engine
						</p>
						
						<div class="capability-services-grid">
							<div class="capability-service-item">
								<h4 class="service-name">EVENTS &amp; PRODUCTION</h4>
								<p class="service-desc">
									Specialized planning, premium AV architecture, complex staging operations, and custom theme development for corporate events.
								</p>
							</div>
							<div class="capability-service-item">
								<h4 class="service-name">MICE MANAGEMENT</h4>
								<p class="service-desc">
									Turnkey administration of high-profile corporate Meetings, Incentives, Conferences, and large-scale industrial Exhibitions.
								</p>
							</div>
							<div class="capability-service-item">
								<h4 class="service-name">ACTIVATIONS &amp; PROMOTIONS</h4>
								<p class="service-desc">
									Strategic experiential marketing programs and consumer outreach campaigns with full performance analytics.
								</p>
							</div>
							<div class="capability-service-item">
								<h4 class="service-name">TRADITIONAL ADVERTISING</h4>
								<p class="service-desc">
									High-impact mass audience campaigns utilizing detailed structural visibility analysis and strategic asset placement.
								</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Divider Line -->
				<div class="services-capabilities-divider"></div>

				<!-- Row 02: Make Moments -->
				<div class="services-capability-row">
					<div class="capability-num-col">
						<span class="capability-num">(02)</span>
					</div>
					<div class="capability-img-col">
						<div class="capability-img-box">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about make moments.webp' ); ?>" alt="Make Moments" class="capability-img">
						</div>
					</div>
					<div class="capability-content-col">
						<h3 class="capability-brand-title text-display">MAKE MOMENTS</h3>
						<p class="capability-philosophy">
							<strong>Philosophy:</strong> “Making Branding Memories” — The Strategic Display, POSM &amp; Fabrication Engine
						</p>
						
						<div class="capability-services-grid">
							<div class="capability-service-item">
								<h4 class="service-name">POSM &amp; FSU FABRICATION</h4>
								<p class="service-desc">
									Structural engineering &amp; manufacturing of Free Standing Units (FSUs), Counter Top Units (CTUs), End Caps, and Display Racks.
								</p>
							</div>
							<div class="capability-service-item">
								<h4 class="service-name">SIGNAGE &amp; COMPLIANCE</h4>
								<p class="service-desc">
									Turnkey fabrication of high-visibility illuminated outdoor/indoor signage, window branding, and in-shop brand compliance layouts.
								</p>
							</div>
							<div class="capability-service-item">
								<h4 class="service-name">DISPLAY &amp; KIOSKS</h4>
								<p class="service-desc">
									Commercial deployment of custom retail spaces, interactive Kiosks, Experience Centres, EBOs, and modular Shop-in-Shop (SIS) Podiums.
								</p>
							</div>
							<div class="capability-service-item">
								<h4 class="service-name">TECHNICAL PRINTS &amp; INSTALLATIONS</h4>
								<p class="service-desc">
									Rapid site deployments with design-to-print shade matching, high-durability substrate mounting, and flawless execution.
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- Global FAQ Section -->
	<section class="faq-section" id="faq">
		<div class="faq-container">
			
			<!-- Left Column: Title, Description & CTA Card -->
			<div class="faq-left flex-column justify-between">
				
				<!-- Top Left: Title & Subtitle -->
				<div class="faq-header flex-column">
					<div class="projects-tag flex-center faq-tag">
						<span class="tag-dot"></span>
						<span class="text-sm">FREQUENTLY ASKED QUESTIONS</span>
					</div>

					<h2 class="faq-title text-display">
						FREQUENTLY ASKED<br>
						<span class="text-purple">QUESTIONS.</span>
					</h2>

					<p class="faq-desc text-md">
						Everything you need to know about our services, nationwide execution capabilities, and project workflows.
					</p>
				</div>

				<!-- Bottom Left: Still Have Questions CTA Card -->
				<div class="faq-cta-card flex-column">
					<h3 class="faq-cta-title text-display">Still have a question?</h3>
					<p class="faq-cta-desc">
						Can’t find the answer you’re looking for? Send us an email and our team will get back to you right away.
					</p>
					<a href="mailto:info@thewheelhouse.in" class="btn-contact text-sm rounded-full flex-center faq-cta-btn">SEND EMAIL</a>
				</div>


			</div>

			<!-- Right Column: Accordion Questions -->
			<div class="faq-right flex-column">

				
				<!-- FAQ Item 1 -->
				<div class="faq-accordion-item active">
					<button type="button" class="faq-accordion-header flex-between align-center" aria-expanded="true">
						<span class="faq-question-text">What services do Injoy Solutions and Make Moments specialize in?</span>
						<span class="faq-icon-badge flex-center">
							<svg class="faq-chevron-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
						</span>
					</button>
					<div class="faq-accordion-body">
						<p class="faq-answer-text">
							Injoy Solutions is our MICE, Experiential Events, Activations, and Corporate AV/Staging engine. Make Moments is our POSM, Retail Displays, Signage, Fabrication, and Technical Printing engine. Together under The Wheelhouse, we offer complete 360-degree event and brand solutions.
						</p>
					</div>
				</div>

				<!-- FAQ Item 2 -->
				<div class="faq-accordion-item">
					<button type="button" class="faq-accordion-header flex-between align-center" aria-expanded="false">
						<span class="faq-question-text">Do you handle multi-city event executions and nationwide activations?</span>
						<span class="faq-icon-badge flex-center">
							<svg class="faq-chevron-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
						</span>
					</button>
					<div class="faq-accordion-body">
						<p class="faq-answer-text">
							Yes! We specialize in large-scale nationwide deployments across India—such as multi-city brand launches, industrial exhibitions, and pan-India retail POSM rollouts with rapid site deployment teams.
						</p>
					</div>
				</div>

				<!-- FAQ Item 3 -->
				<div class="faq-accordion-item">
					<button type="button" class="faq-accordion-header flex-between align-center" aria-expanded="false">
						<span class="faq-question-text">Can The Wheelhouse manage custom retail fabrication and POSM in-house?</span>
						<span class="faq-icon-badge flex-center">
							<svg class="faq-chevron-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
						</span>
					</button>
					<div class="faq-accordion-body">
						<p class="faq-answer-text">
							Absolutely. Our Make Moments engine features specialized precision structural engineering and assembly line manufacturing for FSUs, CTUs, illuminated outdoor/indoor signage, and interactive retail kiosks.
						</p>
					</div>
				</div>

				<!-- FAQ Item 4 -->
				<div class="faq-accordion-item">
					<button type="button" class="faq-accordion-header flex-between align-center" aria-expanded="false">
						<span class="faq-question-text">How do we get started on a project with The Wheelhouse team?</span>
						<span class="faq-icon-badge flex-center">
							<svg class="faq-chevron-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
						</span>
					</button>
					<div class="faq-accordion-body">
						<p class="faq-answer-text">
							You can reach out directly via our contact form, email us at info@thewheelhouse.in, or call +91 895 690 1393. Our team will schedule an initial strategic consultation to align on concept development, scope, and operational timelines.
						</p>
					</div>
				</div>

			</div>

		</div>
	</section>

</main>

<?php
get_footer();



