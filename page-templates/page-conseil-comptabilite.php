<?php
/**
 * Template Name: Conseil Comptabilité
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('hero.png'); ?>')">
  <div class="container">
    <h1>Conseil Comptabilité</h1>
    <div class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Accueil</a>
      <span class="sep">/</span>
      <a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a>
      <span class="sep">/</span>
      <span>Comptabilité</span>
    </div>
  </div>
</section>

  <!-- ========== SECTION CONTENU PRINCIPAL ========== -->
  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image">
          <img src="<?php echo corentis_img('hero.png'); ?>" alt="Conseil en Comptabilité et Gestion Financière Corentis">
        </div>
        <div class="content-text">
          <h3>Organisation Comptable &amp; Pilotage Financier</h3>
          <p>Une comptabilité rigoureuse, des circuits d'information fiabilisés et un contrôle interne solide sont les socles indispensables à la bonne gouvernance et à la rentabilité de votre entreprise. Corentis Consulting Group met au service de votre structure l'expertise de ses consultants financiers pour moderniser, structurer et sécuriser vos processus comptables.</p>
          <p>Nous accompagnons les entreprises de toute taille dans la mise en place de manuels de procédures, l'optimisation des clôtures périodiques, l'instauration de tableaux de bord financiers et la préparation sereine des audits comptables et fiscaux.</p>
          
          <div class="iso-tags">
            <span class="iso-tag">Organisation comptable</span>
            <span class="iso-tag">Contrôle interne financier</span>
            <span class="iso-tag">Tableaux de bord &amp; KPIs</span>
            <span class="iso-tag">Optimisation des clôtures</span>
            <span class="iso-tag">Procédures financières</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== DOMAINES D'INTERVENTION COMPTABILITÉ ========== -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos Pôles d'Intervention en Comptabilité &amp; Finance</h2>
        <p>Des solutions concrètes pour fiabiliser vos comptes et éclairer vos décisions financières.</p>
      </div>

      <div class="services-grid cols-3">
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3>Organisation Comptable</h3>
          <p>Restructuration du plan comptable, rationalisation des flux de pièces justificatives et rédaction de manuels de procédures clairs.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Contrôle Interne Financier</h3>
          <p>Évaluation des risques d'erreurs et de fraudes, séparation rigoureuse des fonctions et sécurisation des circuits de paiement.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Tableaux de Bord &amp; Reporting</h3>
          <p>Conception d'outils de pilotage visuels : suivi du besoin en fonds de roulement (BFR), trésorerie, marges et rentabilité analytique.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          </div>
          <h3>Accélération des Clôtures</h3>
          <p>Réduction des délais d'arrêté des comptes mensuels et annuels (« fast close ») et amélioration de la fiabilité des états financiers.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Conformité &amp; Pré-Audit</h3>
          <p>Revue de conformité aux normes comptables en vigueur et préparation méthodique des dossiers pour les commissaires aux comptes.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h3>Digitalisation &amp; Automatisation</h3>
          <p>Assistance au choix et paramétrage d'ERP et de logiciels comptables, dématérialisation des factures et archivage électronique légal.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== METHODOLOGY ========== -->
  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Notre Démarche en Conseil Comptable</h2>
        <p>Une méthode éprouvée pour fiabiliser et professionnaliser votre gestion comptable et financière.</p>
      </div>
      <div class="methodology-grid">
        <div class="methodology-image animate-on-scroll">
          <img src="<?php echo corentis_img('hero.png'); ?>" alt="Méthodologie Conseil Comptabilité">
        </div>
        <div class="methodology-steps">
          <div class="method-step animate-on-scroll">
            <div class="method-number">1</div>
            <div class="method-content">
              <h4>Diagnostic Comptable &amp; Financier</h4>
              <p>Revue complète de vos processus actuels, identification des goulots d'étranglement et des zones de vulnérabilité financière.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">2</div>
            <div class="method-content">
              <h4>Recommandations &amp; Feuille de Route</h4>
              <p>Élaboration d'un plan d'actions pragmatique, priorisant les gains rapides en fiabilité, sécurité et rapidité d'exécution.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">3</div>
            <div class="method-content">
              <h4>Formalisation des Procédures</h4>
              <p>Rédaction des fiches de contrôle, guides opératoires et manuels comptables adaptés à votre modèle d'affaires.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">4</div>
            <div class="method-content">
              <h4>Accompagnement &amp; Formation</h4>
              <p>Formation des équipes comptables aux nouvelles méthodes, mise en place des routines de contrôle et tableaux de bord.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">5</div>
            <div class="method-content">
              <h4>Validation &amp; Audit Périodique</h4>
              <p>Contrôle de conformité de fin de mission et mise en place d'un suivi périodique pour pérenniser l'excellence comptable.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Optimisez votre gestion comptable</h2>
      <p class="animate-on-scroll">Bénéficiez de l'accompagnement de nos consultants seniors pour sécuriser et piloter vos flux financiers.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a>
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

