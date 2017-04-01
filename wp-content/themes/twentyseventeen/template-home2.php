<?php
/**
 * Template Name: Home Two
 *
 */ 
get_header(); ?>

<div id="product_section_area">
	<div id="product_section">
    	<h2 class="wow fadeInUp"><?php the_field('product_section_title'); ?></h2>
        <div class="product_services">
        	<?php the_field('three_product_service'); ?>
        </div>
        <div class="product_column_area">
        	<?php if( have_rows('home_products') ) : $count =1; while ( have_rows('home_products') ) : the_row(); ?>
           <?php $select_class = get_sub_field('select_class'); ?>
            <div class="product_column <?php if($select_class == 'Project') : echo 'project_item'; elseif($select_class == 'Enterprise') : echo 'enterprise_item'; elseif($select_class == 'Store') : echo 'store_item'; elseif($select_class == 'Advantage') : echo 'advantage_item'; elseif($select_class == 'Fusion') : echo 'fusion_item'; elseif($select_class == 'Fulfilment') : echo 'fulfilment_item'; elseif($select_class == 'Boutique') : echo 'boutique_item'; else : echo 'engage_item'; endif;  ?>">
            	<?php if(get_sub_field('home_product_image')) : ?>
            	<div class="service_photo"><img src="<?php the_sub_field('home_product_image'); ?>" alt="" /></div>
                <?php endif; ?>
                <h4><a href="<?php the_sub_field('home_product_link'); ?>"><?php the_sub_field('home_product_title'); ?></a></h4>
                <p><?php the_sub_field('home_product_content'); ?></p>
            </div>
            <?php if($count%2==0) : ?><div class="clearfix2"></div><?php endif; ?>
            <?php if($count%3==0) : ?><div class="clearfix"></div><?php endif; ?>
            <?php $count++; endwhile; endif; ?>
        </div>
    </div>
</div>


<div id="print_marketing">
    <div class="print_marketing_section">
  
    <h4><span class="sourctit_text"><?php the_field('sourceit_banner_content'); ?></h4>
    <div id="three_col">
    	<?php if( have_rows('sourceit_banner_threecol') ) : while ( have_rows('sourceit_banner_threecol') ) : the_row(); ?>
        <div class="three_col_item">
        <h5><?php the_sub_field('sourceit_banner_threecol_title'); ?></h5> 
            <p><?php the_sub_field('sourceit_banner_threecol_content'); ?></p>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <?php if(get_field('sourceit_banner_link')) : ?>
    <a href="<?php the_field('sourceit_banner_link'); ?>" class="brn_feature">EXPLORE THE BENEFITS</a>
    <?php endif; ?>
    </div>
</div>


<div id="case_study_section">
	<div id="case_study">
    	<?php the_field('home_casestudy_content'); ?>
    </div>	
</div>


<div class="our-technology"><!--start our-technology-->
        	<div class="center">
        		<div class="technology-title">
        			<h3><?php the_field('technology_section_title'); ?></h3>
        			<?php the_field('technology_section_content'); ?>
        		</div>
        		
        		
	        	<div class="tab_content">
                    <div class="tab-body">
	                    <div class="tab  active" id="tab-1">
                        	<?php if( have_rows('sourceit_tab_content') ): while ( have_rows('sourceit_tab_content') ) : the_row(); $image = get_sub_field('icon'); ?>
                            <div class="tab-column">
	                        	<div class="column-inner">
		                        	<div class="tab-item-title"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>"></div>
		                        	<div class="text-color" style=" color:<?php the_sub_field('text_color'); ?>"><?php the_sub_field('content'); ?></div>
	                        	</div>
	                        </div>
							<?php endwhile; endif; ?>
	                        <div class="clear"></div>
                            <?php if(get_field('technology_button_link')) { ?>
                            <div class="export"><a class="btn-export btn-technology" href="<?php the_field('technology_button_link'); ?>"><?php the_field('technology_button_text'); ?></a></div>
                            <?php } ?>
	                    </div>
	                </div>	
        		</div>
        	</div>
        </div><!--//end our-technology-->



<div id="insights"><!--start insights-->
	<div class="center">
        <div class="insights_title">
            <h2><span>Insights</span><small><a href="<?php echo get_permalink(get_page_id('insights'));?>">view all</a></small></h2>
        </div>
        <div id="insights_gallery"><!--start insights_gallery-->
            <?php 
                $args=array(
                'post_type'=>'insight',
                'showposts'=> 4,
                );
                query_posts($args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="insights_gallery_column">
            <a href="<?php the_permalink(); ?>">
                <span></span>
                <?php if(has_post_thumbnail()) { the_post_thumbnail( 'insight_thumbnail' ) ;} ?>
                <div class="insights_info">
                    <h2><?php $terms = get_the_terms( $post->ID, 'insight-category' ); if ( !empty( $terms ) ){ $term = array_shift( $terms ); echo $current_cat = $term->slug;} ?></h2>
                    <div class="descript">
                        <p><?php the_title(); ?></p>
                    </div>
                </div>
            </a>
            </div>
            <?php endwhile; endif; wp_reset_query();?>
        </div><!--//end #insights_gallery-->
    </div>
</div><!--//end #insights-->

<?php get_footer(); ?>