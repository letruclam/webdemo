<div class="<?php if(esc_attr(get_theme_mod('royalwatchstore_slider_section_width','Full Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('royalwatchstore_slider_section_width','Full Width')) == 'Box Width'){ ?> container <?php }?>">
<section id="slider-section" class="slider-area home-slider">
  
  <!-- start of hero --> 
  <section class="hero-slider hero-style">
      <div class="royal_watch_storeswiper-container">
          <div class="swiper-wrapper">
            <?php for($p=1; $p<6; $p++) { ?>
            <?php if( get_theme_mod('slider'.$p,false)) { ?>
            <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
            <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
              $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
            <?php 
              if(has_post_thumbnail()){
                $img = esc_url($image[0]);
              }
              if(empty($image)){
                $img = get_template_directory_uri().'/assets/images/default.png';
              }

            ?>

              <div class="royal_watch_storeswiper-slide">
                  <div class="royal_watch_storeslide-inner slide-bg-image">      
                      <div class="slidercontent">
                          <div class="slide-title">
                            <h5><?php echo esc_html(get_theme_mod('slider_subtitle')); ?> <br></h5>
                            <h2><?php the_title_attribute(); ?></h2>   
                          </div>    
                          <div class="slide-text">
                              <?php the_excerpt(); ?>
                          </div>
                          <div class="slide-list">
                            <ul>
                              <li><?php echo esc_html(get_theme_mod('slider_list1')); ?></li>
                              <li><?php echo esc_html(get_theme_mod('slider_list2')); ?></li>
                            </ul>
                          </div>
                          <div class="slide-btns">
                              <a class="ShopNow" href="<?php the_permalink(); ?>"><?php esc_html_e('Shop Now','royal-watch-store'); ?></a>   
                          </div>
                      </div>
                      <div class="clearfix"></div>
                    <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
                    <div class="slideinning"></div> 
                  </div>
              </div>
            <?php endwhile;
               wp_reset_postdata(); ?>
            <?php } } ?>
            <div class="clear"></div> 

          </div>
         <!-- swipper controls -->
          <!-- <div class="royal_watch_storeswiper-pagination"></div> -->
          <!-- <div class="royal_watch_storeswiper-button-next"><i class="fa fa-angle-right"></i></div>
          <div class="royal_watch_storeswiper-button-prev"><i class="fa fa-angle-left"></i></div> -->
      </div>
  </section>
  <!-- end of hero slider -->
</section>
</div>
