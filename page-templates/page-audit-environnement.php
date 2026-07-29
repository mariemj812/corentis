<?php
/**
 * Template Name: Audit Environnement
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Audit interne Environnement</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('audit'); ?>">Audit</a><span class="sep">/</span><span>Environnement</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('environment.png'); ?>" alt="Audit Environnement"></div>
        <div class="content-text">
          <h3>Audit environnemental ISO 14001</h3>
          <p>Votre système est-il vraiment adapté à votre contexte ? Comment pouvez-vous simplifier votre SME tout en restant conforme à la norme ISO 14001 ? Vos objectifs sont-ils vraiment pertinents ? Votre personnel vous suit-il vraiment dans ce projet ? Prenez-vous des risques vis-à-vis des exigences légales ? Réduisez-vous vraiment vos impacts sur l'environnement ?</p>
          <p>Corentis Consulting Group pourra mener l'audit interne environnemental afin de proposer un plan d'action suite à l'audit de la situation environnementale, des réglementations en vigueur et de l'organisation.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO 14001</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Plan d'action</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> Conformité légale</span>
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

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Maîtrisez vos impacts environnementaux</h2><p class="animate-on-scroll">Nos auditeurs vous accompagnent vers la conformité environnementale.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
