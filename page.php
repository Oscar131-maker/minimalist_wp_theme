<?php get_header(); ?>

<main id="main">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <article class="index-page mb-5">
   <!-- Thumbnail Page -->
   <?php if (has_post_thumbnail()) {?>
       <div class="thumbnail-page">
            <a href="<?php the_permalink();?>" alt="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail('post-thumbnails', array(
                  'class' => 'img-fluid'
              )); ?>
            </a>
        </div>
    <?php }?>
    
    <!-- Top Articles -->
    <div class="top-page">
       <div class="titles-content-page">
            <h2 class="page-title"><?php the_title(); ?></h2>
       </div>
    </div>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

  </article>

  <?php endwhile; endif; ?>

</main>

<!-- Footer -->
<?php get_footer(); ?>

