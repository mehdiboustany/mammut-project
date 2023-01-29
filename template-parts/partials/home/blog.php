<section class="o-section c-section--blog">
    <div class="o-section__wrapper">
        <div class="c-blog">
            <div class="c-section__title"><span>مقالات و مطالب خواندنی</span></div>

            <?php
$query = new WP_Query( array(
                    'cat' => 2,
                    'posts_per_page' => 5) );

if( $query->have_posts() ): ?>
<div class="c-blog__posts">
  <?php while( $query->have_posts() ) : $query->the_post(); ?>
     <div class="c-blog__post">
         <figure class="post-thumb">
            <a href="<?php the_permalink() ?>" class="c-blog__cover"><?php the_post_thumbnail(); ?></a>
         </figure>
         <div class="more">
     <h5><a href="<?php the_permalink() ?>"
       title="<?php the_title(); ?>"><?php the_title(); ?></a></h5></div>
    </div>
 
<?php endwhile; ?>
</div>
 
<?php endif;
wp_reset_postdata();
?>
            
            
            
            
            </div>
        </div>
    </div>
</section>