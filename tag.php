<!-- Header -->
<?php get_header(); ?>

 <main id="main">
     
 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <!-- Latest Post -->
    <section class="index-default">
       
      <div class="post-principal-content"> <!-- Post principal content -->
        <div class="latest-posts"> <!-- Lates posts -->
         <h3 class="text-center">Categoria: <?php printf( __('Etiqueta: %s'), single_cat_title('', false) ); ?></h3>
         <hr>
        </div><!-- Lates posts -->

        <div class="card-principal-content"> <!-- Card Principal content -->
          <div class="row"> <!-- Row -->
           
          <?php get_template_part('template-parts/content/content', 'posts'); ?>
  
          </div> <!-- Row -->
        </div> <!-- Card Principal content -->

       <!-- Pagination -->
       <div class="pagination-content d-flex justify-content-center">
         <?php get_template_part('template-parts/content/content', 'pagination'); ?>
       </div>
      
      </div> <!-- Post principal content -->
    </section>


<?php endwhile; endif; ?>

</main>

<!-- Footer -->
<?php get_footer(); ?>

