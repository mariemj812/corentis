<?php
/**
 * Template Name: Qui sommes-nous
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<!-- PAGE HEADER -->
  <section class="page-header" style="background-image: url('<?php echo corentis_img('team.png'); ?>')">
    <div class="container">
      <h1>Qui sommes-nous</h1>
      <div class="breadcrumb">
        <a href="<?php echo home_url('/'); ?>">Accueil</a>
        <span class="sep">/</span>
        <span>Qui sommes-nous</span>
      </div>
    </div>
  </section>

  <!-- ABOUT CONTENT -->
  <section class="section">
    <div class="container">
      <div class="about-grid">
        <div class="about-image animate-on-scroll">
          <img src="<?php echo corentis_img('team.png'); ?>" alt="Équipe Corentis">
        </div>
        <div class="about-text animate-on-scroll">
          <h2>À propos de <span>Corentis Consulting Group</span></h2>
          <p>Corentis Consulting Group est un cabinet de conseil spécialisé dans l'accompagnement des entreprises vers l'excellence opérationnelle. Avec une expertise couvrant plus de 20 normes internationales, nous intervenons dans la mise en place de systèmes de management, l'audit interne et la formation professionnelle.</p>
          <p>Notre mission est de fournir des solutions sur mesure, adaptées aux spécificités de chaque secteur d'activité, afin de garantir la conformité, améliorer les performances et stimuler la croissance durable de nos clients.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- VALUES -->
  <section class="section" style="background:var(--grey-50);">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos valeurs fondamentales</h2>
        <p>Les principes qui guident chacune de nos interventions et notre engagement envers nos clients.</p>
      </div>
      <div class="services-grid">
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Excellence</h3>
          <p>Nous visons l'excellence dans chaque mission, en appliquant les meilleures pratiques internationales et en garantissant des résultats mesurables.</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Proximité</h3>
          <p>Un accompagnement de proximité et personnalisé, avec une écoute attentive des besoins spécifiques de chaque client pour des solutions adaptées.</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <h3>Innovation</h3>
          <p>Nous adoptons des approches innovantes et les dernières méthodologies pour apporter des solutions modernes et efficaces à nos clients.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPERTISE -->
  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Notre expertise sectorielle</h2>
        <p>Une couverture complète des principaux référentiels et normes internationales.</p>
      </div>
      <div class="formation-domains">
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🏭</div>
          <h3>Industrie</h3>
          <p>ISO 9001, IATF-16949, ISO 45001</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🌿</div>
          <h3>Environnement</h3>
          <p>ISO 14001, ISO 20121</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🍽️</div>
          <h3>Agroalimentaire</h3>
          <p>HACCP, ISO 22000, FSSC 22000, BRC, IFS</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🤝</div>
          <h3>Social</h3>
          <p>SA 8000, SMETA, ICS, BSCI</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🔬</div>
          <h3>Laboratoires</h3>
          <p>ISO 17020, ISO 17025</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">📊</div>
          <h3>Management</h3>
          <p>ISO 21001, ISO 22716, ISO 31001</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Collaborons ensemble</h2>
      <p class="animate-on-scroll">Découvrez comment Corentis peut accompagner votre entreprise vers l'excellence.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-white">Nous contacter</a>
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Demander un devis</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

<?php get_footer(); ?>
