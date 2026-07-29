<?php
/**
 * Front Page Template — Corentis Consulting Group
 *
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

  <!-- ========== HERO ========== -->
  <section class="hero" id="hero">
    <div class="hero-bg">
      <img src="<?php echo corentis_img( 'hero.png' ); ?>" alt="Corentis Consulting Group">
    </div>
    <div class="hero-shapes">
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
    </div>
    <div class="container">
      <div class="hero-content">
        <div class="badge">✦ Cabinet de conseil certifié</div>
        <h1>Votre partenaire en <span>stratégie, performance</span> et croissance</h1>
        <p>Corentis Consulting Group accompagne les entreprises dans la mise en place de systèmes de management, l'audit et la formation pour atteindre l'excellence opérationnelle.</p>
        <div class="hero-buttons">
          <a href="<?php echo corentis_page_url( 'devis' ); ?>" class="btn btn-primary">Demander un devis</a>
          <a href="<?php echo corentis_page_url( 'qui-sommes-nous' ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Découvrir nos services</a>
        </div>
      </div>
    </div>
    <div class="hero-stats">
      <div class="container">
        <div class="stat-item">
          <div class="number" data-count="150" data-suffix="+">0</div>
          <div class="label">Clients accompagnés</div>
        </div>
        <div class="stat-item">
          <div class="number" data-count="20" data-suffix="+">0</div>
          <div class="label">Normes couvertes</div>
        </div>
        <div class="stat-item">
          <div class="number" data-count="15" data-suffix="">0</div>
          <div class="label">Années d'expérience</div>
        </div>
        <div class="stat-item">
          <div class="number" data-count="98" data-suffix="%">0</div>
          <div class="label">Taux de satisfaction</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SERVICES ========== -->
  <section class="section" id="services">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos domaines d'expertise</h2>
        <p>Des solutions sur mesure pour accompagner votre croissance et garantir la conformité de vos systèmes de management.</p>
      </div>
      <div class="services-grid">
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
          </div>
          <h3>Conseil</h3>
          <p>Accompagnement dans la mise en place de systèmes de management : Qualité, Environnement, SST, Hygiène, Social et plus encore.</p>
          <a href="<?php echo corentis_page_url( 'conseil' ); ?>" class="card-link">En savoir plus</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
          </div>
          <h3>Audit</h3>
          <p>Évaluation des performances de vos systèmes de management : Qualité, Environnement, SST, QHSE intégré, Social et Agroalimentaire.</p>
          <a href="<?php echo corentis_page_url( 'audit' ); ?>" class="card-link">En savoir plus</a>
        </div>
        <div class="service-card animate-on-scroll">
          <div class="icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <h3>Formation</h3>
          <p>Programmes de formation adaptés pour renforcer les compétences de vos équipes en management de la qualité et conformité.</p>
          <a href="<?php echo corentis_page_url( 'formation' ); ?>" class="card-link">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== NORMS SHOWCASE ========== -->
  <section class="norms-showcase" id="norms">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Nos normes de référence</h2>
        <p>Une expertise couvrant plus de 20 référentiels et normes internationales pour tous les secteurs d'activité.</p>
      </div>
      <div class="norms-grid animate-on-scroll">
        <?php
        $norms = array('ISO 9001','ISO 14001','ISO 45001','IATF 16949','HACCP','ISO 22000','FSSC 22000','BRC / IFS','SA 8000','SMETA / BSCI','ISO 17025','ISO 22716');
        foreach ( $norms as $norm ) : ?>
        <div class="norm-badge">
          <div class="norm-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <?php echo esc_html( $norm ); ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ========== ABOUT PREVIEW ========== -->
  <section class="section" style="background:var(--grey-50);">
    <div class="container">
      <div class="about-grid">
        <div class="about-image animate-on-scroll">
          <img src="<?php echo corentis_img( 'team.png' ); ?>" alt="Équipe Corentis Consulting Group">
        </div>
        <div class="about-text animate-on-scroll">
          <h2>Pourquoi choisir <span>Corentis</span> ?</h2>
          <p>Avec plus de 15 ans d'expérience, Corentis Consulting Group est votre partenaire de confiance pour atteindre l'excellence opérationnelle et assurer la conformité à plus de 20 normes internationales.</p>
          <div class="about-features">
            <div class="about-feature">
              <div class="feat-icon">✓</div>
              <div>
                <h4>Expertise certifiée</h4>
                <p>Consultants qualifiés</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="feat-icon">★</div>
              <div>
                <h4>Multi-sectoriel</h4>
                <p>Tous secteurs d'activité</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="feat-icon">◆</div>
              <div>
                <h4>Sur mesure</h4>
                <p>Solutions personnalisées</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="feat-icon">●</div>
              <div>
                <h4>Accompagnement</h4>
                <p>Suivi continu et support</p>
              </div>
            </div>
          </div>
          <a href="<?php echo corentis_page_url( 'qui-sommes-nous' ); ?>" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TESTIMONIALS ========== -->
  <section class="testimonials-section" id="testimonials">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Ce que disent nos clients</h2>
        <p>La satisfaction de nos clients témoigne de la qualité de nos prestations et de notre engagement.</p>
      </div>
      <div class="testimonials-viewport">
        <div class="testimonials-track" id="testimonials-track">
          <?php
          $testimonials = array(
              array( 'quote' => '« L\'accompagnement de Corentis a été déterminant dans l\'obtention de notre certification ISO 9001. Leur expertise et leur professionnalisme sont remarquables. »', 'initials' => 'MK', 'name' => 'Mohamed K.', 'role' => 'Directeur Qualité — Industrie' ),
              array( 'quote' => '« La formation dispensée par Corentis a permis à nos équipes de monter en compétences de manière significative. Une approche pédagogique efficace et pratique. »', 'initials' => 'SB', 'name' => 'Sonia B.', 'role' => 'Responsable RH — Agroalimentaire' ),
              array( 'quote' => '« Grâce à l\'audit de Corentis, nous avons identifié des axes d\'amélioration cruciaux pour notre système de management environnemental. Un travail de qualité. »', 'initials' => 'AH', 'name' => 'Ahmed H.', 'role' => 'PDG — Société de services' ),
              array( 'quote' => '« Corentis nous a accompagnés dans la mise en place du HACCP et de l\'ISO 22000. Leur rigueur et leur disponibilité ont fait la différence. Je recommande vivement. »', 'initials' => 'FL', 'name' => 'Fatma L.', 'role' => 'Directrice Production — Agroalimentaire' ),
              array( 'quote' => '« La ponctualité, l\'écoute et la qualité des formateurs de Corentis sont exceptionnelles. Une collaboration enrichissante à tous les niveaux. »', 'initials' => 'YT', 'name' => 'Youssef T.', 'role' => 'Responsable HSE — Industrie' ),
              array( 'quote' => '« L\'équipe de Corentis a su s\'adapter à nos contraintes et proposer des solutions concrètes pour notre conformité SA 8000. Un partenaire de confiance. »', 'initials' => 'NR', 'name' => 'Nadia R.', 'role' => 'Directrice RSE — Textile' ),
          );
          foreach ( $testimonials as $t ) : ?>
          <div class="testimonial-card">
            <div class="testimonial-stars">★★★★★</div>
            <div class="testimonial-quote"><?php echo $t['quote']; ?></div>
            <div class="testimonial-author">
              <div class="testimonial-avatar"><?php echo esc_html( $t['initials'] ); ?></div>
              <div>
                <h4><?php echo esc_html( $t['name'] ); ?></h4>
                <p><?php echo esc_html( $t['role'] ); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="testimonials-nav">
        <button id="testimonial-prev" aria-label="Précédent">←</button>
        <button id="testimonial-next" aria-label="Suivant">→</button>
      </div>
    </div>
  </section>

  <!-- ========== PARTNERS ========== -->
  <section class="partners-section" id="partners">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Ils nous font confiance</h2>
        <p>Des entreprises de tous secteurs nous accordent leur confiance pour leurs projets de certification et d'amélioration continue.</p>
      </div>
      <div class="partners-track-wrapper">
        <div class="partners-track" id="partners-track">
          <?php for ( $i = 1; $i <= 8; $i++ ) : ?>
          <svg class="partner-logo" width="140" height="50" viewBox="0 0 140 50"><rect width="140" height="50" rx="8" fill="#e2e8f0"/><text x="70" y="30" text-anchor="middle" fill="#94a3b8" font-family="Inter, sans-serif" font-size="12" font-weight="600">Client <?php echo $i; ?></text></svg>
          <?php endfor; ?>
          <?php for ( $i = 1; $i <= 8; $i++ ) : ?>
          <svg class="partner-logo" width="140" height="50" viewBox="0 0 140 50"><rect width="140" height="50" rx="8" fill="#e2e8f0"/><text x="70" y="30" text-anchor="middle" fill="#94a3b8" font-family="Inter, sans-serif" font-size="12" font-weight="600">Client <?php echo $i; ?></text></svg>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA ========== -->
  <section class="cta-section">
    <div class="container">
      <h2 class="animate-on-scroll">Prêt à transformer votre entreprise ?</h2>
      <p class="animate-on-scroll">Contactez-nous dès aujourd'hui pour un accompagnement personnalisé et un devis gratuit.</p>
      <div class="cta-buttons animate-on-scroll">
        <a href="<?php echo corentis_page_url( 'devis' ); ?>" class="btn btn-white">Demander un devis gratuit</a>
        <a href="<?php echo corentis_page_url( 'contact' ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.4);color:#fff;">Nous contacter</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
