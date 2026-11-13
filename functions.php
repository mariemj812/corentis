<?php
/**
 * Corentis Consulting Group — Theme Functions
 *
 * @package Corentis
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Theme version
define( 'CORENTIS_VERSION', '1.7.5' );

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

    wp_localize_script(
        'corentis-main',
        'corentisData',
        array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        )
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
 * Auto-create custom pages in WordPress database if missing
 */
add_action( 'init', 'corentis_ensure_custom_pages_exist' );
function corentis_ensure_custom_pages_exist() {
    $pages_to_ensure = array(
        'bulletin-inscription' => array(
            'title'    => "Bulletin d'Inscription",
            'template' => 'page-templates/page-bulletin-inscription.php',
        ),
        'conseil-rh' => array(
            'title'    => "Conseil Ressources Humaines",
            'template' => 'page-templates/page-conseil-rh.php',
        ),
        'accompagnement-entreprise' => array(
            'title'    => "Accompagnement de l'Entreprise",
            'template' => 'page-templates/page-accompagnement-entreprise.php',
        ),
        'conseil-comptabilite' => array(
            'title'    => "Conseil Comptabilité",
            'template' => 'page-templates/page-accompagnement-entreprise.php',
        ),
        'audit-diagnostic-entreprise' => array(
            'title'    => "Audit & Diagnostic d'Entreprise",
            'template' => 'page-templates/page-audit-diagnostic-entreprise.php',
        ),
    );

    foreach ( $pages_to_ensure as $slug => $data ) {
        $page = get_page_by_path( $slug );
        if ( ! $page ) {
            $page_id = wp_insert_post( array(
                'post_title'     => $data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            }
        }
    }
}

/**
 * Direct template fallback for custom pages
 */
add_filter( 'template_include', 'corentis_custom_templates_direct', 99 );
function corentis_custom_templates_direct( $template ) {
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

    if ( is_page( 'conseil-rh' ) || strpos( $req, 'conseil-rh' ) !== false ) {
        $custom = get_template_directory() . '/page-templates/page-conseil-rh.php';
        if ( file_exists( $custom ) ) {
            global $wp_query;
            if ( $wp_query ) {
                $wp_query->is_404 = false;
                status_header( 200 );
            }
            return $custom;
        }
    }

    if ( is_page( 'accompagnement-entreprise' ) || is_page( 'conseil-comptabilite' ) || strpos( $req, 'accompagnement-entreprise' ) !== false || strpos( $req, 'conseil-comptabilite' ) !== false ) {
        $custom = get_template_directory() . '/page-templates/page-accompagnement-entreprise.php';
        if ( file_exists( $custom ) ) {
            global $wp_query;
            if ( $wp_query ) {
                $wp_query->is_404 = false;
                status_header( 200 );
            }
            return $custom;
        }
    }

    if ( is_page( 'audit-diagnostic-entreprise' ) || is_page( 'audit-diagnostic' ) || strpos( $req, 'audit-diagnostic-entreprise' ) !== false || strpos( $req, 'audit-diagnostic' ) !== false ) {
        $custom = get_template_directory() . '/page-templates/page-audit-diagnostic-entreprise.php';
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

/**
 * Handle Devis & Pré-diagnostic Form Submission -> manager@corentis-consulting.com.tn
 */
add_action( 'wp_ajax_corentis_submit_devis', 'corentis_handle_devis_submission' );
add_action( 'wp_ajax_nopriv_corentis_submit_devis', 'corentis_handle_devis_submission' );
add_action( 'admin_post_corentis_submit_devis', 'corentis_handle_devis_submission' );
add_action( 'admin_post_nopriv_corentis_submit_devis', 'corentis_handle_devis_submission' );

function corentis_handle_devis_submission() {
    $raison_sociale = isset( $_POST['raison_sociale'] ) ? sanitize_text_field( $_POST['raison_sociale'] ) : '';
    $adresse_siege = isset( $_POST['adresse_siege'] ) ? sanitize_text_field( $_POST['adresse_siege'] ) : '';
    $sites_projet = isset( $_POST['sites_projet'] ) ? sanitize_text_field( $_POST['sites_projet'] ) : '';
    $contact_personne = isset( $_POST['contact_personne'] ) ? sanitize_text_field( $_POST['contact_personne'] ) : '';
    $telephone = isset( $_POST['telephone'] ) ? sanitize_text_field( $_POST['telephone'] ) : '';
    $email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
    $site_web = isset( $_POST['site_web'] ) ? sanitize_text_field( $_POST['site_web'] ) : '';
    $effectif_total = isset( $_POST['effectif_total'] ) ? sanitize_text_field( $_POST['effectif_total'] ) : '';
    $nb_sites = isset( $_POST['nb_sites'] ) ? sanitize_text_field( $_POST['nb_sites'] ) : '';
    $effectif_par_site = isset( $_POST['effectif_par_site'] ) ? sanitize_text_field( $_POST['effectif_par_site'] ) : '';

    $activite_principale = isset( $_POST['activite_principale'] ) ? sanitize_textarea_field( $_POST['activite_principale'] ) : '';
    $processus = isset( $_POST['processus'] ) && is_array( $_POST['processus'] ) ? array_map( 'sanitize_text_field', $_POST['processus'] ) : array();
    $processus_autre = isset( $_POST['processus_autre'] ) ? sanitize_text_field( $_POST['processus_autre'] ) : '';
    $produits_services = isset( $_POST['produits_services'] ) ? sanitize_textarea_field( $_POST['produits_services'] ) : '';
    $marches = isset( $_POST['marches'] ) && is_array( $_POST['marches'] ) ? array_map( 'sanitize_text_field', $_POST['marches'] ) : array();
    $marches_autre = isset( $_POST['marches_autre'] ) ? sanitize_text_field( $_POST['marches_autre'] ) : '';

    $objectifs = isset( $_POST['objectifs'] ) && is_array( $_POST['objectifs'] ) ? array_map( 'sanitize_text_field', $_POST['objectifs'] ) : array();
    $objectifs_autre = isset( $_POST['objectifs_autre'] ) ? sanitize_text_field( $_POST['objectifs_autre'] ) : '';
    $echeance_choix = isset( $_POST['echeance_choix'] ) ? sanitize_text_field( $_POST['echeance_choix'] ) : 'non';
    $date_souhaitee = isset( $_POST['date_souhaitee'] ) ? sanitize_text_field( $_POST['date_souhaitee'] ) : '';

    $referentiels = isset( $_POST['referentiels'] ) && is_array( $_POST['referentiels'] ) ? array_map( 'sanitize_text_field', $_POST['referentiels'] ) : array();
    $referentiel_autre = isset( $_POST['referentiel_autre'] ) ? sanitize_text_field( $_POST['referentiel_autre'] ) : '';

    $systeme_formalise = isset( $_POST['systeme_formalise'] ) ? sanitize_text_field( $_POST['systeme_formalise'] ) : '';
    $certifie_choix = isset( $_POST['certifie_choix'] ) ? sanitize_text_field( $_POST['certifie_choix'] ) : 'non';
    $certif_referentiels = isset( $_POST['certif_referentiels'] ) ? sanitize_text_field( $_POST['certif_referentiels'] ) : '';
    $certif_organisme = isset( $_POST['certif_organisme'] ) ? sanitize_text_field( $_POST['certif_organisme'] ) : '';
    $certif_date_initiale = isset( $_POST['certif_date_initiale'] ) ? sanitize_text_field( $_POST['certif_date_initiale'] ) : '';
    $certif_prochain_audit = isset( $_POST['certif_prochain_audit'] ) ? sanitize_text_field( $_POST['certif_prochain_audit'] ) : '';

    $audit_choix = isset( $_POST['audit_choix'] ) ? sanitize_text_field( $_POST['audit_choix'] ) : 'non';
    $audit_details = isset( $_POST['audit_details'] ) ? sanitize_text_field( $_POST['audit_details'] ) : '';
    $ecarts_choix = isset( $_POST['ecarts_choix'] ) ? sanitize_text_field( $_POST['ecarts_choix'] ) : 'non';
    $ecarts_details = isset( $_POST['ecarts_details'] ) ? sanitize_textarea_field( $_POST['ecarts_details'] ) : '';

    $pilote_choix = isset( $_POST['pilote_choix'] ) ? sanitize_text_field( $_POST['pilote_choix'] ) : 'non';
    $pilote_nom_fonction = isset( $_POST['pilote_nom_fonction'] ) ? sanitize_text_field( $_POST['pilote_nom_fonction'] ) : '';
    $equipe_choix = isset( $_POST['equipe_choix'] ) ? sanitize_text_field( $_POST['equipe_choix'] ) : 'a_definir';
    $equipe_nb_personnes = isset( $_POST['equipe_nb_personnes'] ) ? sanitize_text_field( $_POST['equipe_nb_personnes'] ) : '';

    $signataire_nom = isset( $_POST['signataire_nom'] ) ? sanitize_text_field( $_POST['signataire_nom'] ) : '';
    $date_transmission = isset( $_POST['date_transmission'] ) ? sanitize_text_field( $_POST['date_transmission'] ) : date('d/m/Y');

    $to = 'manager@corentis-consulting.com.tn';
    $ref_str = ! empty( $referentiels ) ? implode( ', ', $referentiels ) : ( $referentiel_autre ?: 'ISO' );
    $subject = "Demande de Devis & Pré-diagnostic : " . ( $raison_sociale ?: 'Entreprise' ) . " — " . $ref_str;

    $message = "<html><body style='font-family:Arial,sans-serif;color:#1e293b;line-height:1.6;'>";
    $message .= "<div style='max-width:750px;margin:0 auto;border:1px solid #cbd5e1;border-radius:10px;padding:25px;'>";
    $message .= "<h2 style='color:#1e3a8a;border-bottom:2px solid #2563eb;padding-bottom:8px;margin-top:0;'>Nouvelle Demande de Devis & Questionnaire de Pré-Diagnostic</h2>";

    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>01. Informations Générales sur l'Entreprise</h3>";
    $message .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:14px;background:#f8fafc;margin-bottom:15px;'>";
    $message .= "<tr><td width='35%'><strong>Raison sociale</strong></td><td>{$raison_sociale}</td></tr>";
    $message .= "<tr><td><strong>Adresse du siège</strong></td><td>{$adresse_siege}</td></tr>";
    $message .= "<tr><td><strong>Sites concernés</strong></td><td>{$sites_projet}</td></tr>";
    $message .= "<tr><td><strong>Contact principal</strong></td><td>{$contact_personne}</td></tr>";
    $message .= "<tr><td><strong>Téléphone</strong></td><td>{$telephone}</td></tr>";
    $message .= "<tr><td><strong>Email</strong></td><td><a href='mailto:{$email}'>{$email}</a></td></tr>";
    $message .= "<tr><td><strong>Site web</strong></td><td>{$site_web}</td></tr>";
    $message .= "<tr><td><strong>Effectif total</strong></td><td>{$effectif_total}</td></tr>";
    $message .= "<tr><td><strong>Nombre de sites / Effectif</strong></td><td>{$nb_sites} (Détail: {$effectif_par_site})</td></tr>";
    $message .= "</table>";

    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>02. Activités de l'Entreprise</h3>";
    $message .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:14px;background:#f8fafc;margin-bottom:15px;'>";
    $message .= "<tr><td width='35%'><strong>Activité principale</strong></td><td>" . nl2br( $activite_principale ) . "</td></tr>";
    $proc_list = implode( ', ', $processus ) . ( $processus_autre ? " (Autre: {$processus_autre})" : '' );
    $message .= "<tr><td><strong>Processus concernés</strong></td><td>{$proc_list}</td></tr>";
    $message .= "<tr><td><strong>Produits / Services</strong></td><td>" . nl2br( $produits_services ) . "</td></tr>";
    $mar_list = implode( ', ', $marches ) . ( $marches_autre ? " (Autre: {$marches_autre})" : '' );
    $message .= "<tr><td><strong>Marchés / Clients</strong></td><td>{$mar_list}</td></tr>";
    $message .= "</table>";

    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>03. Objectif du Projet & Référentiels</h3>";
    $message .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:14px;background:#f8fafc;margin-bottom:15px;'>";
    $obj_list = implode( ', ', $objectifs ) . ( $objectifs_autre ? " (Autre: {$objectifs_autre})" : '' );
    $message .= "<tr><td width='35%'><strong>Objectifs visés</strong></td><td>{$obj_list}</td></tr>";
    $message .= "<tr><td><strong>Échéance particulière</strong></td><td>{$echeance_choix}" . ( $echeance_choix === 'oui' ? " — Date souhaitée : {$date_souhaitee}" : '' ) . "</td></tr>";
    $ref_full = implode( ', ', $referentiels ) . ( $referentiel_autre ? " (Autre: {$referentiel_autre})" : '' );
    $message .= "<tr><td><strong>Référentiel(s) ISO concerné(s)</strong></td><td><strong style='color:#1e3a8a;font-size:15px;'>{$ref_full}</strong></td></tr>";
    $message .= "</table>";

    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>04. Situation Actuelle & Historique</h3>";
    $message .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:14px;background:#f8fafc;margin-bottom:15px;'>";
    $message .= "<tr><td width='35%'><strong>Système formalisé</strong></td><td>{$systeme_formalise}</td></tr>";
    $message .= "<tr><td><strong>Actuellement certifié</strong></td><td>{$certifie_choix}" . ( $certifie_choix === 'oui' ? " (Norme: {$certif_referentiels}, Certificateur: {$certif_organisme}, Initiale: {$certif_date_initiale}, Prochain audit: {$certif_prochain_audit})" : '' ) . "</td></tr>";
    $message .= "<tr><td><strong>Diagnostic antérieur</strong></td><td>{$audit_choix}" . ( $audit_choix === 'oui' ? " ({$audit_details})" : '' ) . "</td></tr>";
    $message .= "<tr><td><strong>Écarts ou non-conformités</strong></td><td>{$ecarts_choix}" . ( $ecarts_choix === 'oui' ? " : " . nl2br($ecarts_details) : '' ) . "</td></tr>";
    $message .= "</table>";

    $message .= "<h3 style='color:#0f2756;margin-bottom:6px;'>05. Pilotage & Déclarant</h3>";
    $message .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:14px;background:#f8fafc;margin-bottom:15px;'>";
    $message .= "<tr><td width='35%'><strong>Pilote interne désigné</strong></td><td>{$pilote_choix}" . ( $pilote_choix === 'oui' ? " ({$pilote_nom_fonction})" : '' ) . "</td></tr>";
    $message .= "<tr><td><strong>Équipe projet</strong></td><td>{$equipe_choix}" . ( !empty($equipe_nb_personnes) ? " ({$equipe_nb_personnes})" : '' ) . "</td></tr>";
    $message .= "<tr><td><strong>Déclarant certifié</strong></td><td><strong>{$signataire_nom}</strong></td></tr>";
    $message .= "<tr><td><strong>Date de transmission</strong></td><td>{$date_transmission}</td></tr>";
    $message .= "</table>";

    $message .= "</div></body></html>";

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Corentis Web <no-reply@corentis-consulting.com.tn>',
    );
    if ( ! empty( $email ) ) {
        $headers[] = 'Reply-To: ' . $email;
    }

    @wp_mail( $to, $subject, $message, $headers );

    if ( function_exists( 'wp_doing_ajax' ) && wp_doing_ajax() ) {
        wp_send_json_success( array( 'message' => 'Questionnaire envoyé avec succès à manager@corentis-consulting.com.tn' ) );
    } else {
        wp_redirect( add_query_arg( 'sent', '1', wp_get_referer() ) );
        exit;
    }
}

/**
 * Handle Contact Form Submission -> contact@corentis-consulting.com.tn
 */
add_action( 'wp_ajax_corentis_submit_contact', 'corentis_handle_contact_submission' );
add_action( 'wp_ajax_nopriv_corentis_submit_contact', 'corentis_handle_contact_submission' );
add_action( 'admin_post_corentis_submit_contact', 'corentis_handle_contact_submission' );
add_action( 'admin_post_nopriv_corentis_submit_contact', 'corentis_handle_contact_submission' );

function corentis_handle_contact_submission() {
    $nom = isset( $_POST['nom'] ) ? sanitize_text_field( $_POST['nom'] ) : '';
    $prenom = isset( $_POST['prenom'] ) ? sanitize_text_field( $_POST['prenom'] ) : '';
    $email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
    $sujet = isset( $_POST['sujet'] ) ? sanitize_text_field( $_POST['sujet'] ) : 'Demande générale';
    $message_body = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

    $to = 'contact@corentis-consulting.com.tn';
    $subject = "Nouveau Message de Contact : " . ucfirst( $sujet ) . " — {$prenom} {$nom}";

    $message = "<html><body style='font-family:Arial,sans-serif;color:#1e293b;line-height:1.6;'>";
    $message .= "<div style='max-width:650px;margin:0 auto;border:1px solid #cbd5e1;border-radius:10px;padding:25px;'>";
    $message .= "<h2 style='color:#1e3a8a;border-bottom:2px solid #2563eb;padding-bottom:8px;margin-top:0;'>Nouveau Message de Contact</h2>";
    $message .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:14px;background:#f8fafc;margin-bottom:15px;'>";
    $message .= "<tr><td width='30%'><strong>Expéditeur</strong></td><td>{$prenom} {$nom}</td></tr>";
    $message .= "<tr><td><strong>Email</strong></td><td><a href='mailto:{$email}'>{$email}</a></td></tr>";
    $message .= "<tr><td><strong>Sujet</strong></td><td>" . htmlspecialchars( $sujet ) . "</td></tr>";
    $message .= "<tr><td><strong>Date</strong></td><td>" . date( 'd/m/Y H:i' ) . "</td></tr>";
    $message .= "</table>";
    $message .= "<h3 style='color:#0f2756;margin-bottom:8px;'>Message :</h3>";
    $message .= "<div style='background:#f1f5f9;padding:16px;border-radius:8px;font-size:14px;white-space:pre-wrap;border-left:4px solid #2563eb;'>" . htmlspecialchars( $message_body ) . "</div>";
    $message .= "</div></body></html>";

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Corentis Web <no-reply@corentis-consulting.com.tn>',
    );
    if ( ! empty( $email ) ) {
        $headers[] = 'Reply-To: ' . $email;
    }

    @wp_mail( $to, $subject, $message, $headers );

    if ( function_exists( 'wp_doing_ajax' ) && wp_doing_ajax() ) {
        wp_send_json_success( array( 'message' => 'Message envoyé avec succès à contact@corentis-consulting.com.tn' ) );
    } else {
        wp_redirect( add_query_arg( 'sent', '1', wp_get_referer() ) );
        exit;
    }
}
