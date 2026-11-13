<?php
/**
 * Template Name: Conseil Environnement
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('environment.png'); ?>')">
    <div class="container">
      <h1>Conseil Environnement</h1>
      <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a><span class="sep">/</span><span>Environnement</span></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image"><img src="<?php echo corentis_img('environment.png'); ?>" alt="Conseil Environnement"></div>
        <div class="content-text">
          <h3>Management environnemental</h3>
          <p>L'entreprise soucieuse d'intégrer le Développement Durable dans son mode de management n'hésite pas à s'approprier les exigences des référentiels dédiés à l'environnement et à mettre ainsi en œuvre les bonnes pratiques associées.</p>
          <p>Corentis Consulting Group vous accompagne dans la mise en place et la certification de votre système de management environnemental, en conformité avec les normes internationales.</p>
          <div class="iso-tags">
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO 14001</span>
            <span class="iso-tag"><img src="<?php echo corentis_img('iso-badge.svg'); ?>" class="iso-icon" alt="ISO" width="16" height="16"> ISO 20121</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--grey-50);">
    <div class="container">
      <div class="services-grid">
        <div class="service-card animate-on-scroll">
          <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <h3>ISO 14001</h3>
          <p>Système de management environnemental — Le référentiel international pour maîtriser les impacts environnementaux de votre activité et démontrer votre engagement envers le développement durable.</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <h3>ISO 20121</h3>
          <p>Système de management responsable appliqué à l'activité événementielle — Pour organiser des événements durables et responsables en minimisant leur impact environnemental.</p>
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

<section class="cta-section"><div class="container"><h2 class="animate-on-scroll">Engagez-vous pour l'environnement</h2><p class="animate-on-scroll">Nos experts vous guident dans votre démarche environnementale.</p><div class="cta-buttons animate-on-scroll"><a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a><a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a></div></div></section>

<?php get_footer(); ?>
