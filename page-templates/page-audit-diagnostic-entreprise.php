<?php
/**
 * Template Name: Audit & Diagnostic d'Entreprise
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('audit.png'); ?>')">
  <div class="container">
    <h1>Audit &amp; Diagnostic d'Entreprise</h1>
    <div class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Accueil</a>
      <span class="sep">/</span>
      <a href="<?php echo corentis_page_url('audit'); ?>">Audit</a>
      <span class="sep">/</span>
      <span>Audit &amp; Diagnostic d'Entreprise</span>
    </div>
  </div>
</section>

  <!-- ========== SECTION 1: INTRODUCTION ========== -->
  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image">
          <img src="<?php echo corentis_img('audit.png'); ?>" alt="Audit et diagnostic d'entreprise Corentis">
        </div>
        <div class="content-text">
          <div class="badge-top" style="display:inline-block;background:#eff6ff;color:#1e40af;font-weight:700;font-size:0.8rem;padding:4px 12px;border-radius:20px;margin-bottom:12px;letter-spacing:0.5px;text-transform:uppercase;">✦ Vision 360° &amp; Performance Globale</div>
          <h3>Évaluer, Sécuriser et Propulser Votre Organisation</h3>
          <p>Face aux impératifs de rentabilité, de conformité et de compétitivité, les dirigeants ont besoin d'une vision lucide et indépendante sur l'état réel de leur entreprise. <strong>Corentis Consulting Group</strong> réalise des missions complètes d'<strong>Audit &amp; Diagnostic d'Entreprise</strong> à forte valeur ajoutée, destinées à identifier les forces, déceler les vulnérabilités et libérer le potentiel inexploité de votre structure.</p>
          <p>Nos consultants et auditeurs seniors combinent expertise managériale, financière, procédurale et réglementaire pour délivrer un état des lieux sans complaisance, assorti d'un plan d'actions pragmatique orienté vers des gains rapides et durables.</p>
          
          <div class="iso-tags">
            <span class="iso-tag">Audit organisationnel</span>
            <span class="iso-tag">Audit financier &amp; gestion</span>
            <span class="iso-tag">Audit des procédures</span>
            <span class="iso-tag">Diagnostic de performance</span>
            <span class="iso-tag">Contrôle interne</span>
            <span class="iso-tag">Conformité réglementaire</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SECTION 2: NOS PÔLES D'AUDIT & DIAGNOSTIC ========== -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos Domaines d'Audit &amp; de Diagnostic Spécialisés</h2>
        <p>Une démarche pluridisciplinaire pour auditer en profondeur chaque composante stratégique et opérationnelle de votre organisation.</p>
      </div>

      <div class="services-grid cols-3">
        
        <!-- PÔLE 1 : AUDIT ORGANISATIONNEL -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <h3>Audit Organisationnel &amp; Managérial</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Analyse critique de l'organigramme et de la structure hiérarchique</li>
            <li>Clarification des rôles, responsabilités, délégations et fiches de fonction</li>
            <li>Évaluation des circuits de décision et de la communication interne</li>
            <li>Détection des goulots d'étranglement, redondances et pertes de temps</li>
            <li>Audit du style de management et de l'engagement des équipes</li>
          </ul>
        </div>

        <!-- PÔLE 2 : AUDIT FINANCIER & DE GESTION -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <h3>Audit Financier &amp; Contrôle de Gestion</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Revue analytique de la santé financière et de la solvabilité</li>
            <li>Analyse de la rentabilité par activité, produit et centre de profit</li>
            <li>Audit du Besoin en Fonds de Roulement (BFR) et de la trésorerie</li>
            <li>Évaluation de la fiabilité des prévisions et des états financiers</li>
            <li>Revue des tableaux de bord et de l'efficacité du contrôle budgétaire</li>
          </ul>
        </div>

        <!-- PÔLE 3 : AUDIT DES PROCÉDURES -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="9"></line><line x1="9" y1="13" x2="15" y2="13"></line><line x1="9" y1="17" x2="13" y2="17"></line></svg>
          </div>
          <h3>Audit des Procédures &amp; Contrôle Interne</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Évaluation de l'existence, de la clarté et de l'application des procédures</li>
            <li>Sécurisation des circuits critiques (achats, stocks, ventes, décaissements)</li>
            <li>Contrôle de la séparation des fonctions et prévention des risques de fraude</li>
            <li>Audit des flux documentaires et des pistes d'audit fiables</li>
            <li>Mise à jour et formalisation du manuel des procédures internes</li>
          </ul>
        </div>

        <!-- PÔLE 4 : DIAGNOSTIC DE PERFORMANCE -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          </div>
          <h3>Diagnostic de Performance Opérationnelle</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Mesure de l'efficacité des processus métiers clés et de la chaîne de valeur</li>
            <li>Analyse de la productivité, des rendements et des temps de cycle</li>
            <li>Identification des coûts de non-qualité et des gaspillages (Lean)</li>
            <li>Benchmark sectoriel et évaluation du positionnement concurrentiel</li>
            <li>Définition d'indicateurs de performance clés (KPIs) opérationnels</li>
          </ul>
        </div>

        <!-- PÔLE 5 : AUDIT DE CONFORMITÉ RÉGLEMENTAIRE -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          <h3>Audit de Conformité Réglementaire &amp; Risques</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Contrôle du respect des dispositions légales, fiscales et sociales en vigueur</li>
            <li>Évaluation des obligations statutaires, contractuelles et déclaratives</li>
            <li>Cartographie exhaustive des risques juridiques, financiers et d'image</li>
            <li>Diagnostic de la cybersécurité et de la protection des données</li>
            <li>Élaboration de plans de mise en conformité et de mitigation des risques</li>
          </ul>
        </div>

        <!-- PÔLE 6 : AUDIT STRATÉGIQUE & RESTRUCTURATION -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 8 8 12 12 16 16 12 12 8"></polygon></svg>
          </div>
          <h3>Audit Stratégique &amp; Diagnostic de Redressement</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Diagnostic des entreprises en phase de transition ou en difficulté</li>
            <li>Audit de viabilité du modèle économique (Business Model Review)</li>
            <li>Analyse d'opportunité d'investissements, fusions ou acquisitions</li>
            <li>Élaboration de plans de restructuration, retournement et redressement</li>
            <li>Assistance aux négociations avec les créanciers et partenaires financiers</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== SECTION 3: LIVRABLES & VALEUR AJOUTÉE ========== -->
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Ce Que Vous Apporte Notre Audit d'Entreprise</h2>
        <p>Un ensemble de livrables opérationnels, concrets et directement exploitables par votre direction générale.</p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));gap:24px;margin-top:30px;">
        
        <div class="animate-on-scroll" style="background:#f8fafc;border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;border-top:4px solid #2563eb;">
          <h4 style="color:#0f2756;font-size:1.15rem;margin-bottom:10px;">1. Rapport d'Audit &amp; Matrice SWOT</h4>
          <p style="font-size:0.9rem;color:#475569;margin:0;">Synthèse exhaustive des forces, faiblesses, opportunités et menaces avec scoring précis par fonction de l'entreprise.</p>
        </div>

        <div class="animate-on-scroll" style="background:#f8fafc;border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;border-top:4px solid #2563eb;">
          <h4 style="color:#0f2756;font-size:1.15rem;margin-bottom:10px;">2. Cartographie des Risques &amp; Écarts</h4>
          <p style="font-size:0.9rem;color:#475569;margin:0;">Identification précise des vulnérabilités critiques (financières, humaines, juridiques) avec hiérarchisation par niveau de criticité.</p>
        </div>

        <div class="animate-on-scroll" style="background:#f8fafc;border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;border-top:4px solid #2563eb;">
          <h4 style="color:#0f2756;font-size:1.15rem;margin-bottom:10px;">3. Feuille de Route &amp; Quick Wins</h4>
          <p style="font-size:0.9rem;color:#475569;margin:0;">Plan d'actions priorisé distinguant les gains rapides à effet immédiat des chantiers structurels de fond.</p>
        </div>

        <div class="animate-on-scroll" style="background:#f8fafc;border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;border-top:4px solid #2563eb;">
          <h4 style="color:#0f2756;font-size:1.15rem;margin-bottom:10px;">4. Indicateurs &amp; Suivi de Progrès</h4>
          <p style="font-size:0.9rem;color:#475569;margin:0;">Mise en place de tableaux de bord personnalisés pour mesurer concrètement les améliorations et le retour sur investissement.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== SECTION 4: MÉTHODOLOGIE D'AUDIT EN 5 ÉTAPES ========== -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Notre Méthodologie d'Audit &amp; Diagnostic</h2>
        <p>Une démarche rigoureuse, objective et confidentielle, conduite en concertation étroite avec vos équipes.</p>
      </div>

      <div class="methodology-grid">
        <div class="methodology-image animate-on-scroll">
          <img src="<?php echo corentis_img('audit.png'); ?>" alt="Méthodologie d'audit d'entreprise Corentis">
        </div>
        <div class="methodology-steps">
          <div class="method-step animate-on-scroll">
            <div class="method-number">1</div>
            <div class="method-content">
              <h4>Cadrage &amp; Collecte Documentaire</h4>
              <p>Définition précise du périmètre d'audit, des objectifs stratégiques et collecte préalable des documents de gestion et d'organisation.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">2</div>
            <div class="method-content">
              <h4>Immersion Terrain &amp; Entretiens</h4>
              <p>Entretiens approfondis avec la direction, les managers et les collaborateurs clés, observation directe des flux opérationnels.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">3</div>
            <div class="method-content">
              <h4>Analyse des Données &amp; Tests de Conformité</h4>
              <p>Traitements des données chiffrées, analyse des ratios financiers, vérification par sondages de l'application réelle des procédures.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">4</div>
            <div class="method-content">
              <h4>Restitution Contradictoire &amp; Rapport Final</h4>
              <p>Présentation transparente des constats lors d'une séance de travail avec la gouvernance et remise du rapport d'audit exhaustif.</p>
            </div>
          </div>
          <div class="method-step animate-on-scroll">
            <div class="method-number">5</div>
            <div class="method-content">
              <h4>Plan d'Actions &amp; Accompagnement au Changement</h4>
              <p>Définition de la feuille de route opérationnelle, planning de mise en œuvre et assistance au déploiement des recommandations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SECTION 5: CTA ========== -->
  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Besoin d'un audit ou d'un diagnostic d'entreprise ?</h2>
      <p class="animate-on-scroll">Bénéficiez du regard expert et objectif de nos auditeurs seniors pour sécuriser et booster votre entreprise.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a>
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

