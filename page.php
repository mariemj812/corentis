<?php
/**
 * Default Page Template
 *
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

  <section class="page-header" style="background-image: url('<?php echo corentis_img('team.png'); ?>')">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="breadcrumb">
        <a href="<?php echo home_url( '/' ); ?>">Accueil</a>
        <span class="sep">/</span>
        <span><?php the_title(); ?></span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="content-block animate-on-scroll">
        <div class="content-text">
          <?php
          while ( have_posts() ) :
              the_post();
              the_content();
          endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
