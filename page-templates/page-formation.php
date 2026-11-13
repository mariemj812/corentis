<?php
/**
 * Template Name: Formation
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('formation.png'); ?>')">
    <div class="container">
      <h1>Formation</h1>
      <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><span>Formation</span></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="formation-intro animate-on-scroll">
        <div>
          <h2 style="margin-bottom:var(--space-lg);">Renforcez les compétences <span style="color:var(--blue-500);">de vos équipes</span></h2>
          <p style="margin-bottom:var(--space-lg);">Corentis Consulting Group propose des programmes de formation sur mesure, conçus pour développer les compétences de vos collaborateurs dans les domaines clés du management de la qualité, de l'environnement, de la santé et sécurité au travail, et bien plus encore.</p>
          <p style="margin-bottom:var(--space-xl);">Nos formations sont dispensées par des experts certifiés, combinant théorie et pratique pour garantir une montée en compétences efficace et durable. Chaque programme est adapté aux besoins spécifiques de votre organisation.</p>
          <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-primary">Demander un programme</a>
        </div>
        <img src="<?php echo corentis_img('formation.png'); ?>" alt="Formation Corentis">
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--grey-50);">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Domaines de formation</h2>
        <p>Des programmes couvrant l'ensemble des référentiels et normes internationales.</p>
      </div>
      <div class="formation-domains">
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🏆</div>
          <h3>Qualité</h3>
          <p>ISO 9001, IATF-16949, ISO 17020, ISO 17025, ISO 21001, ISO 22716, ISO 31001</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🌍</div>
          <h3>Environnement</h3>
          <p>ISO 14001, ISO 20121 — Management environnemental et développement durable</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🛡️</div>
          <h3>Santé &amp; Sécurité</h3>
          <p>ISO 45001 — Systèmes de management de la santé et sécurité au travail</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🍴</div>
          <h3>Hygiène alimentaire</h3>
          <p>HACCP, ISO 22000, FSSC 22000, BRC, IFS — Sécurité des denrées alimentaires</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">🤝</div>
          <h3>Responsabilité sociale</h3>
          <p>SA 8000, SMETA, ICS, BSCI — Conformité sociale et éthique</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon">📋</div>
          <h3>Audit interne</h3>
          <p>Formation aux techniques d'audit interne pour tous les référentiels</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Investissez dans vos talents</h2>
      <p class="animate-on-scroll">Contactez-nous pour concevoir un programme de formation adapté à vos besoins.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a>
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
