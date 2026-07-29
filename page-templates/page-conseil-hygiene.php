<?php
/**
 * Template Name: Conseil HygiÃ¨ne
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Hygiène &amp; Alimentation</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>Hygiène &amp; Alimentation</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('food-safety.png'); ?>" alt="Hygiène et Alimentation"></div>
        <div class="content-text">
          <h3>Sécurité des denrées alimentaires</h3>
          <p>Assistance dans la conception, mise en œuvre et mise à jour des systèmes de management de la sécurité des denrées alimentaires. Corentis Consulting Group vous accompagne pour garantir la conformité et la sécurité de vos produits alimentaires.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> HACCP</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO 22000</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> FSSC 22000</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> BRC</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> IFS</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--grey-50);">
    <div class="container">
      <div class="services-grid">
        <div class="service-card animate-on-scroll"><div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>HACCP</h3><p>Analyse des dangers et points critiques pour leur maîtrise — Méthode systématique pour garantir la sécurité alimentaire.</p></div>
        <div class="service-card animate-on-scroll"><div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div><h3>ISO 22000</h3><p>Système de management de la sécurité des denrées alimentaires — Approche intégrée de la chaîne alimentaire.</p></div>
        <div class="service-card animate-on-scroll"><div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div><h3>FSSC 22000 / BRC / IFS</h3><p>Référentiels de certification reconnus internationalement pour la sécurité alimentaire et la qualité des produits.</p></div>
      </div>
    </div>
  </section>

  
  <!-- ========== METHODOLOGY ========== -->
  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Notre Méthodologie d'Accompagnement</h2>
        <p>Une démarche éprouvée en 5 étapes pour vous guider vers la certification et l'excellence opérationnelle.</p>
      </div>
      <div class="methodology-grid">
        <div class="methodology-image animate-on-scroll">
          <img src="<?php echo corentis_img('team.png'); ?>" alt="Méthodologie d'accompagnement">
        </div>
        <div class="methodology-steps">
          <div class="method-step animate-on-scroll">
            <div class="method-number">1</div>
            <div class="method-content">
              <h4>Diagnostic Initial</h4>
              <p>Évaluation de l'existant et analyse des écarts par rapport aux exigences normatives.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">2</div>
            <div class="method-content">
              <h4>Plan d'Action</h4>
              <p>Définition d'une feuille de route détaillée, des ressources nécessaires et du planning.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">3</div>
            <div class="method-content">
              <h4>Déploiement</h4>
              <p>Accompagnement terrain dans la mise en œuvre de votre système de management.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">4</div>
            <div class="method-content">
              <h4>Formation</h4>
              <p>Sensibilisation et montée en compétence de vos équipes sur les nouveaux processus.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">5</div>
            <div class="method-content">
              <h4>Audit à Blanc</h4>
              <p>Vérification finale du système et préparation à l'audit de certification.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Garantissez la sécurité alimentaire</h2><p class="animate-on-scroll">Nos experts vous accompagnent dans la conformité de vos processus.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
