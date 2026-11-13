<?php
/**
 * Default Page Template
 *
 * @package Corentis
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

// Determine header image dynamically based on slug or featured image
$header_bg_url = corentis_img('team.png');
if ( has_post_thumbnail() ) {
    $header_bg_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
} else {
    $slug = get_post_field( 'post_name', get_post() );
    $slug_map = array(
        'formation'             => 'formation.png',
        'audit'                 => 'audit.png',
        'audit-qhse'            => 'qhse.png',
        'audit-qualite'         => 'quality.png',
        'audit-environnement'   => 'environment.png',
        'audit-sst'             => 'safety.png',
        'audit-agroalimentaire' => 'audit-agro.png',
        'audit-social'          => 'social.png',
        'conseil'               => 'hero.png',
        'conseil-qualite'       => 'quality.png',
        'conseil-environnement' => 'environment.png',
        'conseil-sst'           => 'safety.png',
        'conseil-hygiene'       => 'food-safety.png',
        'conseil-social'        => 'social.png',
        'conseil-digital'       => 'digital.png',
        'conseil-autres'        => 'team.png',
        'qui-sommes-nous'       => 'team.png',
        'devis'                 => 'devis.png',
        'contact'               => 'contact.png',
    );
    if ( isset( $slug_map[ $slug ] ) ) {
        $header_bg_url = corentis_img( $slug_map[ $slug ] );
    }
}
?>

  <section class="page-header" style="background-image: url('<?php echo esc_url( $header_bg_url ); ?>')">
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
