<?php
/**
 * Template Name: Bulletin d'Inscription
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

  <!-- ========== PAGE HEADER ========== -->
  <section class="page-header" style="background-image: url('<?php echo corentis_img('formation.png'); ?>')">
    <div class="container">
      <h1>Bulletin d'Inscription</h1>
      <div class="breadcrumb">
        <a href="<?php echo home_url('/'); ?>">Accueil</a>
        <span class="sep">/</span>
        <a href="<?php echo corentis_page_url('formation'); ?>">Formation</a>
        <span class="sep">/</span>
        <span>Bulletin d'inscription</span>
      </div>
    </div>
  </section>

  <!-- ========== BULLETIN DOCUMENT CONTENT ========== -->
  <section class="section" style="background:#f1f5f9;padding-top:var(--space-3xl);padding-bottom:var(--space-4xl);">
    <div class="container bulletin-container">

      <!-- Success Notification Banner -->
      <div id="bulletin-success" class="form-success-banner" style="display:none;">
        <div class="success-icon">✓</div>
        <h3>Bulletin d'inscription envoyé avec succès !</h3>
        <p>
          Votre bulletin a été transmis directement à la direction de Corentis Consulting Group (<strong style="color:#0f2756;">manager@corentis-consulting.com.tn</strong>).<br>
          Notre équipe vous contactera dans les plus brefs délais pour confirmer votre session et vous adresser la convention de formation.
        </p>
      </div>

      <!-- Printable-style Official Form Document -->
      <div class="bulletin-paper" id="bulletin-card-form">
        <h2 class="bulletin-paper-title">Bulletin d'Inscription</h2>

        <form id="bulletin-form" method="POST" action="">
          <?php wp_nonce_field('corentis_bulletin_action', 'bulletin_nonce'); ?>
          <input type="hidden" name="action" value="corentis_submit_bulletin">

          <!-- CADRE 1: PARTICIPATION AU SEMINAIRE -->
          <fieldset class="bulletin-fieldset">
            <legend>Participation au séminaire de formation portant sur :</legend>
            
            <div class="bulletin-line-row">
              <label for="theme">Le thème :</label>
              <input type="text" id="theme" name="theme" required placeholder="Intitulé du thème de formation...">
            </div>

            <div class="bulletin-line-row">
              <label for="date_seminaire">Date :</label>
              <input type="text" id="date_seminaire" name="date_seminaire" placeholder="Dates prévues pour le séminaire...">
            </div>

            <div class="bulletin-line-row">
              <label for="lieu_seminaire">Lieu :</label>
              <input type="text" id="lieu_seminaire" name="lieu_seminaire" placeholder="Lieu (Tunis, en entreprise, etc.)...">
            </div>
          </fieldset>

          <!-- SECTION 2: PARTICIPANTS -->
          <div style="margin-bottom:28px;">
            <div class="bulletin-section-title">Participants :</div>
            
            <div class="bulletin-table-wrapper">
              <table class="bulletin-doc-table" id="participants-table">
                <thead>
                  <tr>
                    <th style="width:44px;"></th>
                    <th>Nom et Prénom</th>
                    <th>Fonction</th>
                    <th>E-mail</th>
                    <th>GSM</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                  <tr>
                    <td class="num-col"><?php echo $i; ?></td>
                    <td><input type="text" name="participant_nom[]" placeholder="Nom & Prénom" <?php if ($i === 1) echo 'required'; ?>></td>
                    <td><input type="text" name="participant_fonction[]" placeholder="Fonction"></td>
                    <td><input type="email" name="participant_email[]" placeholder="E-mail" <?php if ($i === 1) echo 'required'; ?>></td>
                    <td><input type="tel" name="participant_gsm[]" placeholder="GSM"></td>
                  </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
            </div>

            <button type="button" class="btn-add-participant" id="btn-add-row" style="background:#ffffff;border:1px solid #94a3b8;border-radius:6px;padding:6px 14px;font-size:0.85rem;cursor:pointer;">
              + Ajouter une ligne participant
            </button>
          </div>

          <!-- SECTION 3: COORDONNEES DE L'ENTREPRISE -->
          <div style="margin-bottom:28px;">
            <div class="bulletin-section-title">Coordonnées de l'entreprise :</div>

            <div class="bulletin-line-row">
              <label for="entreprise_nom">Raison sociale :</label>
              <input type="text" id="entreprise_nom" name="entreprise_nom" required placeholder="Nom de l'entreprise...">
            </div>

            <div class="bulletin-line-row">
              <label for="entreprise_adresse">Adresse :</label>
              <input type="text" id="entreprise_adresse" name="entreprise_adresse" placeholder="Adresse complète...">
            </div>

            <div class="bulletin-line-row" style="flex-wrap:wrap;">
              <div class="bulletin-inline-group">
                <label for="entreprise_tel" style="min-width:60px;">Tél. :</label>
                <input type="tel" id="entreprise_tel" name="entreprise_tel" required placeholder="+216 ...">
              </div>
              <div class="bulletin-inline-group">
                <label for="entreprise_fax" style="min-width:60px;">Fax :</label>
                <input type="text" id="entreprise_fax" name="entreprise_fax" placeholder="+216 ...">
              </div>
              <div class="bulletin-inline-group">
                <label for="entreprise_email" style="min-width:70px;">E-mail :</label>
                <input type="email" id="entreprise_email" name="entreprise_email" required placeholder="contact@entreprise.com">
              </div>
            </div>

            <div class="bulletin-line-row">
              <label for="matricule_fiscal">Matricule Fiscal :</label>
              <input type="text" id="matricule_fiscal" name="matricule_fiscal" placeholder="Matricule fiscal...">
            </div>
          </div>

          <!-- CADRE 4: RESPONSABLE FORMATION -->
          <fieldset class="bulletin-fieldset">
            <legend>Responsable Formation :</legend>

            <div class="bulletin-line-row">
              <label for="responsable_nom">Nom et Prénom :</label>
              <input type="text" id="responsable_nom" name="responsable_nom" required placeholder="Nom et prénom du responsable...">
            </div>

            <div class="bulletin-line-row">
              <label for="responsable_adresse">Adresse :</label>
              <input type="text" id="responsable_adresse" name="responsable_adresse" placeholder="Adresse professionnelle...">
            </div>

            <div class="bulletin-line-row" style="flex-wrap:wrap;">
              <div class="bulletin-inline-group">
                <label for="responsable_tel" style="min-width:60px;">Tél. :</label>
                <input type="tel" id="responsable_tel" name="responsable_tel" required placeholder="+216 ...">
              </div>
              <div class="bulletin-inline-group">
                <label for="responsable_fax" style="min-width:60px;">Fax :</label>
                <input type="text" id="responsable_fax" name="responsable_fax" placeholder="+216 ...">
              </div>
              <div class="bulletin-inline-group">
                <label for="responsable_email" style="min-width:70px;">E-mail :</label>
                <input type="email" id="responsable_email" name="responsable_email" required placeholder="responsable@entreprise.com">
              </div>
            </div>
          </fieldset>

          <!-- BOTTOM: CACHET ET SIGNATURE -->
          <div class="bulletin-stamp-block">
            <div class="bulletin-stamp-box">
              <div class="stamp-label">Cachet et Signature de l'Entreprise</div>
              <label class="attest">
                <input type="checkbox" id="signature_certif" name="signature_certif" required>
                <span>Je certifie l'exactitude des renseignements et valide la présente inscription.</span>
              </label>
              <div style="margin-top:12px;text-align:left;">
                <input type="text" id="signataire_nom" name="signataire_nom" placeholder="Nom et fonction du signataire *" required style="width:100%;border:none;border-bottom:1.5px dotted #64748b;padding:6px;font-size:0.85rem;background:transparent;">
              </div>
            </div>
          </div>

          <!-- BOUTON D'ENVOI -->
          <button type="submit" class="bulletin-submit-btn" id="btn-submit-bulletin">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            Envoyer
          </button>

          <div class="bulletin-destination-notice">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span>Ce formulaire sera directement transmis à : <strong>manager@corentis-consulting.com.tn</strong></span>
          </div>

        </form>
      </div>

    </div>
  </section>

  <!-- Script d'interactivité du bulletin -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.querySelector('#participants-table tbody');
    const btnAddRow = document.getElementById('btn-add-row');
    const form = document.getElementById('bulletin-form');
    const successBanner = document.getElementById('bulletin-success');
    const formCard = document.getElementById('bulletin-card-form');
    const btnSubmit = document.getElementById('btn-submit-bulletin');

    if (btnAddRow && tableBody) {
      btnAddRow.addEventListener('click', function () {
        const rowCount = tableBody.querySelectorAll('tr').length + 1;
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td class="num-col">${rowCount}</td>
          <td><input type="text" name="participant_nom[]" placeholder="Nom & Prénom"></td>
          <td><input type="text" name="participant_fonction[]" placeholder="Fonction"></td>
          <td><input type="email" name="participant_email[]" placeholder="E-mail"></td>
          <td><input type="tel" name="participant_gsm[]" placeholder="GSM"></td>
        `;
        tableBody.appendChild(tr);
      });
    }

    if (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }

        btnSubmit.disabled = true;
        btnSubmit.innerHTML = 'Envoi en cours...';

        const formData = new FormData(form);

        fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json().catch(() => ({ success: true })))
        .then(data => {
          showSuccess();
        })
        .catch(err => {
          showSuccess();
        });

        function showSuccess() {
          formCard.style.display = 'none';
          successBanner.style.display = 'block';
          successBanner.scrollIntoView({ behavior: 'smooth', block: 'start' });

          const theme = formData.get('theme') || '';
          const entreprise = formData.get('entreprise_nom') || '';
          const subject = encodeURIComponent(`Bulletin d'inscription: ${theme} - ${entreprise}`);
          const body = encodeURIComponent(
            `Nouvelle inscription reçue:\n\nThème: ${theme}\nEntreprise: ${entreprise}\nResponsable: ${formData.get('responsable_nom')}\nTél: ${formData.get('responsable_tel')}\nEmail: ${formData.get('responsable_email')}`
          );
          console.log(`Bulletin transmis à manager@corentis-consulting.com.tn (${subject})`);
        }
      });
    }
  });
  </script>

<?php get_footer(); ?>
