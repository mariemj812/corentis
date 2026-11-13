<?php
/**
 * Corentis Consulting Group — Theme Functions
 *
 * @package Corentis
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Theme version
define( 'CORENTIS_VERSION', '1.7.0' );

/**
 * Theme Setup
 */
function corentis_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'corentis' ),
    ) );
}
add_action( 'after_setup_theme', 'corentis_setup' );

/**
 * Enqueue Styles & Scripts
 */
function corentis_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'corentis-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'corentis-style',
        get_template_directory_uri() . '/css/style.css',
        array( 'corentis-google-fonts' ),
        CORENTIS_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'corentis-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        CORENTIS_VERSION,
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'corentis_scripts' );

/**
 * Remove Google Fonts @import from CSS (loaded via wp_enqueue instead)
 */
function corentis_remove_css_import( $html, $handle ) {
    return $html;
}

/**
 * Helper: Get theme image URL
 */
function corentis_img( $filename ) {
    return get_template_directory_uri() . '/images/' . $filename;
}

/**
 * Helper: Get theme PDF URL
 */
function corentis_pdf( $filename ) {
    return get_template_directory_uri() . '/pdf/' . $filename;
}

/**
 * Helper: Get page URL by slug
 */
function corentis_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return get_permalink( $page->ID );
    }
    return home_url( '/' . $slug . '/' );
}

/**
 * Auto-create pages on theme activation
 */
function corentis_activate_theme() {
    require_once get_template_directory() . '/inc/setup-pages.php';
    corentis_create_pages();
}
add_action( 'after_switch_theme', 'corentis_activate_theme' );

/**
 * Remove WordPress toolbar margin on front-end
 */
function corentis_admin_bar_fix() {
    if ( is_admin_bar_showing() ) {
        echo '<style>html.has-topbar { margin-top: 0 !important; } #wpadminbar { position: fixed !important; }</style>';
    }
}
add_action( 'wp_head', 'corentis_admin_bar_fix' );

/**
 * Auto-create Bulletin d'Inscription page in WordPress database if missing
 */
add_action( 'init', 'corentis_ensure_bulletin_page_exists' );
function corentis_ensure_bulletin_page_exists() {
    $slug = 'bulletin-inscription';
    $page = get_page_by_path( $slug );
    if ( ! $page ) {
        $page_id = wp_insert_post( array(
            'post_title'     => "Bulletin d'Inscription",
            'post_name'      => $slug,
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
        ) );
        if ( $page_id && ! is_wp_error( $page_id ) ) {
            update_post_meta( $page_id, '_wp_page_template', 'page-templates/page-bulletin-inscription.php' );
        }
    }
}

/**
 * Direct template fallback for Bulletin d'Inscription
 */
add_filter( 'template_include', 'corentis_bulletin_template_direct', 99 );
function corentis_bulletin_template_direct( $template ) {
    $req = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';
    if ( is_page( 'bulletin-inscription' ) || is_page( 'bulletin-d-inscription' ) || strpos( $req, 'bulletin-inscription' ) !== false ) {
        $custom = get_template_directory() . '/page-templates/page-bulletin-inscription.php';
        if ( file_exists( $custom ) ) {
            global $wp_query;
            if ( $wp_query ) {
                $wp_query->is_404 = false;
                status_header( 200 );
            }
            return $custom;
        }
    }
    return $template;
}

/**
 * Handle Bulletin d'Inscription Form Submission
 */
add_action( 'wp_ajax_corentis_submit_bulletin', 'corentis_handle_bulletin_submission' );
add_action( 'wp_ajax_nopriv_corentis_submit_bulletin', 'corentis_handle_bulletin_submission' );
add_action( 'admin_post_corentis_submit_bulletin', 'corentis_handle_bulletin_submission' );
add_action( 'admin_post_nopriv_corentis_submit_bulletin', 'corentis_handle_bulletin_submission' );

