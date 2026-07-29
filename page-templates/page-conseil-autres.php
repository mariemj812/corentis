<?php
/**
 * Template Name: Conseil Autres
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Autres Domaines</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>Autres domaines</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Conseil élargi</h2>
        <p>Au-delà de nos domaines d'expertise principaux, Corentis Consulting Group propose également un accompagnement dans d'autres domaines de gestion d'entreprise.</p>
      </div>
      <div class="services-grid">
        <div class="service-card animate-on-scroll">
          <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <h3>Gestion des Ressources Humaines</h3>
          <p>Accompagnement dans l'organisation, la gestion et le développement de vos ressources humaines pour optimiser les performances de vos équipes.</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <h3>Comptabilité</h3>
          <p>Conseil en gestion comptable et financière, mise en place de systèmes de contrôle et d'optimisation de vos processus financiers.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Un besoin spécifique ?</h2><p class="animate-on-scroll">Contactez-nous pour discuter de vos besoins particuliers.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
