<?php
/**
 * Template Name: Audit Social
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Audit Social</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('audit'); ?>">Audit</a><span class="sep">/</span><span>Social</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('social.png'); ?>" alt="Audit Social"></div>
        <div class="content-text">
          <h3>Évaluation de la conformité sociale</h3>
          <p>De plus en plus de donneurs d'ordre et de marques internationales exigent que leurs sous-traitants et fournisseurs s'assurent du respect des codes de conduite et des normes sociales.</p>
          <p>Corentis Consulting Group aide ses clients à travers un audit de 2 à 3 jours à réaliser une auto-évaluation ou une évaluation de la conformité sociale de leurs fournisseurs ou sous-traitants puis se conformer aux bonnes pratiques de la SA8000, BSCI, SMETA ou ICS.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> SA 8000</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> BSCI</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> SMETA</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ICS</span>
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

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Assurez votre conformité sociale</h2><p class="animate-on-scroll">Audit social complet en 2 à 3 jours par nos experts.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
