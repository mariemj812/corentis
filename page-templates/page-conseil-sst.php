<?php
/**
 * Template Name: Conseil SST
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Santé &amp; Sécurité au Travail</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>SST</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('safety.png'); ?>" alt="Santé et Sécurité au Travail"></div>
        <div class="content-text">
          <h3>Système de management SST</h3>
          <p>Corentis Consulting Group offre à ses clients une méthodologie de mise en place du système de management de la santé et sécurité de travail adaptée à leurs spécificités et aux bonnes pratiques internationales.</p>
          <p>Notre approche personnalisée garantit une intégration fluide des exigences de la norme ISO 45001 dans vos processus existants, contribuant à la protection de vos collaborateurs et à la réduction des risques professionnels.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO 45001</span>
          </div>
        </div>
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

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Protégez vos collaborateurs</h2><p class="animate-on-scroll">Mettez en place un système SST performant avec l'aide de nos experts.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
