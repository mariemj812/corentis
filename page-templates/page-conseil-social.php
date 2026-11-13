<?php
/**
 * Template Name: Conseil Social
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('social.png'); ?>')"><div class="container"><h1>Conseil Social</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>Social</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('social.png'); ?>" alt="Conformité sociale"></div>
        <div class="content-text">
          <h3>Conformité sociale et éthique</h3>
          <p>Toutes les grandes marques internationales exigent de leurs fournisseurs et sous-traitants de s'engager vers la conformité sociale, afin de réduire le risque sur leur image et de prouver leur devoir de vigilance.</p>
          <p>Corentis Consulting Group assiste les entreprises à mettre en place les bonnes pratiques sociales et certifier leur système de management selon des normes ou des référentiels dédiés.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> SA 8000</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> SMETA</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ICS</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> BSCI</span>
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

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Engagez-vous socialement</h2><p class="animate-on-scroll">Démontrez votre engagement envers la responsabilité sociale.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
