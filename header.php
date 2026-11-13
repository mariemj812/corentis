<?php
/**
 * Header Template — Corentis Consulting Group
 *
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="has-topbar">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo corentis_img( 'logo-transparent.png' ); ?>" type="image/png">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ========== TOP BAR ========== -->
  <div class="top-bar" id="top-bar">
    <div class="container">
      <div class="top-bar-left">
        <div class="top-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>3 rue Beyrouth, Lafayette, 1002 Tunis</span>
        </div>
        <div class="top-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <a href="tel:+21671781781" style="color:inherit;text-decoration:none;">+216 71 781 781</a>
          <span style="opacity:0.4;margin:0 4px;">/</span>
          <a href="tel:+21625295574" style="color:inherit;text-decoration:none;">+216 25 29 55 74</a>
        </div>
        <div class="top-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <a href="mailto:contact@corentis-consulting.com.tn" style="color:inherit;text-decoration:none;">contact@corentis-consulting.com.tn</a>
        </div>
      </div>
      <div class="top-bar-right">
        <a href="https://wa.me/21625295574" target="_blank" rel="noopener" aria-label="WhatsApp" title="Discuter sur WhatsApp" style="display:inline-flex;align-items:center;gap:6px;color:#25d366;font-weight:600;font-size:0.82rem;text-decoration:none;margin-right:12px;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          <span>WhatsApp</span>
        </a>
        <a href="#" aria-label="LinkedIn" title="LinkedIn">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
        <a href="#" aria-label="Facebook" title="Facebook">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar<?php if ( ! is_front_page() ) echo ' scrolled'; ?>" id="main-nav">
    <div class="container">
      <a href="<?php echo home_url( '/' ); ?>" class="nav-logo">
        <img src="<?php echo corentis_img( 'logo-transparent.png' ); ?>" alt="Corentis Consulting Group">
      </a>
      <ul class="nav-links" id="nav-links">
        <li><a href="<?php echo home_url( '/' ); ?>"<?php if ( is_front_page() ) echo ' class="active"'; ?>>Accueil</a></li>
        <li><a href="<?php echo corentis_page_url( 'qui-sommes-nous' ); ?>"<?php if ( is_page( 'qui-sommes-nous' ) ) echo ' class="active"'; ?>>Qui sommes-nous</a></li>
        <li><a href="<?php echo corentis_page_url( 'formation' ); ?>"<?php if ( is_page( 'formation' ) ) echo ' class="active"'; ?>>Formation</a></li>
        <li>
          <a href="<?php echo corentis_page_url( 'conseil' ); ?>"<?php if ( is_page( array('conseil','conseil-qualite','conseil-environnement','conseil-sst','conseil-hygiene','conseil-social','conseil-digital','conseil-autres') ) ) echo ' class="active"'; ?>>Conseil <span class="arrow">▼</span></a>
          <div class="dropdown">
            <a href="<?php echo corentis_page_url( 'conseil-qualite' ); ?>">Qualité</a>
            <a href="<?php echo corentis_page_url( 'conseil-environnement' ); ?>">Environnement</a>
            <a href="<?php echo corentis_page_url( 'conseil-sst' ); ?>">Santé &amp; Sécurité au travail</a>
            <a href="<?php echo corentis_page_url( 'conseil-hygiene' ); ?>">Hygiène &amp; Alimentation</a>
            <a href="<?php echo corentis_page_url( 'conseil-social' ); ?>">Social</a>
            <a href="<?php echo corentis_page_url( 'conseil-digital' ); ?>">Marketing Digital &amp; Création Web</a>
            <a href="<?php echo corentis_page_url( 'conseil-autres' ); ?>">Autres domaines</a>
          </div>
        </li>
        <li>
          <a href="<?php echo corentis_page_url( 'audit' ); ?>"<?php if ( is_page( array('audit','audit-qualite','audit-environnement','audit-sst','audit-qhse','audit-social','audit-agroalimentaire') ) ) echo ' class="active"'; ?>>Audit <span class="arrow">▼</span></a>
          <div class="dropdown">
            <a href="<?php echo corentis_page_url( 'audit-qualite' ); ?>">Audit Qualité</a>
            <a href="<?php echo corentis_page_url( 'audit-environnement' ); ?>">Audit Environnement</a>
            <a href="<?php echo corentis_page_url( 'audit-sst' ); ?>">Audit SST</a>
            <a href="<?php echo corentis_page_url( 'audit-qhse' ); ?>">Audit intégré QHSE</a>
            <a href="<?php echo corentis_page_url( 'audit-social' ); ?>">Audit Social</a>
            <a href="<?php echo corentis_page_url( 'audit-agroalimentaire' ); ?>">Audit Agroalimentaire</a>
          </div>
        </li>
        <li><a href="<?php echo corentis_page_url( 'devis' ); ?>"<?php if ( is_page( 'devis' ) ) echo ' class="active"'; ?>>Devis</a></li>
        <li><a href="<?php echo corentis_page_url( 'contact' ); ?>"<?php if ( is_page( 'contact' ) ) echo ' class="active"'; ?>>Contact</a></li>
      </ul>
      <div class="nav-toggle" id="nav-toggle">
        <span></span><span></span><span></span>
      </div>
    </div>
  </nav>
