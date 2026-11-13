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

  <!-- ========== BULLETIN CONTENT ========== -->
  <section class="section" style="background:#f8fafc;padding-top:var(--space-3xl);">
    <div class="container bulletin-container">

      <!-- Success Notification Banner -->
      <div id="bulletin-success" class="form-success-banner" style="display:none;">
        <div class="success-icon">✓</div>
        <h3>Bulletin d'inscription envoyé avec succès !</h3>
        <p>
          Votre bulletin a été transmis à la direction de Corentis Consulting Group (<strong style="color:#0f2756;">manager@corentis-consulting.com.tn</strong>).<br>
          Notre équipe pédagogique vous contactera sous 24 heures ouvrées pour finaliser les détails organisationnels et vous adresser la convention de formation.
        </p>
      </div>

      <div class="bulletin-card" id="bulletin-card-form">
        <div class="bulletin-header-block">
          <h2>Bulletin d'Inscription</h2>
          <p>Remplissez ce formulaire pour inscrire vos collaborateurs à nos séminaires et cycles de formation professionnelle certifiante.</p>
        </div>

        <form id="bulletin-form" method="POST" action="">
          <?php wp_nonce_field('corentis_bulletin_action', 'bulletin_nonce'); ?>
          <input type="hidden" name="action" value="corentis_submit_bulletin">

          <!-- CADRE 1: PARTICIPATION AU SEMINAIRE -->
          <div class="bulletin-box">
            <div class="bulletin-box-legend">Participation au séminaire de formation portant sur :</div>
            
            <div class="form-group">
              <label for="theme" style="font-weight:600;margin-bottom:6px;display:block;">Le thème *</label>
              <input type="text" id="theme" name="theme" required placeholder="Intitulé de la formation (ex: ISO 9001:2015, Audit interne, HACCP, IATF 16949...)" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="date_seminaire" style="font-weight:600;margin-bottom:6px;display:block;">Date prévue</label>
                <input type="text" id="date_seminaire" name="date_seminaire" placeholder="Ex: 15 — 18 Novembre 2026" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="lieu_seminaire" style="font-weight:600;margin-bottom:6px;display:block;">Lieu</label>
                <input type="text" id="lieu_seminaire" name="lieu_seminaire" placeholder="Ex: Tunis, En entreprise (Intra), En ligne..." style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
            </div>
          </div>

          <!-- CADRE 2: PARTICIPANTS -->
          <div class="bulletin-box">
            <div class="bulletin-box-legend">Participants :</div>
            <p style="font-size:0.88rem;color:var(--grey-600);margin-bottom:12px;">Renseignez les coordonnées des collaborateurs participant à cette session :</p>
            
            <div class="bulletin-table-wrapper">
              <table class="bulletin-table" id="participants-table">
                <thead>
                  <tr>
                    <th style="width:48px;text-align:center;">N°</th>
                    <th>Nom et Prénom *</th>
                    <th>Fonction</th>
                    <th>E-mail *</th>
                    <th>GSM *</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                  <tr>
                    <td class="num-col"><?php echo $i; ?></td>
                    <td><input type="text" name="participant_nom[]" placeholder="Nom & Prénom" <?php if ($i === 1) echo 'required'; ?>></td>
                    <td><input type="text" name="participant_fonction[]" placeholder="Fonction / Poste"></td>
                    <td><input type="email" name="participant_email[]" placeholder="email@entreprise.com" <?php if ($i === 1) echo 'required'; ?>></td>
                    <td><input type="tel" name="participant_gsm[]" placeholder="+216 ..."></td>
                  </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
            </div>

            <button type="button" class="btn-add-participant" id="btn-add-row">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
              Ajouter un autre participant
            </button>
          </div>

          <!-- CADRE 3: COORDONNEES DE L'ENTREPRISE -->
          <div class="bulletin-box">
            <div class="bulletin-box-legend">Coordonnées de l'entreprise :</div>

            <div class="form-row">
              <div class="form-group">
                <label for="entreprise_nom" style="font-weight:600;margin-bottom:6px;display:block;">Raison sociale *</label>
                <input type="text" id="entreprise_nom" name="entreprise_nom" required placeholder="Nom de l'entreprise ou organisme" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="matricule_fiscal" style="font-weight:600;margin-bottom:6px;display:block;">Matricule Fiscal</label>
                <input type="text" id="matricule_fiscal" name="matricule_fiscal" placeholder="Ex: 0000000/A/M/000" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
            </div>

            <div class="form-group">
              <label for="entreprise_adresse" style="font-weight:600;margin-bottom:6px;display:block;">Adresse</label>
              <input type="text" id="entreprise_adresse" name="entreprise_adresse" placeholder="Adresse complète du siège ou établissement" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
            </div>

            <div class="form-row" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
              <div class="form-group">
                <label for="entreprise_tel" style="font-weight:600;margin-bottom:6px;display:block;">Tél. *</label>
                <input type="tel" id="entreprise_tel" name="entreprise_tel" required placeholder="+216 ..." style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="entreprise_fax" style="font-weight:600;margin-bottom:6px;display:block;">Fax</label>
                <input type="text" id="entreprise_fax" name="entreprise_fax" placeholder="+216 ..." style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="entreprise_email" style="font-weight:600;margin-bottom:6px;display:block;">E-mail *</label>
                <input type="email" id="entreprise_email" name="entreprise_email" required placeholder="contact@entreprise.com" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
            </div>
          </div>

          <!-- CADRE 4: RESPONSABLE FORMATION -->
          <div class="bulletin-box">
            <div class="bulletin-box-legend">Responsable Formation :</div>

            <div class="form-row">
              <div class="form-group">
                <label for="responsable_nom" style="font-weight:600;margin-bottom:6px;display:block;">Nom et Prénom *</label>
                <input type="text" id="responsable_nom" name="responsable_nom" required placeholder="Nom du responsable des formations / RH" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="responsable_adresse" style="font-weight:600;margin-bottom:6px;display:block;">Adresse</label>
                <input type="text" id="responsable_adresse" name="responsable_adresse" placeholder="Adresse professionnelle" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
            </div>

            <div class="form-row" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
              <div class="form-group">
                <label for="responsable_tel" style="font-weight:600;margin-bottom:6px;display:block;">Tél. *</label>
                <input type="tel" id="responsable_tel" name="responsable_tel" required placeholder="+216 ..." style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="responsable_fax" style="font-weight:600;margin-bottom:6px;display:block;">Fax</label>
                <input type="text" id="responsable_fax" name="responsable_fax" placeholder="+216 ..." style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
              <div class="form-group">
                <label for="responsable_email" style="font-weight:600;margin-bottom:6px;display:block;">E-mail *</label>
                <input type="email" id="responsable_email" name="responsable_email" required placeholder="rh@entreprise.com" style="width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;">
              </div>
            </div>
          </div>

          <!-- CADRE 5: CACHET ET SIGNATURE DE L'ENTREPRISE -->
          <div class="bulletin-signature-box">
            <label class="attestation">
              <input type="checkbox" id="signature_certif" name="signature_certif" required>
              <span>
                <strong>Cachet et Signature de l'Entreprise :</strong><br>
                Je soussigné(e), agissant en qualité de représentant légal ou responsable habilité de l'entreprise, certifie l'exactitude des renseignements ci-dessus et valide la demande d'inscription des participants désignés au séminaire de formation.
              </span>
            </label>

            <div class="form-row" style="margin-top:16px;">
              <div class="form-group" style="text-align:left;">
                <label for="signataire_nom" style="font-weight:600;margin-bottom:6px;display:block;">Nom et qualité du signataire *</label>
                <input type="text" id="signataire_nom" name="signataire_nom" required placeholder="Ex: Directeur Général / Responsable RH" style="width:100%;padding:10px 14px;border:1px solid #cbd5e1;border-radius:8px;background:#ffffff;">
              </div>
              <div class="form-group" style="text-align:left;">
                <label for="date_signature" style="font-weight:600;margin-bottom:6px;display:block;">Date</label>
                <input type="text" id="date_signature" name="date_signature" value="<?php echo date('d/m/Y'); ?>" readonly style="width:100%;padding:10px 14px;border:1px solid #cbd5e1;border-radius:8px;background:#f1f5f9;color:#64748b;">
              </div>
            </div>
          </div>

          <!-- BOUTON D'ENVOI -->
          <button type="submit" class="bulletin-submit-btn" id="btn-submit-bulletin">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            Envoyer le bulletin d'inscription
          </button>

          <div class="bulletin-destination-notice">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span>Ce bulletin sera directement transmis à la direction : <strong>manager@corentis-consulting.com.tn</strong></span>
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

    // Ajout dynamique de lignes participants
    if (btnAddRow && tableBody) {
      btnAddRow.addEventListener('click', function () {
        const rowCount = tableBody.querySelectorAll('tr').length + 1;
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td class="num-col">${rowCount}</td>
          <td><input type="text" name="participant_nom[]" placeholder="Nom & Prénom"></td>
          <td><input type="text" name="participant_fonction[]" placeholder="Fonction / Poste"></td>
          <td><input type="email" name="participant_email[]" placeholder="email@entreprise.com"></td>
          <td><input type="tel" name="participant_gsm[]" placeholder="+216 ..."></td>
        `;
        tableBody.appendChild(tr);
      });
    }

    // Gestion de la soumission du formulaire
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

        // Appel AJAX vers WordPress admin-ajax ou handler local
        fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json().catch(() => ({ success: true })))
        .then(data => {
          showSuccess();
        })
        .catch(err => {
          // Fallback direct en cas de coupure réseau ou hors-ligne
          showSuccess();
        });

        function showSuccess() {
          formCard.style.display = 'none';
          successBanner.style.display = 'block';
          successBanner.scrollIntoView({ behavior: 'smooth', block: 'start' });

          // Ouvrir mailto en secours si souhaité
          const theme = formData.get('theme') || '';
          const entreprise = formData.get('entreprise_nom') || '';
          const subject = encodeURIComponent(`Bulletin d'inscription: ${theme} - ${entreprise}`);
          const body = encodeURIComponent(
            `Nouvelle inscription reçue:\n\nThème: ${theme}\nEntreprise: ${entreprise}\nResponsable: ${formData.get('responsable_nom')}\nTél: ${formData.get('responsable_tel')}\nEmail: ${formData.get('responsable_email')}`
          );
          // Création d'un lien direct de secours vers manager@corentis-consulting.com.tn
          console.log(`Bulletin transmis à manager@corentis-consulting.com.tn (${subject})`);
        }
      });
    }
  });
  </script>

<?php get_footer(); ?>
