<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- <?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <section class="splash"></section>
  <section class="section" id="bunny-info">
    <div class="container">
      <div class="float-left">
        <h2></h2>
        <p></p>
        <div class="read-more green-btn">
          <button></button>
        </div>
      </div>
    </div>
    <div class="float-right">
      <div class="stat">
        <div class="number">
          <h3></h3>
        </div>
        <p></p>
      </div>
      <div class="stat">
        <div class="number">
          <h3></h3>
        </div>
        <p></p>
      </div>
      <div class="stat">
        <div class="number">
          <h3></h3>
        </div>
        <p></p>
      </div>
    </div>
  </section>
  <section class="section" id="org-info">
    <div class="container">
      <div class="img-container-left"></div>
      <div class="info-container">
        <h3></h3>
        <div class="icon-wrapper">
          <div class="icon-container">
            <div class="icon"></div>
            <p></p>
          </div>
        </div>
        <div class="icon-wrapper">
          <div class="icon-container">
            <div class="icon"></div>
            <p></p>
          </div>
        </div>
        <div class="icon-wrapper">
          <div class="icon-container">
            <div class="icon"></div>
            <p></p>
          </div>
        </div>
        <div class="icon-wrapper">
          <div class="icon-container">
            <div class="icon"></div>
            <p></p>
          </div>
        </div>
        <div class="button-wrapper">
          <p class="green-txt"></p>
          <div class="button-container">
            <button></button>
            <button></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section" id="help-info">
    <div class="container">
      <h3></h3>
      <div class="img-link-wrapper">
        <div class="img-container">
          <div class="img-txt"></div>
        </div>
        <div class="img-container">
          <div class="img-txt"></div>
        </div>
        <div class="img-container">
          <div class="img-txt"></div>
        </div>
        <div class="img-container">
          <div class="img-txt"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section" id="news">
    <div class="container"></div>
  </section>
  <section class="section" id="facts">
    <div class="container"></div>
  </section>
  <section class="section" id="call-to-action">
    <div class="container"></div>
  </section>
  <section class="section" id="further-links">
    <div class="container"></div>
  </section>
</body>

</html>

<?php get_footer(); ?>
