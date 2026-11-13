<?php
/**
 * Template Name: Devis & Pré-diagnostic
 * 
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<section class="page-header" style="background-image: url('<?php echo corentis_img('devis.png'); ?>')">
  <div class="container">
    <h1>Demander un Devis</h1>
    <div class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Accueil</a>
      <span class="sep">/</span>
      <span>Questionnaire de pré-diagnostic</span>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
      <div class="devis-form-wrap">
        
        <!-- CARTE D'INTRODUCTION -->
        <div class="devis-intro-card animate-on-scroll">
          <div class="badge-top">✦ Pré-diagnostic ISO & Accompagnement</div>
          <h2>Questionnaire de Pré-Diagnostic</h2>
          <div class="objet-badge"><strong>Objet :</strong> Recueil d’informations pour l’élaboration d’une proposition technique et financière</div>
          <p class="intro-text">
            Afin de nous permettre de mieux comprendre votre organisation, votre activité et vos besoins spécifiques pour la mise en place d’un système de management conforme aux normes ISO, nous vous remercions de bien vouloir compléter ce questionnaire.<br>
            Les informations recueillies permettront à nos consultants seniors d'élaborer une offre technique et financière sur mesure sous 48h.
          </p>
          <div class="devis-benefits-grid">
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Référentiel(s) ISO :</strong> Définition des normes cibles</span></div>
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Périmètre :</strong> Délimitation des sites et processus</span></div>
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Maturité :</strong> Évaluation du système existant</span></div>
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Ressources :</strong> Dimensionnement de l'accompagnement</span></div>
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Étapes clés :</strong> Diagnostic, plan d'action, formation, audit blanc</span></div>
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Durée :</strong> Calendrier prévisionnel de certification</span></div>
            <div class="devis-benefit-item"><span class="icon">✓</span> <span><strong>Offre financière :</strong> Proposition claire et transparente</span></div>
          </div>
        </div>

        <!-- MESSAGE DE SUCCÈS (APPARU APRÈS SOUMISSION) -->
        <div id="devis-success-message" class="form-success-banner">
          <div class="success-icon">✓</div>
          <h3>Questionnaire transmis avec succès !</h3>
          <p>Merci pour votre confiance. Nos consultants experts analysent vos données de pré-diagnostic et vous recontacteront sous 48 heures ouvrées avec une proposition technique et financière détaillée.</p>
        </div>

        <!-- FORMULAIRE PRINCIPAL -->
        <form id="devis-form" class="animate-on-scroll" method="POST" action="">
          <?php wp_nonce_field('corentis_devis_action', 'devis_nonce'); ?>
          <input type="hidden" name="action" value="corentis_submit_devis">
          
          <!-- SECTION 1 : INFORMATIONS GÉNÉRALES -->
          <div class="devis-section">
            <div class="devis-section-header">
              <div class="devis-section-num">01</div>
              <div class="devis-section-title">
                <h3>Informations Générales sur l'Entreprise</h3>
                <p>Coordonnées et dimensionnement de votre structure</p>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="devis-raison-sociale">Raison sociale *</label>
                <input type="text" id="devis-raison-sociale" name="raison_sociale" required placeholder="Nom officiel de votre entreprise">
              </div>
              <div class="form-group">
                <label for="devis-siege">Adresse du siège social *</label>
                <input type="text" id="devis-siege" name="adresse_siege" required placeholder="Adresse complète, Ville, Pays">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="devis-sites-projet">Site(s) concerné(s) par le projet</label>
                <input type="text" id="devis-sites-projet" name="sites_projet" placeholder="Ex: Siège Tunis, Usine Sousse, Agence Sfax...">
              </div>
              <div class="form-group">
                <label for="devis-contact-personne">Nom et fonction du contact principal *</label>
                <input type="text" id="devis-contact-personne" name="contact_personne" required placeholder="Ex: Wissem Jerbi, Directeur Général">
              </div>
            </div>

            <div class="form-row-3">
              <div class="form-group">
                <label for="devis-tel">Téléphone *</label>
                <input type="tel" id="devis-tel" name="telephone" required placeholder="+216 XX XXX XXX">
              </div>
              <div class="form-group">
                <label for="devis-email">E-mail professionnel *</label>
                <input type="email" id="devis-email" name="email" required placeholder="contact@entreprise.com">
              </div>
              <div class="form-group">
                <label for="devis-website">Site web</label>
                <input type="url" id="devis-website" name="site_web" placeholder="https://www.entreprise.com">
              </div>
            </div>

            <div class="sub-question" style="margin-top:14px;">
              <span class="sub-question-title">Effectif total de l'entreprise *</span>
              <div class="choice-grid">
                <label class="choice-card"><input type="radio" name="effectif_total" value="1-10" required> <span>1 – 10 salariés</span></label>
                <label class="choice-card"><input type="radio" name="effectif_total" value="11-25"> <span>11 – 25 salariés</span></label>
                <label class="choice-card"><input type="radio" name="effectif_total" value="26-50"> <span>26 – 50 salariés</span></label>
                <label class="choice-card"><input type="radio" name="effectif_total" value="51-100"> <span>51 – 100 salariés</span></label>
                <label class="choice-card"><input type="radio" name="effectif_total" value="101-250"> <span>101 – 250 salariés</span></label>
                <label class="choice-card"><input type="radio" name="effectif_total" value="plus-250"> <span>Plus de 250 salariés</span></label>
              </div>
            </div>

            <div class="form-row" style="margin-top:20px;">
              <div class="form-group">
                <label for="devis-nb-sites">Nombre de sites concernés</label>
                <input type="text" id="devis-nb-sites" name="nb_sites" placeholder="Ex: 1 site unique, 3 sites...">
              </div>
              <div class="form-group">
                <label for="devis-effectif-site">Effectif par site</label>
                <input type="text" id="devis-effectif-site" name="effectif_par_site" placeholder="Ex: Siège: 25, Site secondaire: 60">
              </div>
            </div>
          </div>

          <!-- SECTION 2 : ACTIVITÉS DE L'ENTREPRISE -->
          <div class="devis-section">
            <div class="devis-section-header">
              <div class="devis-section-num">02</div>
              <div class="devis-section-title">
                <h3>Activités de l'Entreprise</h3>
                <p>Métier, processus opérationnels et segments clients</p>
              </div>
            </div>

            <div class="sub-question">
              <label for="devis-activite-principale" class="sub-question-title">2.1 Décrire brièvement l’activité principale de l’entreprise *</label>
              <textarea id="devis-activite-principale" name="activite_principale" rows="3" required placeholder="Présentez en quelques lignes votre coeur de métier, savoir-faire et spécificités..."></textarea>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">2.2 Principales activités / processus (cochez les processus concernés)</span>
              <div class="choice-grid cols-3">
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Direction / management"> <span>Direction / management</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Commercial / marketing"> <span>Commercial / marketing</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Achats / approvisionnement"> <span>Achats / approvisionnement</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Production / fabrication"> <span>Production / fabrication</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Logistique / transport"> <span>Logistique / transport</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Stockage"> <span>Stockage</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Maintenance"> <span>Maintenance</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Installation / chantier"> <span>Installation / chantier</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Prestations de services"> <span>Prestations de services</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Recherche & développement"> <span>Recherche & développement</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Laboratoire / contrôle"> <span>Laboratoire / contrôle</span></label>
                <label class="choice-card"><input type="checkbox" name="processus[]" value="Ressources humaines / formation"> <span>Ressources humaines / formation</span></label>
              </div>
              <div style="margin-top:12px;">
                <input type="text" name="processus_autre" placeholder="Autre activité / processus (préciser)...">
              </div>
            </div>

            <div class="sub-question">
              <label for="devis-produits-services" class="sub-question-title">2.3 Produits ou services principaux</label>
              <textarea id="devis-produits-services" name="produits_services" rows="2" placeholder="Listez vos familles de produits ou types de prestations phares..."></textarea>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">2.4 Principaux marchés / clients</span>
              <div class="choice-grid cols-3">
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Local"> <span>Marché Local</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="National"> <span>Marché National</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="International"> <span>Marché International</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Secteur public"> <span>Secteur public</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Secteur privé"> <span>Secteur privé</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Grande distribution"> <span>Grande distribution</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Industrie"> <span>Industrie manufacturière</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Agroalimentaire"> <span>Agroalimentaire</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Automobile"> <span>Automobile</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="BTP / construction"> <span>BTP / Construction</span></label>
                <label class="choice-card"><input type="checkbox" name="marches[]" value="Santé"> <span>Santé / Médical</span></label>
              </div>
              <div style="margin-top:12px;">
                <input type="text" name="marches_autre" placeholder="Autre marché / client (préciser)...">
              </div>
            </div>
          </div>

          <!-- SECTION 3 : OBJECTIF DU PROJET -->
          <div class="devis-section">
            <div class="devis-section-header">
              <div class="devis-section-num">03</div>
              <div class="devis-section-title">
                <h3>Objectif du Projet</h3>
                <p>Finalité stratégique et calendrier prévisionnel</p>
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">3.1 Quel est l’objectif principal de votre démarche ISO ? (plusieurs choix possibles)</span>
              <div class="choice-grid cols-2">
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Obtenir une première certification"> <span>Obtenir une première certification</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Maintenir une certification existante"> <span>Maintenir une certification existante</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Renouveler une certification"> <span>Renouveler une certification</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Mettre à niveau un système existant"> <span>Mettre à niveau un système existant</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Répondre aux exigences d'un client"> <span>Répondre aux exigences d’un client</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Répondre à un appel d'offres"> <span>Répondre à un appel d’offres</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Améliorer l'organisation interne"> <span>Améliorer l’organisation interne</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Améliorer la satisfaction client"> <span>Améliorer la satisfaction client</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Réduire les risques et les incidents"> <span>Réduire les risques et les incidents</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Améliorer les performances environnementales"> <span>Améliorer les performances environnementales</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Améliorer la santé et la sécurité au travail"> <span>Améliorer la santé et la sécurité au travail</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Répondre aux exigences réglementaires"> <span>Répondre aux exigences réglementaires</span></label>
                <label class="choice-card"><input type="checkbox" name="objectifs[]" value="Intégrer plusieurs systèmes de management"> <span>Intégrer plusieurs systèmes de management (SMI)</span></label>
              </div>
              <div style="margin-top:12px;">
                <input type="text" name="objectifs_autre" placeholder="Autre objectif (préciser)...">
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">3.2 Existe-t-il une échéance particulière pour la certification ?</span>
              <div class="choice-grid" style="grid-template-columns: 160px 160px;">
                <label class="choice-card"><input type="radio" name="echeance_choix" value="oui"> <span>Oui</span></label>
                <label class="choice-card"><input type="radio" name="echeance_choix" value="non" checked> <span>Non</span></label>
              </div>
              <div id="box-echeance" class="conditional-box">
                <label for="devis-date-souhaitee" style="font-weight:600;display:block;margin-bottom:6px;">Préciser la date cible ou l'échéance souhaitée :</label>
                <input type="text" id="devis-date-souhaitee" name="date_souhaitee" placeholder="Ex: Fin Q3 2026, Avant le 15 décembre...">
              </div>
            </div>
          </div>

          <!-- SECTION 4 : RÉFÉRENTIEL(S) ISO CONCERNÉ(S) -->
          <div class="devis-section">
            <div class="devis-section-header">
              <div class="devis-section-num">04</div>
              <div class="devis-section-title">
                <h3>Référentiel(s) ISO Concerné(s)</h3>
                <p>Sélectionnez une ou plusieurs normes faisant l'objet de votre démarche</p>
              </div>
            </div>

            <div class="iso-choice-grid">
              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 9001">
                <div class="iso-info">
                  <strong>ISO 9001</strong>
                  <span>Management de la qualité</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 14001">
                <div class="iso-info">
                  <strong>ISO 14001</strong>
                  <span>Management environnemental</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 45001">
                <div class="iso-info">
                  <strong>ISO 45001</strong>
                  <span>Santé et sécurité au travail</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 22000">
                <div class="iso-info">
                  <strong>ISO 22000</strong>
                  <span>Sécurité des denrées alimentaires</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 50001">
                <div class="iso-info">
                  <strong>ISO 50001</strong>
                  <span>Management de l'énergie</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 27001">
                <div class="iso-info">
                  <strong>ISO 27001</strong>
                  <span>Sécurité de l'information (Cybersécurité)</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 13485">
                <div class="iso-info">
                  <strong>ISO 13485</strong>
                  <span>Dispositifs médicaux</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 39001">
                <div class="iso-info">
                  <strong>ISO 39001</strong>
                  <span>Sécurité routière</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 37001">
                <div class="iso-info">
                  <strong>ISO 37001</strong>
                  <span>Management anti-corruption</span>
                </div>
              </label>

              <label class="iso-card">
                <input type="checkbox" name="referentiels[]" value="ISO 37301">
                <div class="iso-info">
                  <strong>ISO 37301</strong>
                  <span>Management de la conformité (Compliance)</span>
                </div>
              </label>
            </div>

            <div style="margin-top:16px;">
              <label for="devis-autre-referentiel" style="font-weight:600;display:block;margin-bottom:6px;">Autre référentiel (IATF 16949, ISO 17025, ISO 22716...) :</label>
              <input type="text" id="devis-autre-referentiel" name="referentiel_autre" placeholder="Précisez un autre référentiel ou label...">
            </div>
          </div>

          <!-- SECTION 5 : SITUATION ACTUELLE DU SYSTÈME -->
          <div class="devis-section">
            <div class="devis-section-header">
              <div class="devis-section-num">05</div>
              <div class="devis-section-title">
                <h3>Situation Actuelle du Système de Management</h3>
                <p>Niveau de maturité documentaire et historique des audits</p>
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">5.1 Votre entreprise dispose-t-elle déjà d'un système de management formalisé ?</span>
              <div class="choice-grid cols-3">
                <label class="choice-card"><input type="radio" name="systeme_formalise" value="Oui, entièrement"> <span>Oui, entièrement</span></label>
                <label class="choice-card"><input type="radio" name="systeme_formalise" value="Oui, partiellement"> <span>Oui, partiellement</span></label>
                <label class="choice-card"><input type="radio" name="systeme_formalise" value="Non" checked> <span>Non</span></label>
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">5.2 Votre entreprise est-elle actuellement certifiée ?</span>
              <div class="choice-grid" style="grid-template-columns: 160px 160px;">
                <label class="choice-card"><input type="radio" name="certifie_choix" value="oui"> <span>Oui</span></label>
                <label class="choice-card"><input type="radio" name="certifie_choix" value="non" checked> <span>Non</span></label>
              </div>

              <div id="box-certifie" class="conditional-box">
                <div class="form-row">
                  <div class="form-group">
                    <label>Référentiel(s) certifié(s) :</label>
                    <input type="text" name="certif_referentiels" placeholder="Ex: ISO 9001:2015">
                  </div>
                  <div class="form-group">
                    <label>Organisme certificateur :</label>
                    <input type="text" name="certif_organisme" placeholder="Ex: AFNOR, SGS, Bureau Veritas, TÜV...">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group">
                    <label>Date de certification initiale :</label>
                    <input type="text" name="certif_date_initiale" placeholder="Ex: Mai 2021">
                  </div>
                  <div class="form-group">
                    <label>Date du prochain audit :</label>
                    <input type="text" name="certif_prochain_audit" placeholder="Ex: Novembre 2026">
                  </div>
                </div>
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">5.3 Avez-vous déjà réalisé un diagnostic ou un audit ISO ?</span>
              <div class="choice-grid" style="grid-template-columns: 160px 160px;">
                <label class="choice-card"><input type="radio" name="audit_choix" value="oui"> <span>Oui</span></label>
                <label class="choice-card"><input type="radio" name="audit_choix" value="non" checked> <span>Non</span></label>
              </div>

              <div id="box-audit" class="conditional-box">
                <label style="font-weight:600;display:block;margin-bottom:6px;">Date et conclusions du dernier diagnostic / audit :</label>
                <input type="text" name="audit_details" placeholder="Précisez la date et les constats majeurs...">
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">5.4 Avez-vous déjà identifié des non-conformités ou écarts ?</span>
              <div class="choice-grid" style="grid-template-columns: 160px 160px;">
                <label class="choice-card"><input type="radio" name="ecarts_choix" value="oui"> <span>Oui</span></label>
                <label class="choice-card"><input type="radio" name="ecarts_choix" value="non" checked> <span>Non</span></label>
              </div>

              <div id="box-ecarts" class="conditional-box">
                <label style="font-weight:600;display:block;margin-bottom:6px;">Préciser brièvement la nature des écarts ou non-conformités :</label>
                <textarea name="ecarts_details" rows="2" placeholder="Décrivez succinctement les points d'amélioration ou constats identifiés..."></textarea>
              </div>
            </div>
          </div>

          <!-- SECTION 6 : RESSOURCES HUMAINES ET ORGANISATION -->
          <div class="devis-section">
            <div class="devis-section-header">
              <div class="devis-section-num">06</div>
              <div class="devis-section-title">
                <h3>Ressources Humaines & Organisation du Projet</h3>
                <p>Pilotage interne et gouvernance de la mission</p>
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">6.1 Une personne est-elle désignée pour piloter le projet ISO ?</span>
              <div class="choice-grid" style="grid-template-columns: 160px 160px;">
                <label class="choice-card"><input type="radio" name="pilote_choix" value="oui"> <span>Oui</span></label>
                <label class="choice-card"><input type="radio" name="pilote_choix" value="non" checked> <span>Non</span></label>
              </div>

              <div id="box-pilote" class="conditional-box">
                <label style="font-weight:600;display:block;margin-bottom:6px;">Nom et fonction du pilote interne :</label>
                <input type="text" name="pilote_nom_fonction" placeholder="Ex: Mohamed Ali, Responsable Qualité / QHSE">
              </div>
            </div>

            <div class="sub-question">
              <span class="sub-question-title">6.2 Une équipe projet sera-t-elle constituée ?</span>
              <div class="choice-grid cols-3">
                <label class="choice-card"><input type="radio" name="equipe_choix" value="oui"> <span>Oui</span></label>
                <label class="choice-card"><input type="radio" name="equipe_choix" value="non"> <span>Non</span></label>
                <label class="choice-card"><input type="radio" name="equipe_choix" value="a_definir" checked> <span>À définir</span></label>
              </div>

              <div id="box-equipe" class="conditional-box">
                <label style="font-weight:600;display:block;margin-bottom:6px;">Nombre approximatif de personnes dans l'équipe projet :</label>
                <input type="text" name="equipe_nb_personnes" placeholder="Ex: 3 à 5 personnes (représentants métiers)">
              </div>
            </div>
          </div>

          <!-- SECTION 7 : VALIDATION DES INFORMATIONS & TRANSMISSION -->
          <div class="submit-card">
            <h3 style="font-family:'Outfit',sans-serif;font-size:1.4rem;margin-bottom:14px;color:#ffffff;">07. Validation des Informations</h3>
            
            <label class="attestation">
              <input type="checkbox" id="devis-certifie" name="certification_exactitude" required>
              <span>Je certifie que les informations communiquées dans ce questionnaire sont, à ma connaissance, exactes et permettent de disposer d’une première compréhension de la situation de l’entreprise pour l'élaboration de la proposition technique et financière. *</span>
            </label>

            <div class="form-row">
              <div class="form-group">
                <label for="devis-signataire">Nom et fonction du déclarant *</label>
                <input type="text" id="devis-signataire" name="signataire_nom" required placeholder="Votre nom, prénom et fonction">
              </div>
              <div class="form-group">
                <label for="devis-date">Date de transmission *</label>
                <input type="text" id="devis-date" name="date_transmission" required value="13/11/2026">
              </div>
            </div>

            <button type="submit" class="btn-submit-main">
              <span>Transmettre mon Questionnaire de Pré-Diagnostic</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>

            <p class="reassurance">
              🔒 <strong>Confidentialité garantie :</strong> Vos données sont strictement protégées et exclusivement utilisées pour l’analyse préliminaire de votre projet. Proposition technique et financière transmise sous 48h ouvrées.
            </p>
          </div>

        </form>

      </div>

  </div>
</section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Gestion des boîtes conditionnelles
      function setupConditional(radioName, targetBoxId, showValue) {
        var radios = document.querySelectorAll('input[name="' + radioName + '"]');
        var box = document.getElementById(targetBoxId);
        if (!radios.length || !box) return;

        radios.forEach(function(radio) {
          radio.addEventListener('change', function() {
            if (this.checked && this.value === showValue) {
              box.classList.add('active');
            } else if (this.checked) {
              box.classList.remove('active');
            }
          });
          if (radio.checked && radio.value === showValue) {
            box.classList.add('active');
          }
        });
      }

      setupConditional('echeance_choix', 'box-echeance', 'oui');
      setupConditional('certifie_choix', 'box-certifie', 'oui');
      setupConditional('audit_choix', 'box-audit', 'oui');
      setupConditional('ecarts_choix', 'box-ecarts', 'oui');
      setupConditional('pilote_choix', 'box-pilote', 'oui');
      setupConditional('equipe_choix', 'box-equipe', 'oui');

      // Style dynamique pour les cartes cliquables
      document.querySelectorAll('.choice-card, .iso-card').forEach(function(card) {
        var input = card.querySelector('input');
        if (!input) return;

        function updateState() {
          if (input.type === 'radio') {
            document.querySelectorAll('input[name="' + input.name + '"]').forEach(function(r) {
              var parent = r.closest('.choice-card, .iso-card');
              if (parent) parent.classList.toggle('is-selected', r.checked);
            });
          } else {
            card.classList.toggle('is-selected', input.checked);
          }
        }

        input.addEventListener('change', updateState);
        updateState();
      });

      // Soumission fluide du formulaire avec envoi direct à manager@corentis-consulting.com.tn
      var form = document.getElementById('devis-form');
      var successMsg = document.getElementById('devis-success-message');
      var submitBtn = form ? form.querySelector('button[type="submit"]') : null;

      if (form) {
        form.addEventListener('submit', function(e) {
          e.preventDefault();
          
          var certCheck = document.getElementById('devis-certifie');
          if (certCheck && !certCheck.checked) {
            alert('Veuillez cocher la case d\'attestation certifiant l\'exactitude des informations.');
            certCheck.focus();
            return;
          }

          if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Transmission en cours...</span>';
          }

          var formData = new FormData(form);
          if (!formData.get('action')) {
            formData.append('action', 'corentis_submit_devis');
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
            if (successMsg) {
              successMsg.classList.add('active');
              form.style.display = 'none';
              successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
          }
        });
      }
    });
  </script>


<?php get_footer(); ?>
