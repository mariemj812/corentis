<?php

/**
 * Footer Template — Corentis Consulting Group
 *
 * @package Corentis
 */

if (! defined('ABSPATH')) exit;
?>

<!-- ========== FOOTER ========== -->
<footer class="footer" id="footer">
  <div class="container">
    <div class="footer-grid-5">
      <div class="footer-brand">
        <img src="<?php echo corentis_img('logo-transparent.png'); ?>" alt="Corentis Consulting Group">
        <p>Cabinet de conseil spécialisé en stratégie, performance et croissance des entreprises. Expertise en systèmes de management et conformité internationale.</p>
        <div class="footer-social">
          <a href="#" aria-label="LinkedIn">in</a>
          <a href="#" aria-label="Facebook">f</a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">Accueil</a></li>
          <li><a href="<?php echo corentis_page_url('qui-sommes-nous'); ?>">Qui sommes-nous</a></li>
          <li><a href="<?php echo corentis_page_url('formation'); ?>">Formation</a></li>
          <li><a href="<?php echo corentis_page_url('devis'); ?>">Devis</a></li>
          <li><a href="<?php echo corentis_page_url('contact'); ?>">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Conseil</h4>
        <ul>
          <li><a href="<?php echo corentis_page_url('conseil-qualite'); ?>">Qualité</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-environnement'); ?>">Environnement</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-sst'); ?>">Santé &amp; Sécurité</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-hygiene'); ?>">Hygiène alimentaire</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-social'); ?>">Social</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-digital'); ?>">Marketing Digital</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-rh'); ?>">Ressources Humaines</a></li>
          <li><a href="<?php echo corentis_page_url('conseil-comptabilite'); ?>">Comptabilité</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Audit</h4>
        <ul>
          <li><a href="<?php echo corentis_page_url('audit-qualite'); ?>">Audit Qualité</a></li>
          <li><a href="<?php echo corentis_page_url('audit-environnement'); ?>">Audit Environnement</a></li>
          <li><a href="<?php echo corentis_page_url('audit-sst'); ?>">Audit SST</a></li>
          <li><a href="<?php echo corentis_page_url('audit-qhse'); ?>">Audit QHSE</a></li>
          <li><a href="<?php echo corentis_page_url('audit-social'); ?>">Audit Social</a></li>
          <li><a href="<?php echo corentis_page_url('audit-agroalimentaire'); ?>">Audit Agroalimentaire</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <div class="footer-contact-info">
          <div class="footer-contact-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>3, rue Beyrouth, Lafayette (3ème étage), 1002 Tunis</span>
          </div>
          <div class="footer-contact-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
            <div>
              <a href="tel:+21671781781">+216 71 781 781</a><br>
              <a href="tel:+21625295574">+216 25 29 55 74</a>
            </div>
          </div>
          <div class="footer-contact-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
            <a href="mailto:contact@corentis-consulting.com.tn">contact@corentis-consulting.com.tn</a>
          </div>
          <div class="footer-contact-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
            <span>Lun — Ven : 9h00 — 18h00</span>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Corentis Consulting Group. Tous droits réservés. | Stratégie • Performance • Croissance</p>
    </div>
  </div>
</footer>

<!-- ========== WHATSAPP BUTTON ========== -->
<a href="https://wa.me/21625295574" class="whatsapp-btn" target="_blank" rel="noopener" aria-label="Contactez-nous sur WhatsApp" title="Contactez-nous sur WhatsApp">
  <svg viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
  </svg>
</a>

<!-- ========== BACK TO TOP ========== -->
<button class="back-to-top" id="back-to-top" aria-label="Retour en haut" title="Retour en haut">↑</button>

<?php wp_footer(); ?>
</body>

</html>