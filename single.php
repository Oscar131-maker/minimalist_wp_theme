<!-- Header -->
<?php get_header(); ?>

<main id="main">
    
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <article class="index-single mb-5">
    <!-- Top Articles -->
    <div class="top-articles">
       <div class="titles-content">
            <span class="category-single"><a href="#">
                <?php $parentscategory ="";
                foreach((get_the_category()) as $category) {
                if ($category->category_parent == 0) {
                $parentscategory .= ' <a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '">' . $category->name . '</a>, ';
                }
                }
                echo substr($parentscategory,0,-2); ?>
                </a></span>
            <h2 class="single-title"><?php the_title(); ?></h2>
            <span class="date-single"><span>-</span> <?php the_date('j F, Y'); ?> <span>-</span></span>
       </div>

       <div class="thumbnail-single">
            <?php if (has_post_thumbnail()) {?>
                    <a href="<?php the_permalink();?>" alt="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid'
                    )); ?>
                    </a>
            <?php }?>
       </div>
    </div>

    <div class="article-content pb-4">
        <?php the_content(); ?>
    </div>

  </article>

  <?php endwhile; endif; ?>

     <div class="comment-container">
      <!-- Comments -->
      <?php 
          if(comments_open() || get_comments_number()) :
              comments_template();
            endif;
        ?>
      <!-- Comments -->
     </div>

</main>

<!-- Footer -->
<?php get_footer(); ?>

