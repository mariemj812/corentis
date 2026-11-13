<?php
/**
 * Template Name: Conseil
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('hero.png'); ?>')">
    <div class="container">
      <h1>Conseil</h1>
      <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><span>Conseil</span></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos domaines de conseil</h2>
        <p>Corentis Consulting Group accompagne les entreprises dans la mise en place de leurs systèmes de management et intervient dans plusieurs secteurs d'activités.</p>
      </div>
      <div class="services-grid">
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Qualité</h3>
          <p>Mise en place de systèmes de management de la qualité selon ISO 9001, IATF-16949, ISO 17020, ISO 17025 et plus.</p>
          <a href="<?php echo corentis_page_url('conseil-qualite'); ?>" class="card-link">Découvrir</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </div>
          <h3>Environnement</h3>
          <p>Intégration du développement durable et mise en œuvre des exigences ISO 14001 et ISO 20121.</p>
          <a href="<?php echo corentis_page_url('conseil-environnement'); ?>" class="card-link">Découvrir</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Santé &amp; Sécurité au travail</h3>
          <p>Mise en place du système de management SST selon ISO 45001 adapté à vos spécificités.</p>
          <a href="<?php echo corentis_page_url('conseil-sst'); ?>" class="card-link">Découvrir</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          </div>
          <h3>Hygiène &amp; Alimentation</h3>
          <p>Conception et mise en œuvre des systèmes de sécurité des denrées alimentaires : HACCP, ISO 22000, BRC, IFS.</p>
          <a href="<?php echo corentis_page_url('conseil-hygiene'); ?>" class="card-link">Découvrir</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3>Social</h3>
          <p>Conformité sociale et certification selon SA 8000, SMETA, ICS et BSCI pour vos pratiques responsables.</p>
          <a href="<?php echo corentis_page_url('conseil-social'); ?>" class="card-link">Découvrir</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Autres domaines</h3>
          <p>Gestion des ressources humaines, comptabilité et autres domaines de conseil spécialisé.</p>
          <a href="<?php echo corentis_page_url('conseil-autres'); ?>" class="card-link">Découvrir</a>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Besoin d'un accompagnement ?</h2>
      <p class="animate-on-scroll">Nos consultants sont à votre disposition pour vous accompagner dans votre démarche.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a>
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
