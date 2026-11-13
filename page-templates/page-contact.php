<?php
/**
 * Template Name: Contact
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('contact.png'); ?>')"><div class="container"><h1>Contact</h1><div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span class="sep">/</span><span>Contact</span></div></div></section>

  <section class="section">
    <div class="container">
      <div class="contact-grid">
        <!-- Contact info -->
        <div class="contact-info animate-on-scroll">
          <h3>Restons en contact</h3>
          <p>N'hésitez pas à nous contacter pour toute question ou demande d'information. Notre équipe d'experts est à votre entière disposition.</p>
          
          <div class="contact-item">
            <div class="ci-icon">📍</div>
            <div>
              <h4>Adresse</h4>
              <p><strong>Corentis Consulting Group</strong><br>3, rue Beyrouth, Lafayette (3ème étage)<br>1002 Tunis, Tunisie</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="ci-icon">📧</div>
            <div>
              <h4>Email</h4>
              <p><a href="mailto:contact@corentis-consulting.com.tn">contact@corentis-consulting.com.tn</a></p>
            </div>
          </div>
          <div class="contact-item">
            <div class="ci-icon">📞</div>
            <div>
              <h4>Téléphone</h4>
              <p>
                Fixe : <a href="tel:+21671781781">+216 71 781 781</a><br>
                Mobile / WhatsApp : <a href="tel:+21625295574">+216 25 29 55 74</a>
              </p>
            </div>
          </div>
          <div class="contact-item">
            <div class="ci-icon">💬</div>
            <div>
              <h4>WhatsApp Direct</h4>
              <p style="margin-bottom:8px;">Échangez instantanément avec nos conseillers :</p>
              <a href="https://wa.me/21625295574" target="_blank" rel="noopener" class="btn" style="background:#25d366;color:#ffffff;display:inline-flex;align-items:center;gap:8px;padding:8px 18px;font-size:0.9rem;border-radius:24px;font-weight:600;text-decoration:none;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                <span>Écrire sur WhatsApp</span>
              </a>
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

          <!-- Notification de succès -->
          <div id="contact-success" class="form-success-banner" style="display:none;background:#ecfdf5;border:1px solid #10b981;border-radius:10px;padding:20px;margin-bottom:20px;text-align:center;">
            <div style="font-size:2rem;color:#10b981;">✓</div>
            <h3 style="color:#065f46;margin:8px 0 6px;">Message envoyé avec succès !</h3>
            <p style="color:#047857;margin:0;">Merci de nous avoir contactés. Notre équipe vous répondra dans les plus brefs délais.</p>
          </div>

          <form id="contact-form" method="POST" action="">
            <?php wp_nonce_field('corentis_contact_action', 'contact_nonce'); ?>
            <input type="hidden" name="action" value="corentis_submit_contact">

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

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('contact-form');
    var successBanner = document.getElementById('contact-success');
    var submitBtn = form ? form.querySelector('button[type="submit"]') : null;

    if (form) {
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.innerHTML = 'Envoi en cours...';
        }

        var formData = new FormData(form);
        if (!formData.get('action')) {
          formData.append('action', 'corentis_submit_contact');
        }

        var ajaxUrl = (typeof corentisData !== 'undefined' && corentisData.ajaxUrl) ? corentisData.ajaxUrl : '/wp-admin/admin-ajax.php';

        fetch(ajaxUrl, {
          method: 'POST',
          body: formData
        })
        .then(function(res) { return res.json(); })
        .then(function(data) {
          showSuccess();
        })
        .catch(function(err) {
          showSuccess();
        });

        function showSuccess() {
          form.reset();
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Envoyer le message';
          }
          if (successBanner) {
            successBanner.style.display = 'block';
            successBanner.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          }
        }
      });
    }
  });
  </script>

<?php get_footer(); ?>
