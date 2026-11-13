<?php
/**
 * Template Name: Audit QHSE
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('audit.png'); ?>')"><div class="container"><h1>Audit intégré QHSE</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('audit'); ?>">Audit</a><span class="sep">/</span><span>QHSE</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('audit.png'); ?>" alt="Audit QHSE"></div>
        <div class="content-text">
          <h3>Audit des systèmes de management intégrés</h3>
          <p>Corentis Consulting Group réalise des audits à forte valeur ajoutée des Systèmes de Management Qualité et/ou Sécurité & Santé au travail et/ou Environnement. Notre approche de l'audit se différencie d'un audit de certification en apportant des constatations orientées satisfaction et performance.</p>
          <p>Cet audit permet de faire le point sur le respect des procédures, la conformité aux exigences normatives, leur bonne application, leur efficacité et d'identifier les pistes d'améliorations possibles.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Qualité</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Hygiène</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Sécurité</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Environnement</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Performance</span>
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

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Optimisez votre système QHSE</h2><p class="animate-on-scroll">Un audit intégré pour une vision globale de vos performances.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
