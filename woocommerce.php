<!-- Header -->
<?php get_header(); ?>

<main id="main">
  <section class="index-page">
   <!-- Breadcrums -->
  <section class="breadcrums-container">
    <?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );
        }
    ?>
  </section>
  <!-- Breadcrums -->

  <div class="woocommerce-content-page">
    <?php woocommerce_content(); ?>
  </div>

</section>
</main>

<!-- Footer -->
<?php get_footer(); ?>