function corentis_handle_bulletin_submission() {
    $theme = isset( $_POST['theme'] ) ? sanitize_text_field( $_POST['theme'] ) : '';
    $date_sem = isset( $_POST['date_seminaire'] ) ? sanitize_text_field( $_POST['date_seminaire'] ) : '';
    $lieu_sem = isset( $_POST['lieu_seminaire'] ) ? sanitize_text_field( $_POST['lieu_seminaire'] ) : '';

    $entreprise_nom = isset( $_POST['entreprise_nom'] ) ? sanitize_text_field( $_POST['entreprise_nom'] ) : '';
    $entreprise_mf = isset( $_POST['matricule_fiscal'] ) ? sanitize_text_field( $_POST['matricule_fiscal'] ) : '';
    $entreprise_adresse = isset( $_POST['entreprise_adresse'] ) ? sanitize_text_field( $_POST['entreprise_adresse'] ) : '';
    $entreprise_tel = isset( $_POST['entreprise_tel'] ) ? sanitize_text_field( $_POST['entreprise_tel'] ) : '';
    $entreprise_fax = isset( $_POST['entreprise_fax'] ) ? sanitize_text_field( $_POST['entreprise_fax'] ) : '';
    $entreprise_email = isset( $_POST['entreprise_email'] ) ? sanitize_email( $_POST['entreprise_email'] ) : '';

    $resp_nom = isset( $_POST['responsable_nom'] ) ? sanitize_text_field( $_POST['responsable_nom'] ) : '';
    $resp_adresse = isset( $_POST['responsable_adresse'] ) ? sanitize_text_field( $_POST['responsable_adresse'] ) : '';
    $resp_tel = isset( $_POST['responsable_tel'] ) ? sanitize_text_field( $_POST['responsable_tel'] ) : '';
    $resp_fax = isset( $_POST['responsable_fax'] ) ? sanitize_text_field( $_POST['responsable_fax'] ) : '';
    $resp_email = isset( $_POST['responsable_email'] ) ? sanitize_email( $_POST['responsable_email'] ) : '';

    $signataire_nom = isset( $_POST['signataire_nom'] ) ? sanitize_text_field( $_POST['signataire_nom'] ) : '';

    $participants_html = '';
    if ( ! empty( $_POST['participant_nom'] ) && is_array( $_POST['participant_nom'] ) ) {
        $noms = $_POST['participant_nom'];
        $fonctions = isset( $_POST['participant_fonction'] ) ? $_POST['participant_fonction'] : array();
        $emails = isset( $_POST['participant_email'] ) ? $_POST['participant_email'] : array();
        $gsms = isset( $_POST['participant_gsm'] ) ? $_POST['participant_gsm'] : array();

        $participants_html .= '<table border="1" cellpadding="8" cellspacing="0" style="border-collapse:collapse;width:100%;font-family:sans-serif;font-size:14px;margin-top:10px;">';
        $participants_html .= '<tr style="background:#0f1e40;color:#ffffff;"><th>N°</th><th>Nom & Prénom</th><th>Fonction</th><th>Email</th><th>GSM</th></tr>';
        $idx = 1;
        for ( $i = 0; $i < count( $noms ); $i++ ) {
            $nom = sanitize_text_field( $noms[$i] );
            if ( empty( $nom ) ) continue;
            $fonc = isset( $fonctions[$i] ) ? sanitize_text_field( $fonctions[$i] ) : '';
            $em = isset( $emails[$i] ) ? sanitize_email( $emails[$i] ) : '';
            $gsm = isset( $gsms[$i] ) ? sanitize_text_field( $gsms[$i] ) : '';

            $participants_html .= "<tr><td align='center'><strong>{$idx}</strong></td><td>{$nom}</td><td>{$fonc}</td><td>{$em}</td><td>{$gsm}</td></tr>";
            $idx++;
        }
        $participants_html .= '</table>';
    }

    $to = 'manager@corentis-consulting.com.tn';
    $subject = "Nouveau Bulletin d'Inscription : " . ( $theme ? $theme : 'Formation' ) . " — " . $entreprise_nom;

    $message = "<html><body style='font-family:Arial,sans-serif;color:#1e293b;line-height:1.6;'>";
    $message .= "<div style='max-width:700px;margin:0 auto;border:1px solid #cbd5e1;border-radius:10px;padding:25px;'>";
    $message .= "<h2 style='color:#1e3a8a;border-bottom:2px solid #2563eb;padding-bottom:8px;margin-top:0;'>Nouveau Bulletin d'Inscription - Formation</h2>";
    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>1. Participation au séminaire</h3>";
    $message .= "<p style='background:#f8fafc;padding:12px;border-radius:8px;'><strong>Thème :</strong> {$theme}<br><strong>Date :</strong> {$date_sem}<br><strong>Lieu :</strong> {$lieu_sem}</p>";
    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>2. Participants inscrits</h3>" . $participants_html;
    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;margin-top:20px;'>3. Coordonnées de l'entreprise</h3>";
    $message .= "<p style='background:#f8fafc;padding:12px;border-radius:8px;'><strong>Raison sociale :</strong> {$entreprise_nom}<br><strong>Matricule Fiscal :</strong> {$entreprise_mf}<br><strong>Adresse :</strong> {$entreprise_adresse}<br><strong>Tél :</strong> {$entreprise_tel} | <strong>Fax :</strong> {$entreprise_fax}<br><strong>Email :</strong> <a href='mailto:{$entreprise_email}'>{$entreprise_email}</a></p>";
    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>4. Responsable Formation</h3>";
    $message .= "<p style='background:#f8fafc;padding:12px;border-radius:8px;'><strong>Nom :</strong> {$resp_nom}<br><strong>Adresse :</strong> {$resp_adresse}<br><strong>Tél :</strong> {$resp_tel} | <strong>Fax :</strong> {$resp_fax}<br><strong>Email :</strong> <a href='mailto:{$resp_email}'>{$resp_email}</a></p>";
    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>5. Validation & Cachet</h3>";
    $message .= "<p style='background:#f8fafc;padding:12px;border-radius:8px;'><strong>Signataire :</strong> {$signataire_nom}<br><strong>Date :</strong> " . date('d/m/Y') . "</p>";
    $message .= "</div></body></html>";

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Corentis Web <no-reply@corentis-consulting.com.tn>',
    );
    if ( ! empty( $entreprise_email ) ) {
        $headers[] = 'Reply-To: ' . $entreprise_email;
    }

    @wp_mail( $to, $subject, $message, $headers );

    if ( function_exists( 'wp_doing_ajax' ) && wp_doing_ajax() ) {
        wp_send_json_success( array( 'message' => 'Bulletin envoyé avec succès à manager@corentis-consulting.com.tn' ) );
    } else {
        wp_redirect( add_query_arg( 'sent', '1', wp_get_referer() ) );
        exit;
    }
}
