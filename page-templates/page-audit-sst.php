<?php
/**
 * Template Name: Audit SST
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Audit interne SST</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('audit'); ?>">Audit</a><span class="sep">/</span><span>SST</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('safety.png'); ?>" alt="Audit SST"></div>
        <div class="content-text">
          <h3>Analyse des risques professionnels</h3>
          <p>Un audit SST est une analyse critique des risques et de leur gestion dans l'entreprise. Corentis Consulting Group procède à l'interview de certains responsables, à l'examen sur site de divers aspects de la sécurité liés aux procédures, aux équipements, aux matériels de production et au comportement des travailleurs et à la vérification de certains documents.</p>
          <p>Notre approche méthodique permet d'identifier les points forts et les axes d'amélioration de votre système de management de la santé et sécurité au travail.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO 45001</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Analyse des risques</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Sécurité au travail</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- ========== METHODOLOGY ========== -->
  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Notre Méthodologie d'Audit</h2>
        <p>Une approche rigoureuse et objective pour évaluer la conformité et la performance de vos systèmes.</p>
      </div>
      <div class="methodology-grid">
        <div class="methodology-image animate-on-scroll">
          <img src="<?php echo corentis_img('audit.png'); ?>" alt="Méthodologie d'audit">
        </div>
        <div class="methodology-steps">
          <div class="method-step animate-on-scroll">
            <div class="method-number">1</div>
            <div class="method-content">
              <h4>Préparation</h4>
              <p>Revue documentaire, définition du périmètre et élaboration du plan d'audit.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">2</div>
            <div class="method-content">
              <h4>Audit sur Site</h4>
              <p>Entretiens avec les équipes, observations terrain et recueil de preuves objectives.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">3</div>
            <div class="method-content">
              <h4>Restitution</h4>
              <p>Réunion de clôture, présentation des constats, points forts et non-conformités.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">4</div>
            <div class="method-content">
              <h4>Rapport & Suivi</h4>
              <p>Remise du rapport d'audit final et validation de vos plans d'actions correctives.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Sécurisez votre environnement de travail</h2><p class="animate-on-scroll">Faites appel à nos auditeurs SST expérimentés.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
