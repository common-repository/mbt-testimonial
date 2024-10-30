<?php

add_shortcode('mbt_testimonial','mbt_testimonial_shortcode');

	function mbt_testimonial_shortcode($attr){

		$options = shortcode_atts(
				array(
					'category' =>'',
					'postperpage' =>'',
				),
				$attr
		);
?>

  <div class="mbt-container">
    <div class="owl-carousel">
      <?php 
    
            global $post;

            $args = array(
              'post_type' => 'mbttestimonial',
              'category_name' => $options['category'],
              'order' => 'desc'
            );

            $recentposts = get_posts($args);
            foreach ($recentposts as $post):
              setup_postdata($post);
        ?>
      <div class="mbt-content">
        <div class="mbt-author-img"><?php the_post_thumbnail();?></div>
        <div class="mbt-author-name"><h2><?php the_title();?></h2></div>
        <div class="mbt-content-description">
          <p><?php the_content();?></p>
        </div>
          <div class="mbt-author-destination"><h3><?php echo get_post_meta($post->ID,'mbt_user_role',true);?></h3></div>
          <div class="mbt-company-name"><h3><?php echo get_post_meta($post->ID,'mbt_company',true);?></h3></div>
      </div>
      <?php 

              endforeach;

    wp_reset_postdata();
                
            ?>
    </div>
  </div>
  <?php }