<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wheelhouse_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wheelhouse_setup' );

function wheelhouse_scripts() {
	// Theme stylesheet
	wp_enqueue_style( 'wheelhouse-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Lenis smooth scroll
	wp_enqueue_style( 'lenis-style', 'https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.css', array(), '1.1.20' );
	wp_enqueue_script( 'lenis', 'https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js', array(), '1.1.20', true );

	// GSAP & ScrollTrigger
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
	wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array( 'gsap' ), '3.12.5', true );

	// Theme Custom Script
	wp_enqueue_script( 'wheelhouse-script', get_template_directory_uri() . '/assets/js/script.js', array( 'gsap', 'gsap-scrolltrigger', 'lenis' ), '1.0.0', true );
	wp_localize_script( 'wheelhouse-script', 'wheelhouseData', array(
		'themeUri' => get_template_directory_uri(),
		'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'wheelhouse_scripts' );



// Register Custom Post Type: Projects & Taxonomy: Service Categories
function wheelhouse_register_cpt() {
	// Register Taxonomy: Service Category
	$tax_labels = array(
		'name'              => _x( 'Service Categories', 'taxonomy general name', 'wheelhouse' ),
		'singular_name'     => _x( 'Service Category', 'taxonomy singular name', 'wheelhouse' ),
		'search_items'      => __( 'Search Service Categories', 'wheelhouse' ),
		'all_items'         => __( 'All Service Categories', 'wheelhouse' ),
		'edit_item'         => __( 'Edit Service Category', 'wheelhouse' ),
		'update_item'       => __( 'Update Service Category', 'wheelhouse' ),
		'add_new_item'      => __( 'Add New Service Category', 'wheelhouse' ),
		'new_item_name'     => __( 'New Service Category Name', 'wheelhouse' ),
		'menu_name'         => __( 'Service Categories', 'wheelhouse' ),
	);

	$tax_args = array(
		'hierarchical'      => true,
		'labels'            => $tax_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project-service' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'project_service', array( 'projects' ), $tax_args );

	// Register Custom Post Type: Projects

	$cpt_labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'wheelhouse' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'wheelhouse' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'wheelhouse' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'wheelhouse' ),
		'add_new'            => _x( 'Add New', 'project', 'wheelhouse' ),
		'add_new_item'       => __( 'Add New Project', 'wheelhouse' ),
		'new_item'           => __( 'New Project', 'wheelhouse' ),
		'edit_item'          => __( 'Edit Project', 'wheelhouse' ),
		'view_item'          => __( 'View Project', 'wheelhouse' ),
		'all_items'          => __( 'All Projects', 'wheelhouse' ),
		'search_items'       => __( 'Search Projects', 'wheelhouse' ),
		'not_found'          => __( 'No projects found.', 'wheelhouse' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'wheelhouse' ),
	);

	$cpt_args = array(
		'labels'             => $cpt_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'thumbnail', 'excerpt', 'custom-fields' ),
		'show_in_rest'       => false,
	);

	register_post_type( 'projects', $cpt_args );
}

add_action( 'init', 'wheelhouse_register_cpt' );

// Auto-flush rewrite rules so single project URLs (/projects/slug) resolve properly
function wheelhouse_flush_rules_on_init() {
	if ( ! get_option( 'wheelhouse_permalinks_flushed_v2' ) ) {
		flush_rewrite_rules();
		update_option( 'wheelhouse_permalinks_flushed_v2', true );
	}
}
add_action( 'init', 'wheelhouse_flush_rules_on_init', 99 );


// Auto-seed default taxonomy terms (Branding & Events)
function wheelhouse_seed_project_terms() {
	if ( get_option( 'wheelhouse_project_terms_seeded' ) ) {
		return;
	}

	if ( ! taxonomy_exists( 'project_service' ) ) {
		return;
	}

	$default_terms = array(
		'Branding' => 'branding',
		'Events'   => 'events',
	);

	foreach ( $default_terms as $term_name => $slug ) {
		if ( ! term_exists( $slug, 'project_service' ) ) {
			wp_insert_term( $term_name, 'project_service', array( 'slug' => $slug ) );
	}
}



	update_option( 'wheelhouse_project_terms_seeded', true );
}
add_action( 'admin_init', 'wheelhouse_seed_project_terms' );

// Register Custom Post Type: Clients & Taxonomy: Industry Categories

function wheelhouse_register_clients_cpt() {
	// Register Taxonomy: Industry Categories
	$ind_labels = array(
		'name'              => _x( 'Industry Categories', 'taxonomy general name', 'wheelhouse' ),
		'singular_name'     => _x( 'Industry Category', 'taxonomy singular name', 'wheelhouse' ),
		'search_items'      => __( 'Search Industry Categories', 'wheelhouse' ),
		'all_items'         => __( 'All Industry Categories', 'wheelhouse' ),
		'edit_item'         => __( 'Edit Industry Category', 'wheelhouse' ),
		'update_item'       => __( 'Update Industry Category', 'wheelhouse' ),
		'add_new_item'      => __( 'Add New Industry Category', 'wheelhouse' ),
		'new_item_name'     => __( 'New Industry Category Name', 'wheelhouse' ),
		'menu_name'         => __( 'Industries', 'wheelhouse' ),
	);

	$ind_args = array(
		'hierarchical'      => true,
		'labels'            => $ind_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'client-industry' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'client_industry', array( 'clients' ), $ind_args );

	// Register Custom Post Type: Clients
	$client_cpt_labels = array(
		'name'               => _x( 'Clients', 'post type general name', 'wheelhouse' ),
		'singular_name'      => _x( 'Client Group', 'post type singular name', 'wheelhouse' ),
		'menu_name'          => _x( 'Clients', 'admin menu', 'wheelhouse' ),
		'name_admin_bar'     => _x( 'Client Group', 'add new on admin bar', 'wheelhouse' ),
		'add_new'            => _x( 'Add New', 'client group', 'wheelhouse' ),
		'add_new_item'       => __( 'Add New Client Group', 'wheelhouse' ),
		'new_item'           => __( 'New Client Group', 'wheelhouse' ),
		'edit_item'          => __( 'Edit Client Group', 'wheelhouse' ),
		'view_item'          => __( 'View Client Group', 'wheelhouse' ),
		'all_items'          => __( 'All Clients', 'wheelhouse' ),
		'search_items'       => __( 'Search Clients', 'wheelhouse' ),
		'not_found'          => __( 'No client groups found.', 'wheelhouse' ),
		'not_found_in_trash' => __( 'No client groups found in Trash.', 'wheelhouse' ),
	);

	$client_cpt_args = array(
		'labels'             => $client_cpt_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'clients' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
		'show_in_rest'       => false,
	);

	register_post_type( 'clients', $client_cpt_args );

}
add_action( 'init', 'wheelhouse_register_clients_cpt' );

// Auto-seed default industry terms
function wheelhouse_seed_industry_terms() {
	if ( get_option( 'wheelhouse_industry_terms_seeded' ) ) {
		return;
	}

	if ( ! taxonomy_exists( 'client_industry' ) ) {
		return;
	}

	$default_industries = array(
		'Technology & IT'        => 'tech',
		'Healthcare & Pharma'    => 'pharma',
		'Automotive & FMCG'      => 'fmcg',
		'Events & Entertainment' => 'events-entertainment',
		'Retail & Branding'      => 'retail-branding',
	);

	foreach ( $default_industries as $term_name => $slug ) {
		if ( ! term_exists( $slug, 'client_industry' ) ) {
			wp_insert_term( $term_name, 'client_industry', array( 'slug' => $slug ) );
		}
	}

	update_option( 'wheelhouse_industry_terms_seeded', true );
}
add_action( 'admin_init', 'wheelhouse_seed_industry_terms' );

/* --------------------------------------------------
   Add Meta Box: Client Logos Gallery for Clients CPT
-------------------------------------------------- */
function wheelhouse_add_client_metaboxes() {
	add_meta_box(
		'wheelhouse_client_logos_mb',
		__( 'Client Logos Gallery (Upload Brand Logos for this Group)', 'wheelhouse' ),
		'wheelhouse_client_logos_metabox_callback',
		'clients',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'wheelhouse_add_client_metaboxes' );

function wheelhouse_client_logos_metabox_callback( $post ) {
	wp_nonce_field( 'wheelhouse_save_client_meta', 'wheelhouse_client_meta_nonce' );
	$logo_ids = get_post_meta( $post->ID, '_wheelhouse_client_logo_ids', true );
	if ( empty( $logo_ids ) ) {
		$logo_ids = get_post_meta( $post->ID, '_client_logo_ids', true );
	}
	$ids_array = ! empty( $logo_ids ) ? explode( ',', $logo_ids ) : array();
	?>
	<div id="wheelhouse-client-logos-wrapper" style="padding: 5px 0;">
		<p class="description" style="margin-bottom: 12px; font-size: 13px; color: #646970;">
			<?php esc_html_e( 'Upload or select multiple client brand logos for this category group (e.g. Bosch, Royal Inks, AIMA, Tata, etc.). These will display in the Client Logos Grid section on the homepage and about page.', 'wheelhouse' ); ?>
		</p>
		<input type="hidden" name="wheelhouse_client_logo_ids" id="wheelhouse_client_logo_ids" value="<?php echo esc_attr( $logo_ids ); ?>">
		<div id="wheelhouse-thumbs-container" style="display: flex; flex-wrap: wrap; gap: 14px; margin-block: 15px;">
			<?php
			if ( ! empty( $ids_array ) ) {
				foreach ( $ids_array as $img_id ) {
					$img_id = intval( trim( $img_id ) );
					if ( $img_id > 0 ) {
						$thumb_src = wp_get_attachment_image_url( $img_id, 'medium' );
						if ( $thumb_src ) {
							echo '<div class="wh-thumb-item" data-id="' . $img_id . '" style="position: relative; width: 110px; height: 80px; border-radius: 8px; overflow: hidden; border: 1px solid #cbd5e0; background: #fff; display: flex; align-items: center; justify-content: center; padding: 6px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">';
							echo '<img src="' . esc_url( $thumb_src ) . '" style="max-width: 100%; max-height: 100%; object-fit: contain;">';
							echo '<button type="button" class="wh-remove-thumb" style="position: absolute; top: 4px; right: 4px; background: #e74c3c; color: #fff; border: none; border-radius: 50%; width: 22px; height: 22px; cursor: pointer; font-size: 13px; font-weight: 700; line-height: 1; text-align: center;">&times;</button>';
							echo '</div>';
						}
					}
				}
			}
			?>
		</div>
		<button type="button" class="button button-primary button-large" id="wheelhouse-upload-client-btn">
			<?php esc_html_e( '+ Upload / Manage Client Logos', 'wheelhouse' ); ?>
		</button>
	</div>
	<?php
}

function wheelhouse_save_client_meta( $post_id ) {
	if ( ! isset( $_POST['wheelhouse_client_meta_nonce'] ) || ! wp_verify_nonce( $_POST['wheelhouse_client_meta_nonce'], 'wheelhouse_save_client_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	if ( isset( $_POST['wheelhouse_client_logo_ids'] ) ) {
		update_post_meta( $post_id, '_wheelhouse_client_logo_ids', sanitize_text_field( $_POST['wheelhouse_client_logo_ids'] ) );
		update_post_meta( $post_id, '_client_logo_ids', sanitize_text_field( $_POST['wheelhouse_client_logo_ids'] ) );
	}
}
add_action( 'save_post_clients', 'wheelhouse_save_client_meta' );



/**
 * Helper function: Fetch project card metadata (DRY)
 *
 * @param int|WP_Post|null $post_id Post ID or object.
 * @return array Project data array.
 */
function wheelhouse_get_project_card_data( $post_id = null ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return array();
	}

	$id = $post->ID;

	// 1. Image
	$img_url = get_the_post_thumbnail_url( $id, 'full' );
	if ( ! $img_url ) {
		$img_url = home_url( '/wp-content/uploads/2026/08/pexels-song-song-51668066-13067022-1024x683.jpg' );
	}

	// 2. Category
	$terms = get_the_terms( $id, 'project_service' );
	$category = ! empty( $terms ) && ! is_wp_error( $terms ) ? strtoupper( $terms[0]->name ) : 'EVENT';
	$category_slug = ! empty( $terms ) && ! is_wp_error( $terms ) ? strtolower( $terms[0]->slug ) : 'events';

	// 3. Year
	$year = get_post_meta( $id, '_wheelhouse_project_year', true );
	if ( empty( $year ) ) {
		$year = get_post_meta( $id, '_project_year', true );
	}
	if ( empty( $year ) ) {
		$year = get_the_date( 'Y', $id );
	}

	// 4. Subtitle
	$subtitle = get_post_meta( $id, '_wheelhouse_project_subtitle', true );

	// 5. Description / WYSIWYG Content
	$meta_desc = get_post_meta( $id, '_wheelhouse_project_description', true );
	if ( empty( $meta_desc ) ) {
		$meta_desc = get_post_meta( $id, '_project_description', true );
	}
	$content_desc = $post->post_content;
	$excerpt_desc = get_the_excerpt( $id );

	if ( ! empty( $meta_desc ) ) {
		$raw_desc = $meta_desc;
	} elseif ( ! empty( $content_desc ) ) {
		$raw_desc = $content_desc;
	} elseif ( ! empty( $excerpt_desc ) && trim( $excerpt_desc ) !== trim( $post->post_title ) ) {
		$raw_desc = $excerpt_desc;
	} else {
		$raw_desc = '<h3>The Scope</h3><p>Turnkey execution of all structural requirements for the prestigious International Dome, including custom stall fabrications and end-to-end technical production support.</p><h3>Key Highlights</h3><p>Deployed and managed over 1,000+ sq. ft. of high-definition active LED walls for a flawless multi-stage exhibition schedule.</p><h3>Impact & Launch</h3><p>Entrusted with the structural design, tech orchestration, and complete stage production for the logo unveiling ceremony.</p>';
	}

	$description = wpautop( $raw_desc );
	$card_summary = wp_trim_words( wp_strip_all_tags( $raw_desc ), 18, '...' );

	// 6. Image Gallery
	$gallery_ids = get_post_meta( $id, '_wheelhouse_project_gallery_ids', true );
	$gallery_urls = array();
	if ( ! empty( $gallery_ids ) ) {
		$g_ids = explode( ',', $gallery_ids );
		foreach ( $g_ids as $g_id ) {
			$g_id = intval( trim( $g_id ) );
			if ( $g_id > 0 ) {
				$g_url = wp_get_attachment_image_url( $g_id, 'full' );
				if ( $g_url ) {
					$gallery_urls[] = $g_url;
				}
			}
		}
	}

	return array(
		'id'            => $id,
		'title'         => get_the_title( $id ),
		'subtitle'      => $subtitle,
		'image'         => $img_url,
		'category'      => $category,
		'category_slug' => $category_slug,
		'year'          => $year,
		'description'   => $description,
		'card_summary'  => $card_summary,
		'gallery'       => $gallery_urls,
	);
}

// Add Project Details, Subtitle & Gallery Meta Boxes for Projects CPT
function wheelhouse_add_project_metaboxes() {
	add_meta_box(
		'wheelhouse_project_subtitle_mb',
		__( '1. Project Subtitle & Year', 'wheelhouse' ),
		'wheelhouse_project_subtitle_metabox_callback',
		'projects',
		'normal',
		'high'
	);

	add_meta_box(
		'wheelhouse_project_sections_mb',
		__( '2. Project Description & Content (WYSIWYG Editor)', 'wheelhouse' ),
		'wheelhouse_project_sections_metabox_callback',
		'projects',
		'normal',
		'high'
	);

	add_meta_box(
		'wheelhouse_project_gallery_mb',
		__( '3. Project Image Gallery (Upload Multiple Execution Photos)', 'wheelhouse' ),
		'wheelhouse_project_gallery_metabox_callback',
		'projects',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'wheelhouse_add_project_metaboxes' );

// Callback 1: Subtitle & Year
function wheelhouse_project_subtitle_metabox_callback( $post ) {
	wp_nonce_field( 'wheelhouse_save_project_meta', 'wheelhouse_project_meta_nonce' );
	$subtitle = get_post_meta( $post->ID, '_wheelhouse_project_subtitle', true );
	$year = get_post_meta( $post->ID, '_wheelhouse_project_year', true );
	?>
	<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; padding: 5px 0;">
		<div>
			<label for="wheelhouse_project_subtitle" style="font-weight: 600; display: block; margin-bottom: 6px;"><?php esc_html_e( 'Project Subtitle / Bracket Info:', 'wheelhouse' ); ?></label>
			<input type="text" name="wheelhouse_project_subtitle" id="wheelhouse_project_subtitle" value="<?php echo esc_attr( $subtitle ); ?>" class="widefat" placeholder="e.g. (International Dome Setup & Mega LED Installation)">
			<p class="description" style="margin-top: 4px;"><?php esc_html_e( 'Appears directly below the main project title in the detail modal.', 'wheelhouse' ); ?></p>
		</div>
		<div>
			<label for="wheelhouse_project_year" style="font-weight: 600; display: block; margin-bottom: 6px;"><?php esc_html_e( 'Project Year:', 'wheelhouse' ); ?></label>
			<input type="text" name="wheelhouse_project_year" id="wheelhouse_project_year" value="<?php echo esc_attr( $year ); ?>" class="widefat" placeholder="e.g. 2025">
		</div>
	</div>
	<?php
}

// Callback 2: WYSIWYG Editor for Project Description
function wheelhouse_project_sections_metabox_callback( $post ) {
	$description = get_post_meta( $post->ID, '_wheelhouse_project_description', true );
	?>
	<div style="padding: 5px 0;">
		<label for="wheelhouse_project_description" style="font-weight: 700; display: block; margin-bottom: 8px; font-size: 14px; color: #1d2327;">
			<?php esc_html_e( 'Project Description & Details (WYSIWYG Visual Editor):', 'wheelhouse' ); ?>
		</label>
		<p class="description" style="margin-bottom: 12px; color: #646970;">
			<?php esc_html_e( 'Format your headings (Heading 3 / Heading 4), paragraphs, bullet points, and text highlights. This content will display styled inside the project detail modal.', 'wheelhouse' ); ?>
		</p>
		<?php
		wp_editor(
			$description,
			'wheelhouse_project_description',
			array(
				'textarea_name' => 'wheelhouse_project_description',
				'textarea_rows' => 12,
				'media_buttons' => true,
				'teeny'         => false,
				'quicktags'     => true,
			)
		);
		?>
	</div>
	<?php
}

// Callback 3: Project Image Gallery
function wheelhouse_project_gallery_metabox_callback( $post ) {
	$gallery_ids = get_post_meta( $post->ID, '_wheelhouse_project_gallery_ids', true );
	$ids_array = ! empty( $gallery_ids ) ? explode( ',', $gallery_ids ) : array();
	?>
	<div id="wheelhouse-project-gallery-metabox-wrapper">
		<p class="description"><?php esc_html_e( 'Upload or select multiple project photos (e.g. stage setups, LED walls, stalls, event execution photos). These will display in a multi-image grid in the project modal.', 'wheelhouse' ); ?></p>
		<input type="hidden" name="wheelhouse_project_gallery_ids" id="wheelhouse_project_gallery_ids" value="<?php echo esc_attr( $gallery_ids ); ?>">
		<div id="wheelhouse-project-thumbs-container" style="display: flex; flex-wrap: wrap; gap: 14px; margin-block: 15px;">
			<?php
			if ( ! empty( $ids_array ) ) {
				foreach ( $ids_array as $img_id ) {
					$img_id = intval( trim( $img_id ) );
					if ( $img_id > 0 ) {
						$thumb_src = wp_get_attachment_image_url( $img_id, 'medium' );
						if ( $thumb_src ) {
							echo '<div class="wh-thumb-item" data-id="' . $img_id . '" style="position: relative; width: 120px; height: 90px; border-radius: 8px; overflow: hidden; border: 1px solid #cbd5e0; background: #f8fafc; display: flex; align-items: center; justify-content: center; padding: 4px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">';
							echo '<img src="' . esc_url( $thumb_src ) . '" style="max-width: 100%; max-height: 100%; object-fit: cover; border-radius: 4px;">';
							echo '<button type="button" class="wh-remove-thumb" style="position: absolute; top: 4px; right: 4px; background: #e74c3c; color: #fff; border: none; border-radius: 50%; width: 22px; height: 22px; cursor: pointer; font-size: 13px; font-weight: 700; line-height: 1; text-align: center;">&times;</button>';
							echo '</div>';
						}
					}
				}
			}
			?>
		</div>
		<button type="button" class="button button-primary button-large" id="wheelhouse-upload-project-gallery-btn"><?php esc_html_e( '+ Upload / Manage Project Photos', 'wheelhouse' ); ?></button>
	</div>
	<?php
}

// Save Project Meta Fields
function wheelhouse_save_project_details_meta( $post_id ) {
	if ( ! isset( $_POST['wheelhouse_project_meta_nonce'] ) || ! wp_verify_nonce( $_POST['wheelhouse_project_meta_nonce'], 'wheelhouse_save_project_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['wheelhouse_project_subtitle'] ) ) {
		update_post_meta( $post_id, '_wheelhouse_project_subtitle', sanitize_text_field( $_POST['wheelhouse_project_subtitle'] ) );
	}
	if ( isset( $_POST['wheelhouse_project_year'] ) ) {
		update_post_meta( $post_id, '_wheelhouse_project_year', sanitize_text_field( $_POST['wheelhouse_project_year'] ) );
	}
	if ( isset( $_POST['wheelhouse_project_description'] ) ) {
		update_post_meta( $post_id, '_wheelhouse_project_description', wp_kses_post( $_POST['wheelhouse_project_description'] ) );
	}
	if ( isset( $_POST['wheelhouse_project_gallery_ids'] ) ) {
		update_post_meta( $post_id, '_wheelhouse_project_gallery_ids', sanitize_text_field( $_POST['wheelhouse_project_gallery_ids'] ) );
	}
}
add_action( 'save_post_projects', 'wheelhouse_save_project_details_meta' );



// Enqueue WP Media Uploader scripts in admin for Clients & Projects CPT
function wheelhouse_clients_admin_scripts( $hook ) {
	global $post_type;
	if ( ( 'post.php' === $hook || 'post-new.php' === $hook ) && ( 'clients' === $post_type || 'projects' === $post_type ) ) {
		wp_enqueue_media();
		add_action( 'admin_footer', 'wheelhouse_clients_admin_footer_js' );
	}
}
add_action( 'admin_enqueue_scripts', 'wheelhouse_clients_admin_scripts' );

function wheelhouse_clients_admin_footer_js() {
	?>
	<script>
	jQuery(document).ready(function($) {
		// Client Logos Uploader
		var clientFrame;
		$(document).on('click', '#wheelhouse-upload-client-btn, #wheelhouse-upload-logos-btn', function(e) {
			e.preventDefault();
			if (clientFrame) {
				clientFrame.open();
				return;
			}
			clientFrame = wp.media({
				title: 'Select or Upload Client Logos',
				button: { text: 'Add Selected Logos' },
				multiple: true
			});
			clientFrame.on('select', function() {
				var selection = clientFrame.state().get('selection');
				// Read existing IDs already saved
				var existingIds = $('#wheelhouse_client_logo_ids').val().split(',').filter(Boolean).map(Number);
				var newThumbsHtml = '';
				selection.each(function(attachment) {
					var att = attachment.toJSON();
					// Only add if not already present
					if (existingIds.indexOf(att.id) === -1) {
						existingIds.push(att.id);
						var url = att.sizes && att.sizes.medium ? att.sizes.medium.url : att.url;
						newThumbsHtml += '<div class="wh-thumb-item" data-id="' + att.id + '" style="position: relative; width: 110px; height: 80px; border-radius: 8px; overflow: hidden; border: 1px solid #cbd5e0; background: #fff; display: flex; align-items: center; justify-content: center; padding: 6px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">';
						newThumbsHtml += '<img src="' + url + '" style="max-width: 100%; max-height: 100%; object-fit: contain;">';
						newThumbsHtml += '<button type="button" class="wh-remove-thumb" style="position: absolute; top: 4px; right: 4px; background: #e74c3c; color: #fff; border: none; border-radius: 50%; width: 22px; height: 22px; cursor: pointer; font-size: 13px; font-weight: 700; line-height: 1; text-align: center;">&times;</button>';
						newThumbsHtml += '</div>';
					}
				});
				// Update hidden field with merged IDs
				$('#wheelhouse_client_logo_ids').val(existingIds.join(','));
				// Append new thumbnails (don't replace existing ones)
				$('#wheelhouse-thumbs-container').append(newThumbsHtml);
			});
			clientFrame.open();
		});


		// Project Gallery Uploader
		var projectFrame;
		$('#wheelhouse-upload-project-gallery-btn').on('click', function(e) {
			e.preventDefault();
			if (projectFrame) {
				projectFrame.open();
				return;
			}
			projectFrame = wp.media({
				title: 'Select or Upload Project Execution Photos',
				button: { text: 'Add Selected Photos' },
				multiple: true
			});
			projectFrame.on('select', function() {
				var selection = projectFrame.state().get('selection');
				// Read existing IDs already saved
				var existingIds = $('#wheelhouse_project_gallery_ids').val().split(',').filter(Boolean).map(Number);
				var newThumbsHtml = '';
				selection.each(function(attachment) {
					var att = attachment.toJSON();
					// Only add if not already present
					if (existingIds.indexOf(att.id) === -1) {
						existingIds.push(att.id);
						var url = att.sizes && att.sizes.medium ? att.sizes.medium.url : att.url;
						newThumbsHtml += '<div class="wh-thumb-item" data-id="' + att.id + '" style="position: relative; width: 120px; height: 90px; border-radius: 8px; overflow: hidden; border: 1px solid #cbd5e0; background: #f8fafc; display: flex; align-items: center; justify-content: center; padding: 4px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">';
						newThumbsHtml += '<img src="' + url + '" style="max-width: 100%; max-height: 100%; object-fit: cover; border-radius: 4px;">';
						newThumbsHtml += '<button type="button" class="wh-remove-thumb-project" style="position: absolute; top: 4px; right: 4px; background: #e74c3c; color: #fff; border: none; border-radius: 50%; width: 22px; height: 22px; cursor: pointer; font-size: 13px; font-weight: 700; line-height: 1; text-align: center;">&times;</button>';
						newThumbsHtml += '</div>';
					}
				});
				// Update hidden field with merged IDs
				$('#wheelhouse_project_gallery_ids').val(existingIds.join(','));
				// Append new thumbnails (don't replace existing ones)
				$('#wheelhouse-project-thumbs-container').append(newThumbsHtml);
			});
			projectFrame.open();
		});

		$(document).on('click', '.wh-remove-thumb', function() {
			var $item = $(this).closest('.wh-thumb-item');
			var removeId = $item.data('id');
			$item.remove();
			var currentIds = $('#wheelhouse_client_logo_ids').val().split(',').filter(Boolean);
			var newIds = currentIds.filter(function(id) { return parseInt(id) !== parseInt(removeId); });
			$('#wheelhouse_client_logo_ids').val(newIds.join(','));
		});

		$(document).on('click', '.wh-remove-thumb-project', function() {
			var $item = $(this).closest('.wh-thumb-item');
			var removeId = $item.data('id');
			$item.remove();
			var currentIds = $('#wheelhouse_project_gallery_ids').val().split(',').filter(Boolean);
			var newIds = currentIds.filter(function(id) { return parseInt(id) !== parseInt(removeId); });
			$('#wheelhouse_project_gallery_ids').val(newIds.join(','));
		});
	});
	</script>
	<?php
}


/* --------------------------------------------------
   Add Meta Box: Feature Project on Homepage
-------------------------------------------------- */
function wheelhouse_add_featured_project_metabox() {
	add_meta_box(
		'wheelhouse_featured_project_mb',
		__( 'Homepage Settings', 'wheelhouse' ),
		'wheelhouse_featured_project_metabox_callback',
		'projects',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'wheelhouse_add_featured_project_metabox' );

function wheelhouse_featured_project_metabox_callback( $post ) {
	wp_nonce_field( 'wheelhouse_save_featured_meta', 'wheelhouse_featured_meta_nonce' );
	$is_featured = get_post_meta( $post->ID, '_featured_on_home', true );
	?>
	<div style="padding: 6px 0;">
		<label style="display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
			<input type="checkbox" name="wheelhouse_featured_on_home" value="1" <?php checked( $is_featured, '1' ); ?> style="width: 18px; height: 18px; cursor: pointer;">
			<span>Feature this project on homepage</span>
		</label>
		<p class="description" style="margin-top: 8px; font-size: 12px; color: #666;">
			Check this box to showcase this project in the 4 featured cards on the main homepage.
		</p>
	</div>
	<?php
}

function wheelhouse_save_featured_project_meta( $post_id ) {
	if ( ! isset( $_POST['wheelhouse_featured_meta_nonce'] ) || ! wp_verify_nonce( $_POST['wheelhouse_featured_meta_nonce'], 'wheelhouse_save_featured_meta' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['wheelhouse_featured_on_home'] ) && '1' === $_POST['wheelhouse_featured_on_home'] ) {
		update_post_meta( $post_id, '_featured_on_home', '1' );
	} else {
		delete_post_meta( $post_id, '_featured_on_home' );
	}
}
add_action( 'save_post_projects', 'wheelhouse_save_featured_project_meta' );

/* --------------------------------------------------
   Handle Contact Form Submission via AJAX / POST
-------------------------------------------------- */

function wheelhouse_handle_contact_form() {
	if ( isset( $_POST['action'] ) && 'wheelhouse_submit_contact' === $_POST['action'] ) {
		// Nonce check
		if ( ! isset( $_POST['contact_nonce'] ) || ! wp_verify_nonce( $_POST['contact_nonce'], 'wheelhouse_contact_nonce' ) ) {
			wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page and try again.' ) );
		}

		$name     = isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] ) : '';
		$email    = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
		$phone    = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
		$services = isset( $_POST['services'] ) && is_array( $_POST['services'] ) ? array_map( 'sanitize_text_field', $_POST['services'] ) : array();
		$message  = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

		if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
			wp_send_json_error( array( 'message' => 'Please fill in all required fields (Name, Email, Message).' ) );
		}

		$admin_email = get_option( 'admin_email' );
		$to          = ! empty( $admin_email ) ? $admin_email : 'info@thewheelhouse.in';
		$subject     = 'New Contact Inquiry from ' . $name . ' - The Wheelhouse Website';

		$body  = "You have received a new contact form message from The Wheelhouse website:\n\n";
		$body .= "Full Name: " . $name . "\n";
		$body .= "Email Address: " . $email . "\n";
		$body .= "Phone Number: " . ( ! empty( $phone ) ? $phone : 'N/A' ) . "\n";
		$body .= "Services Needed: " . ( ! empty( $services ) ? implode( ', ', $services ) : 'None selected' ) . "\n\n";
		$body .= "Message:\n" . $message . "\n\n";
		$body .= "---\nSent from: " . home_url();

		$headers = array(
			'Content-Type: text/plain; charset=UTF-8',
			'From: ' . get_bloginfo( 'name' ) . ' <' . $to . '>',
			'Reply-To: ' . $name . ' <' . $email . '>',
		);

		@wp_mail( $to, $subject, $body, $headers );

		wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent successfully. Our team will get in touch with you shortly.' ) );
	}
}
add_action( 'wp_ajax_wheelhouse_submit_contact', 'wheelhouse_handle_contact_form' );
add_action( 'wp_ajax_nopriv_wheelhouse_submit_contact', 'wheelhouse_handle_contact_form' );






