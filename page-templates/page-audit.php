<?php
/**
 * Template Name: Audit
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('audit.png'); ?>')"><div class="container"><h1>Audit</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><span>Audit</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos services d'audit</h2>
        <p>Corentis Consulting Group réalise des audits à forte valeur ajoutée pour évaluer vos systèmes de management et identifier les pistes d'amélioration.</p>
      </div>
      <div class="audit-cards">
        <div class="audit-card animate-on-scroll">
          <div class="card-image"><img src="<?php echo corentis_img('quality.png'); ?>" alt="Audit Qualité"></div>
          <div class="card-body">
            <h3>Audit interne Qualité</h3>
            <p>Évaluation de la conformité de vos systèmes par rapport aux exigences de la norme ISO 9001 et engagement dans l'amélioration continue.</p>
            <a href="<?php echo corentis_page_url('audit-qualite'); ?>" class="card-link" style="margin-top:var(--space-md);display:inline-flex;">Découvrir</a>
          </div>
        </div>
        <div class="audit-card animate-on-scroll">
          <div class="card-image"><img src="<?php echo corentis_img('environment.png'); ?>" alt="Audit Environnement"></div>
          <div class="card-body">
            <h3>Audit interne Environnement</h3>
            <p>Audit environnemental pour proposer un plan d'action conforme à l'ISO 14001 et réduire vos impacts environnementaux.</p>
            <a href="<?php echo corentis_page_url('audit-environnement'); ?>" class="card-link" style="margin-top:var(--space-md);display:inline-flex;">Découvrir</a>
          </div>
        </div>
        <div class="audit-card animate-on-scroll">
          <div class="card-image"><img src="<?php echo corentis_img('safety.png'); ?>" alt="Audit SST"></div>
          <div class="card-body">
            <h3>Audit interne SST</h3>
            <p>Analyse critique des risques et de leur gestion dans l'entreprise pour garantir la sécurité des travailleurs.</p>
            <a href="<?php echo corentis_page_url('audit-sst'); ?>" class="card-link" style="margin-top:var(--space-md);display:inline-flex;">Découvrir</a>
          </div>
        </div>
        <div class="audit-card animate-on-scroll">
          <div class="card-image"><img src="<?php echo corentis_img('audit.png'); ?>" alt="Audit QHSE"></div>
          <div class="card-body">
            <h3>Audit intégré QHSE</h3>
            <p>Audits des systèmes de management Qualité, Sécurité & Santé au travail et Environnement avec une approche orientée performance.</p>
            <a href="<?php echo corentis_page_url('audit-qhse'); ?>" class="card-link" style="margin-top:var(--space-md);display:inline-flex;">Découvrir</a>
          </div>
        </div>
        <div class="audit-card animate-on-scroll">
          <div class="card-image"><img src="<?php echo corentis_img('social.png'); ?>" alt="Audit Social"></div>
          <div class="card-body">
            <h3>Audit Social</h3>
            <p>Évaluation de la conformité sociale de vos fournisseurs selon SA8000, BSCI, SMETA ou ICS.</p>
            <a href="<?php echo corentis_page_url('audit-social'); ?>" class="card-link" style="margin-top:var(--space-md);display:inline-flex;">Découvrir</a>
          </div>
        </div>
        <div class="audit-card animate-on-scroll">
          <div class="card-image"><img src="<?php echo corentis_img('food-safety.png'); ?>" alt="Audit Agroalimentaire"></div>
          <div class="card-body">
            <h3>Audit Agroalimentaire</h3>
            <p>Audits des systèmes de management de la sécurité alimentaire selon ISO 22000, IFS, BRC et FSSC 22000.</p>
            <a href="<?php echo corentis_page_url('audit-agroalimentaire'); ?>" class="card-link" style="margin-top:var(--space-md);display:inline-flex;">Découvrir</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Besoin d'un audit ?</h2><p class="animate-on-scroll">Nos auditeurs expérimentés sont à votre disposition pour évaluer vos systèmes.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
