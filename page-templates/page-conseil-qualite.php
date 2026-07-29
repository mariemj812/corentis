<?php
/**
 * Template Name: Conseil QualitÃ©
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header">
    <div class="container">
      <h1>Conseil Qualité</h1>
      <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a
          href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>Qualité</span></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('quality.png'); ?>" alt="Conseil Qualité"></div>
        <div class="content-text">
          <h3>Systèmes de management de la qualité</h3>
          <p>Corentis Consulting Group accompagne les entreprises dans la mise en place de leurs systèmes de management
            de la qualité et intervient dans plusieurs secteurs d'activités. Découvrez ce que nous offrons via la liste
            ci-dessous :</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO
              9001</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16">
              IATF-16949</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO
              17020</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO
              17025</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO
              21001</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO
              22716</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO
              31001</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--grey-50);">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos normes de référence</h2>
        <p>Une expertise approfondie sur l'ensemble des référentiels qualité internationaux.</p>
      </div>
      <div class="formation-domains">
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" alt="Certification" style="width:32px;height:32px;">
          </div>
          <h3>ISO 9001</h3>
          <p>Système de management de la qualité — Exigences fondamentales pour l'amélioration continue.</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" alt="Certification" style="width:32px;height:32px;">
          </div>
          <h3>IATF-16949</h3>
          <p>Norme spécifique au secteur automobile pour la gestion de la qualité de la chaîne d'approvisionnement.</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" alt="Certification" style="width:32px;height:32px;">
          </div>
          <h3>ISO 17020</h3>
          <p>Exigences pour le fonctionnement des organismes procédant à l'inspection.</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" alt="Certification" style="width:32px;height:32px;">
          </div>
          <h3>ISO 17025</h3>
          <p>Exigences générales concernant la compétence des laboratoires d'étalonnage et d'essais.</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" alt="Certification" style="width:32px;height:32px;">
          </div>
          <h3>ISO 21001</h3>
          <p>Système de management pour les organismes d'éducation et de formation.</p>
        </div>
        <div class="domain-card animate-on-scroll">
          <div class="domain-icon"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" alt="Certification" style="width:32px;height:32px;">
          </div>
          <h3>ISO 22716</h3>
          <p>Bonnes pratiques de fabrication pour l'industrie cosmétique.</p>
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

  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Besoin d'un conseil qualité ?</h2>
      <p class="animate-on-scroll">Nos experts vous accompagnent dans la mise en place de votre système qualité.</p>
      <div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a
          href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous
          contacter</a></div>
    </div>
  </section>

<?php get_footer(); ?>
