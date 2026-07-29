<?php
/**
 * Template Name: Devis
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Demander un Devis</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><span>Devis</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="devis-form-wrap">
        <div class="contact-form animate-on-scroll">
          <h3 style="text-align:center;margin-bottom:var(--space-sm);">Obtenez votre devis personnalisé</h3>
          <p style="text-align:center;margin-bottom:var(--space-2xl);color:var(--grey-500);font-size:0.95rem;">Remplissez le formulaire ci-dessous et nous vous enverrons un devis adapté à vos besoins sous 48h.</p>
          
          <form id="devis-form">
            <div class="form-row">
              <div class="form-group">
                <label for="devis-nom">Nom complet *</label>
                <input type="text" id="devis-nom" name="nom" required placeholder="Votre nom complet">
              </div>
              <div class="form-group">
                <label for="devis-email">Email professionnel *</label>
                <input type="email" id="devis-email" name="email" required placeholder="votre@email.com">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="devis-entreprise">Entreprise *</label>
                <input type="text" id="devis-entreprise" name="entreprise" required placeholder="Nom de votre entreprise">
              </div>
              <div class="form-group">
                <label for="devis-tel">Téléphone</label>
                <input type="tel" id="devis-tel" name="telephone" placeholder="+212 6XX XXX XXX">
              </div>
            </div>
            <div class="form-group">
              <label for="devis-secteur">Secteur d'activité</label>
              <select id="devis-secteur" name="secteur">
                <option value="">Sélectionnez votre secteur</option>
                <option value="industrie">Industrie</option>
                <option value="agroalimentaire">Agroalimentaire</option>
                <option value="automobile">Automobile</option>
                <option value="cosmetique">Cosmétique</option>
                <option value="services">Services</option>
                <option value="education">Éducation</option>
                <option value="evenementiel">Événementiel</option>
                <option value="autre">Autre</option>
              </select>
            </div>
            <div class="form-group">
              <label>Services souhaités *</label>
              <div class="devis-services">
                <label><input type="checkbox" name="services" value="conseil-qualite"> Conseil Qualité</label>
                <label><input type="checkbox" name="services" value="conseil-environnement"> Conseil Environnement</label>
                <label><input type="checkbox" name="services" value="conseil-sst"> Conseil SST</label>
                <label><input type="checkbox" name="services" value="conseil-hygiene"> Conseil Hygiène</label>
                <label><input type="checkbox" name="services" value="conseil-social"> Conseil Social</label>
                <label><input type="checkbox" name="services" value="audit-qualite"> Audit Qualité</label>
                <label><input type="checkbox" name="services" value="audit-environnement"> Audit Environnement</label>
                <label><input type="checkbox" name="services" value="audit-sst"> Audit SST</label>
                <label><input type="checkbox" name="services" value="audit-qhse"> Audit QHSE</label>
                <label><input type="checkbox" name="services" value="audit-social"> Audit Social</label>
                <label><input type="checkbox" name="services" value="audit-agro"> Audit Agroalimentaire</label>
                <label><input type="checkbox" name="services" value="formation"> Formation</label>
              </div>
            </div>
            <div class="form-group">
              <label for="devis-message">Description de votre besoin</label>
              <textarea id="devis-message" name="message" placeholder="Décrivez votre projet, vos objectifs et toute information utile pour l'élaboration de votre devis..."></textarea>
            </div>
            <div style="text-align:center;">
              <button type="submit" class="btn btn-primary" style="min-width:260px;">Envoyer ma demande de devis</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
