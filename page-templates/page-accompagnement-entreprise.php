<?php
/**
 * Template Name: Accompagnement de l'Entreprise
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('hero.png'); ?>')">
  <div class="container">
    <h1>Accompagnement de l'Entreprise</h1>
    <div class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Accueil</a>
      <span class="sep">/</span>
      <a href="<?php echo corentis_page_url('conseil'); ?>">Conseil</a>
      <span class="sep">/</span>
      <span>Accompagnement de l'entreprise</span>
    </div>
  </div>
</section>

  <!-- ========== SECTION INTRODUCTION ========== -->
  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-image">
          <img src="<?php echo corentis_img('hero.png'); ?>" alt="Accompagnement de l'entreprise Corentis Consulting Group">
        </div>
        <div class="content-text">
          <div class="badge-top" style="display:inline-block;background:#eff6ff;color:#1e40af;font-weight:700;font-size:0.8rem;padding:4px 12px;border-radius:20px;margin-bottom:12px;letter-spacing:0.5px;text-transform:uppercase;">✦ De l'idée à la croissance</div>
          <h3>Partenaire Stratégique de Votre Réussite</h3>
          <p><strong>Corentis Consulting Group</strong> accompagne les sociétés à chaque étape cruciale de leur existence, <strong>depuis la création jusqu'au développement et à l'expansion</strong>. Nous mettons à la disposition des porteurs de projets, dirigeants de PME et directeurs d'entreprises une expertise pluridisciplinaire pour sécuriser leurs choix stratégiques, maximiser leurs chances de financement et optimiser leur gestion opérationnelle.</p>
          <p>Notre approche globale combine vision économique, ingénierie financière, organisation administrative et transformation digitale pour propulser votre entreprise vers une rentabilité pérenne.</p>
          
          <div class="iso-tags">
            <span class="iso-tag">Création d'entreprise</span>
            <span class="iso-tag">Business Plan bancable</span>
            <span class="iso-tag">Financement &amp; Subventions</span>
            <span class="iso-tag">Organisation &amp; Procédures</span>
            <span class="iso-tag">Audit &amp; Diagnostic</span>
            <span class="iso-tag">Développement &amp; Croissance</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SECTION 1: NOS AXES D'ACCOMPAGNEMENT ========== -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos Domaines d'Accompagnement &amp; de Conseil</h2>
        <p>Un éventail complet de prestations d'expertise pour structurer, financer et développer votre entreprise.</p>
      </div>

      <div class="services-grid cols-3">
        
        <!-- PÔLE 1 : CRÉATION ET CONSTITUTION -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
          </div>
          <h3>Création &amp; Constitution d'Entreprise</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Choix de la forme juridique optimale (SUARL, SARL, SA, etc.)</li>
            <li>Prise en charge complète des formalités et d'immatriculation (RNE, APII, douane)</li>
            <li>Élaboration et structuration du projet d'entreprise</li>
            <li>Études de faisabilité économique, technique et financière</li>
            <li>Recherche de partenaires stratégiques et d'investisseurs</li>
          </ul>
        </div>

        <!-- PÔLE 2 : BUSINESS PLAN ET ÉTUDES DE PROJETS -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
          </div>
          <h3>Business Plan &amp; Études de Projets</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Élaboration de business plans rigoureux et bancables</li>
            <li>Études de marché quantitatives et qualitatives</li>
            <li>Prévisions financières détaillées (plan de trésorerie, compte de résultat)</li>
            <li>Analyse de rentabilité, seuil de rentabilité et évaluation des risques</li>
            <li>Constitution des dossiers de demande de financement</li>
          </ul>
        </div>

        <!-- PÔLE 3 : FINANCEMENT ET AVANTAGES FINANCIERS -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <h3>Financement &amp; Avantages Financiers</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Identification des mécanismes d'aide et d'incitation à l'investissement</li>
            <li>Montage des dossiers de subventions, primes d'investissement et FOPRODI</li>
            <li>Accompagnement auprès des banques et organismes financiers</li>
            <li>Optimisation fiscale et financière des montages de projets</li>
            <li>Financement des startups, labels innovants et levées de fonds</li>
          </ul>
        </div>

        <!-- PÔLE 4 : ORGANISATION ET GESTION -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
          </div>
          <h3>Organisation &amp; Gestion Interne</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Mise en place et structuration de l'organisation interne</li>
            <li>Élaboration des procédures administratives et financières</li>
            <li>Définition claire des responsabilités, délégations et fiches de poste</li>
            <li>Conception et déploiement des tableaux de bord de gestion</li>
            <li>Gestion et cartographie des risques opérationnels</li>
            <li>Rédaction du manuel de procédures comptables</li>
          </ul>
        </div>

        <!-- PÔLE 5 : AUDIT ET DIAGNOSTIC -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          </div>
          <h3>Audit &amp; Diagnostic d'Entreprise</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Audit organisationnel et managérial</li>
            <li>Audit financier et contrôle de gestion</li>
            <li>Audit de conformité des procédures internes</li>
            <li>Diagnostic approfondi de performance et d'efficacité</li>
            <li>Audit de conformité réglementaire, juridique et fiscale</li>
          </ul>
        </div>

        <!-- PÔLE 6 : DÉVELOPPEMENT ET CROISSANCE -->
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          </div>
          <h3>Développement &amp; Croissance</h3>
          <ul style="margin:12px 0 0;padding-left:18px;font-size:0.92rem;color:var(--color-text-muted);line-height:1.7;">
            <li>Stratégie de développement à moyen et long terme</li>
            <li>Planification stratégique et plans de continuité</li>
            <li>Diversification des activités et conquête de nouveaux marchés</li>
            <li>Accélération du développement commercial et marketing</li>
            <li>Accompagnement à la transformation digitale et modernisation</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== SECTION 2: OFFRES D'ACCOMPAGNEMENT GLOBAL (PACKS) ========== -->
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Offres d'Accompagnement Global en Parcours</h2>
        <p>Des formules packagées et progressives pour répondre avec précision à chaque étape de maturité de votre entreprise.</p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));gap:24px;margin-top:30px;">
        
        <!-- PACK 1 -->
        <div class="animate-on-scroll" style="background:linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;position:relative;box-shadow:0 4px 12px rgba(0,0,0,0.04);">
          <div style="font-size:0.75rem;font-weight:800;color:#2563eb;letter-spacing:1px;text-transform:uppercase;margin-bottom:8px;">Parcours 01</div>
          <h3 style="font-family:'Outfit',sans-serif;font-size:1.25rem;color:#0f2756;margin-bottom:12px;">Pack Création d'Entreprise</h3>
          <p style="font-size:0.9rem;color:#475569;margin-bottom:16px;">Sécurisez le lancement de votre projet de la conceptualisation aux formalités légales.</p>
          <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:8px;padding:12px 14px;font-weight:600;font-size:0.88rem;color:#1e3a8a;">
            Idée &rarr; Étude &rarr; Constitution &rarr; Immatriculation
          </div>
        </div>

        <!-- PACK 2 -->
        <div class="animate-on-scroll" style="background:linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;position:relative;box-shadow:0 4px 12px rgba(0,0,0,0.04);">
          <div style="font-size:0.75rem;font-weight:800;color:#2563eb;letter-spacing:1px;text-transform:uppercase;margin-bottom:8px;">Parcours 02</div>
          <h3 style="font-family:'Outfit',sans-serif;font-size:1.25rem;color:#0f2756;margin-bottom:12px;">Pack Financement</h3>
          <p style="font-size:0.9rem;color:#475569;margin-bottom:16px;">Maximisez vos chances d'obtention de crédits bancaires et de subventions d'État.</p>
          <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:8px;padding:12px 14px;font-weight:600;font-size:0.88rem;color:#1e3a8a;">
            Business Plan &rarr; Dossier bancaire &rarr; Recherche &rarr; Avantages
          </div>
        </div>

        <!-- PACK 3 -->
        <div class="animate-on-scroll" style="background:linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;position:relative;box-shadow:0 4px 12px rgba(0,0,0,0.04);">
          <div style="font-size:0.75rem;font-weight:800;color:#2563eb;letter-spacing:1px;text-transform:uppercase;margin-bottom:8px;">Parcours 03</div>
          <h3 style="font-family:'Outfit',sans-serif;font-size:1.25rem;color:#0f2756;margin-bottom:12px;">Pack Organisation &amp; Performance</h3>
          <p style="font-size:0.9rem;color:#475569;margin-bottom:16px;">Structurez vos opérations, fluidifiez vos processus et pilotez vos indicateurs clés.</p>
          <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:8px;padding:12px 14px;font-weight:600;font-size:0.88rem;color:#1e3a8a;">
            Diagnostic &rarr; Organisation &rarr; Procédures &rarr; Tableaux de bord
          </div>
        </div>

        <!-- PACK 4 -->
        <div class="animate-on-scroll" style="background:linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);border:1.5px solid #cbd5e1;border-radius:12px;padding:24px;position:relative;box-shadow:0 4px 12px rgba(0,0,0,0.04);">
          <div style="font-size:0.75rem;font-weight:800;color:#2563eb;letter-spacing:1px;text-transform:uppercase;margin-bottom:8px;">Parcours 04</div>
          <h3 style="font-family:'Outfit',sans-serif;font-size:1.25rem;color:#0f2756;margin-bottom:12px;">Pack Développement</h3>
          <p style="font-size:0.9rem;color:#475569;margin-bottom:16px;">Accélérez votre expansion, conquérez de nouveaux marchés et suivez vos performances.</p>
          <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:8px;padding:12px 14px;font-weight:600;font-size:0.88rem;color:#1e3a8a;">
            Audit &rarr; Stratégie &rarr; Croissance &rarr; Suivi des performances
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== SECTION 3: SÉMINAIRES & FORMATIONS LIÉES ========== -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Séminaires &amp; Formations Professionnelles Dédiées</h2>
        <p>Développez les compétences clés de vos équipes dirigeantes et opérationnelles grâce à nos modules pratiques.</p>
      </div>

      <div class="services-grid cols-3">
        <div class="service-card animate-on-scroll">
          <div class="icon">✦</div>
          <h3>Création &amp; Financement</h3>
          <p>Comment créer son entreprise avec succès &bull; Réussir son business plan &bull; Obtenir un financement bancaire &bull; Les incitations et avantages à l'investissement en Tunisie.</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">✦</div>
          <h3>Pilotage Financier &amp; Contrôle</h3>
          <p>Pilotage financier de la PME &bull; Contrôle de gestion et tableaux de bord &bull; Gestion proactive de trésorerie &bull; Analyse de rentabilité opérationnelle.</p>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">✦</div>
          <h3>Gouvernance &amp; Transformation</h3>
          <p>Gouvernance d'entreprise &bull; Management des risques &bull; Transformation digitale des PME &bull; Conduite du changement organisationnel.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Prêt à donner un nouvel élan à votre entreprise ?</h2>
      <p class="animate-on-scroll">Nos consultants seniors sont à votre écoute pour concevoir un programme d'accompagnement sur mesure.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url('devis'); ?>" class="btn btn-white">Demander un devis</a>
        <a href="<?php echo corentis_page_url('contact'); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
