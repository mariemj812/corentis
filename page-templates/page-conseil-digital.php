<?php
/**
 * Template Name: Conseil Digital
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('digital.png'); ?>')"><div class="container"><h1>Marketing Digital & Création Web</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>Marketing Digital</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Transformation Digitale</h2>
        <p>Corentis Consulting Group vous accompagne dans votre stratégie digitale : création de sites web sur mesure et optimisation de votre visibilité en ligne.</p>
      </div>
      <div class="services-grid">
        <div class="service-card animate-on-scroll">
          <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg></div>
          <h3>Création de sites web</h3>
          <p>Conception et développement de sites vitrines et e-commerce modernes, responsifs et optimisés pour le référencement (SEO).</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></div>
          <h3>Marketing Digital</h3>
          <p>Stratégies d'acquisition, gestion des réseaux sociaux, campagnes publicitaires et analyse des performances pour booster votre croissance.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Un besoin spécifique ?</h2><p class="animate-on-scroll">Contactez-nous pour discuter de vos besoins particuliers.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
