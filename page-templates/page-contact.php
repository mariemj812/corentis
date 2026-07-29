<?php
/**
 * Template Name: Contact
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header"><div class="container"><h1>Contact</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><span>Contact</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="contact-grid">
        <!-- Contact info -->
        <div class="contact-info animate-on-scroll">
          <h3>Restons en contact</h3>
          <p>N'hésitez pas à nous contacter pour toute question ou demande d'information. Notre équipe est à votre disposition.</p>
          
          <div class="contact-item">
            <div class="ci-icon">📍</div>
            <div>
              <h4>Adresse</h4>
              <p>Corentis Consulting Group<br>Casablanca, Maroc</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="ci-icon">📧</div>
            <div>
              <h4>Email</h4>
              <p>contact@corentis-consulting.com</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="ci-icon">📞</div>
            <div>
              <h4>Téléphone</h4>
              <p>+212 5XX XXX XXX</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="ci-icon">🕐</div>
            <div>
              <h4>Horaires</h4>
              <p>Lun — Ven : 9h00 — 18h00</p>
            </div>
          </div>
        </div>

        <!-- Contact form -->
        <div class="contact-form animate-on-scroll">
          <h3>Envoyez-nous un message</h3>
          <form id="contact-form">
            <div class="form-row">
              <div class="form-group">
                <label for="contact-nom">Nom *</label>
                <input type="text" id="contact-nom" name="nom" required placeholder="Votre nom">
              </div>
              <div class="form-group">
                <label for="contact-prenom">Prénom *</label>
                <input type="text" id="contact-prenom" name="prenom" required placeholder="Votre prénom">
              </div>
            </div>
            <div class="form-group">
              <label for="contact-email">Email *</label>
              <input type="email" id="contact-email" name="email" required placeholder="votre@email.com">
            </div>
            <div class="form-group">
              <label for="contact-sujet">Sujet</label>
              <select id="contact-sujet" name="sujet">
                <option value="">Sélectionnez un sujet</option>
                <option value="conseil">Conseil</option>
                <option value="audit">Audit</option>
                <option value="formation">Formation</option>
                <option value="devis">Demande de devis</option>
                <option value="partenariat">Partenariat</option>
                <option value="autre">Autre</option>
              </select>
            </div>
            <div class="form-group">
              <label for="contact-message">Message *</label>
              <textarea id="contact-message" name="message" required placeholder="Votre message..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;">Envoyer le message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
