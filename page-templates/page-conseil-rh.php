<?php
/**
 * Template Name: Conseil Ressources Humaines
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('team.png'); ?>')">
  <div class="container">
    <h1>Conseil Ressources Humaines</h1>
    <div class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Accueil</a>
      <span class="sep">/</span>
      <a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a>
      <span class="sep">/</span>
      <span>Ressources Humaines</span>
    </div>
  </div>
</section>

  <!-- ========== SECTION CONTENU PRINCIPAL ========== -->
  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image">
          <img src="<?php echo corentis_img('team.png'); ?>" alt="Conseil en Ressources Humaines Corentis">
        </div>
        <div class="content-text">
          <h3>Structuration, Performance & Capital Humain</h3>
          <p>Le capital humain est le moteur premier de la performance et de la pérennité de toute organisation. Face aux évolutions rapides des métiers et aux exigences accrues de compétitivité, Corentis Consulting Group accompagne les dirigeants et les directions RH dans l'optimisation et la modernisation de leur gestion des ressources humaines.</p>
          <p>Nos consultants seniors apportent des méthodologies éprouvées et des solutions sur mesure pour aligner les compétences de vos équipes avec la vision stratégique de votre entreprise, fluidifier le dialogue social et valoriser votre marque employeur.</p>
          
          <div class="iso-tags">
            <span class="iso-tag">GPEC &amp; Compétences</span>
            <span class="iso-tag">Fiches de fonction</span>
            <span class="iso-tag">Audit RH &amp; Climat social</span>
            <span class="iso-tag">Évaluation de la performance</span>
            <span class="iso-tag">Organisation RH</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== DOMAINES D'INTERVENTION RH ========== -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos Pôles d'Intervention en Ressources Humaines</h2>
        <p>Un accompagnement complet pour faire de vos ressources humaines un véritable levier de croissance.</p>
      </div>

      <div class="services-grid cols-3">
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Organisation &amp; Structuration RH</h3>
          <p>Conception d'organigrammes fonctionnels, cartographie des emplois, élaboration de référentiels de compétences et fiches de poste claires.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          </div>
          <h3>GPEC &amp; Gestion des Carrières</h3>
          <p>Anticipation des besoins en compétences, plans de développement individuel, parcours d'évolution et gestion de la relève.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Évaluation &amp; Rémunération</h3>
          <p>Mise en place de systèmes d'entretiens annuels d'évaluation, grilles de classification et politiques de rémunération équitables et motivantes.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3>Climat Social &amp; QVT</h3>
          <p>Diagnostic du climat social, enquêtes d'engagement interne, amélioration de la Qualité de Vie au Travail et prévention des risques psychosociaux.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          </div>
          <h3>Recrutement &amp; Intégration</h3>
          <p>Optimisation des processus de sélection, parcours d'onboarding structurés et programmes de rétention des talents clés.</p>
        </div>

        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Tableaux de Bord &amp; Pilotage RH</h3>
          <p>Indicateurs clés de performance RH (turnover, absentéisme, masse salariale) pour éclairer les décisions de la direction.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== METHODOLOGY ========== -->
  <section class="section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Notre Méthodologie d'Intervention RH</h2>
        <p>Une approche structurée et collaborative, alliant rigueur méthodologique et prise en compte de la culture d'entreprise.</p>
      </div>
      <div class="methodology-grid">
        <div class="methodology-image animate-on-scroll">
          <img src="<?php echo corentis_img('team.png'); ?>" alt="Méthodologie RH">
        </div>
        <div class="methodology-steps">
          <div class="method-step animate-on-scroll">
            <div class="method-number">1</div>
            <div class="method-content">
              <h4>Audit &amp; Diagnostic RH</h4>
              <p>Analyse approfondie des pratiques existantes, entretiens avec les parties prenantes et identification des axes de progrès.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">2</div>
            <div class="method-content">
              <h4>Feuille de Route RH</h4>
              <p>Co-construction d'un plan d'action personnalisé, hiérarchisé selon vos priorités stratégiques et vos contraintes opérationnelles.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">3</div>
            <div class="method-content">
              <h4>Conception &amp; Outils</h4>
              <p>Élaboration des outils RH : référentiels de compétences, grilles d'évaluation, procédures et guides d'entretien.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">4</div>
            <div class="method-content">
              <h4>Formation &amp; Conduite du Changement</h4>
              <p>Formation des managers et des équipes à l'utilisation des nouveaux outils pour garantir leur adhésion durable.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">5</div>
            <div class="method-content">
              <h4>Suivi &amp; Pérennisation</h4>
              <p>Évaluation des premiers résultats, ajustement des pratiques et mise en place d'indicateurs de pilotage continus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Développez le potentiel de vos équipes</h2>
      <p class="animate-on-scroll">Échangez avec nos consultants experts en Ressources Humaines pour un diagnostic personnalisé.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a>
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

