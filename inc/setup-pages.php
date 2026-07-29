<?php
/**
 * Auto-create WordPress pages on theme activation
 *
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function corentis_create_pages() {
    // Define all pages: slug => [title, template, parent_slug]
    $pages = array(
        'qui-sommes-nous' => array(
            'title'    => 'Qui sommes-nous',
            'template' => 'page-templates/page-qui-sommes-nous.php',
            'parent'   => '',
        ),
        'formation' => array(
            'title'    => 'Formation',
            'template' => 'page-templates/page-formation.php',
            'parent'   => '',
        ),
        'conseil' => array(
            'title'    => 'Conseil',
            'template' => 'page-templates/page-conseil.php',
            'parent'   => '',
        ),
        'conseil-qualite' => array(
            'title'    => 'Conseil Qualité',
            'template' => 'page-templates/page-conseil-qualite.php',
            'parent'   => 'conseil',
        ),
        'conseil-environnement' => array(
            'title'    => 'Conseil Environnement',
            'template' => 'page-templates/page-conseil-environnement.php',
            'parent'   => 'conseil',
        ),
        'conseil-sst' => array(
            'title'    => 'Conseil SST',
            'template' => 'page-templates/page-conseil-sst.php',
            'parent'   => 'conseil',
        ),
        'conseil-hygiene' => array(
            'title'    => 'Conseil Hygiène',
            'template' => 'page-templates/page-conseil-hygiene.php',
            'parent'   => 'conseil',
        ),
        'conseil-social' => array(
            'title'    => 'Conseil Social',
            'template' => 'page-templates/page-conseil-social.php',
            'parent'   => 'conseil',
        ),
        'conseil-digital' => array(
            'title'    => 'Conseil Digital',
            'template' => 'page-templates/page-conseil-digital.php',
            'parent'   => 'conseil',
        ),
        'conseil-autres' => array(
            'title'    => 'Conseil Autres',
            'template' => 'page-templates/page-conseil-autres.php',
            'parent'   => 'conseil',
        ),
        'audit' => array(
            'title'    => 'Audit',
            'template' => 'page-templates/page-audit.php',
            'parent'   => '',
        ),
        'audit-qualite' => array(
            'title'    => 'Audit Qualité',
            'template' => 'page-templates/page-audit-qualite.php',
            'parent'   => 'audit',
        ),
        'audit-environnement' => array(
            'title'    => 'Audit Environnement',
            'template' => 'page-templates/page-audit-environnement.php',
            'parent'   => 'audit',
        ),
        'audit-sst' => array(
            'title'    => 'Audit SST',
            'template' => 'page-templates/page-audit-sst.php',
            'parent'   => 'audit',
        ),
        'audit-qhse' => array(
            'title'    => 'Audit QHSE',
            'template' => 'page-templates/page-audit-qhse.php',
            'parent'   => 'audit',
        ),
        'audit-social' => array(
            'title'    => 'Audit Social',
            'template' => 'page-templates/page-audit-social.php',
            'parent'   => 'audit',
        ),
        'audit-agroalimentaire' => array(
            'title'    => 'Audit Agroalimentaire',
            'template' => 'page-templates/page-audit-agroalimentaire.php',
            'parent'   => 'audit',
        ),
        'devis' => array(
            'title'    => 'Demander un Devis',
            'template' => 'page-templates/page-devis.php',
            'parent'   => '',
        ),
        'contact' => array(
            'title'    => 'Contact',
            'template' => 'page-templates/page-contact.php',
            'parent'   => '',
        ),
    );

    // Store created page IDs for parent resolution
    $created_ids = array();

    // First pass: create pages without parents
    foreach ( $pages as $slug => $data ) {
        if ( ! empty( $data['parent'] ) ) continue;
        $created_ids[ $slug ] = corentis_create_single_page( $slug, $data['title'], $data['template'], 0 );
    }

    // Second pass: create pages with parents
    foreach ( $pages as $slug => $data ) {
        if ( empty( $data['parent'] ) ) continue;
        $parent_id = isset( $created_ids[ $data['parent'] ] ) ? $created_ids[ $data['parent'] ] : 0;
        $created_ids[ $slug ] = corentis_create_single_page( $slug, $data['title'], $data['template'], $parent_id );
    }

    // Set the front page to display a static page
    $front_page = get_page_by_path( 'accueil' );
    if ( ! $front_page ) {
        $front_id = wp_insert_post( array(
            'post_title'   => 'Accueil',
            'post_name'    => 'accueil',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ) );
    } else {
        $front_id = $front_page->ID;
    }

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_id );

    // Flush rewrite rules
    flush_rewrite_rules();
}

function corentis_create_single_page( $slug, $title, $template, $parent_id ) {
    // Check if page already exists
    $existing = get_page_by_path( $slug );
    if ( $existing ) {
        // Update template if needed
        update_post_meta( $existing->ID, '_wp_page_template', $template );
        return $existing->ID;
    }

    // Create the page
    $page_id = wp_insert_post( array(
        'post_title'   => $title,
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_parent'  => $parent_id,
        'post_content' => '',
    ) );

    if ( $page_id && ! is_wp_error( $page_id ) ) {
        update_post_meta( $page_id, '_wp_page_template', $template );
    }

    return $page_id;
}
