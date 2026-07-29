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
  <link rel="icon" href="<?php echo corentis_img( 'logo.png' ); ?>" type="image/png">
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
          <span>Tunisie</span>
        </div>
        <div class="top-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>+216 XX XXX XXX</span>
        </div>
        <div class="top-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <span>contact@corentis-consulting.com</span>
        </div>
      </div>
      <div class="top-bar-right">
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
        <img src="<?php echo corentis_img( 'logo.png' ); ?>" alt="Corentis Consulting Group">
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
