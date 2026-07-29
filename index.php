<?php
/**
 * Main Template File (Required by WordPress)
 *
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

  <section class="page-header">
    <div class="container">
      <h1><?php wp_title(''); ?></h1>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-text">
          <?php
          if ( have_posts() ) :
              while ( have_posts() ) :
                  the_post();
                  the_content();
              endwhile;
          else :
              echo '<p>Aucun contenu trouvé.</p>';
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
