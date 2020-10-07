<?php

/* =====

Template Name: Single Performing Arts Post Type Archive

===== */
get_header(); ?>

<div id="main-content" class="singleexhibition singleperformingarts">



 






<div class="et-l et-l--body">
	<div class="et_builder_inner_content et_pb_gutters3">



<div class="et_pb_section parenttitlesection et_pb_section_0_tb_body et_section_regular">		
<div class="et_pb_row et_pb_row_0_tb_body">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_0_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
<div class="et_pb_module et_pb_text et_pb_text_0_tb_body  et_pb_text_align_left et_pb_bg_layout_light">
				
<div class="et_pb_text_inner">
<div class="parenttitle">
<h1>Performing Arts</h1>
</div>
</div>
			
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
</div> <!-- .et_pb_row -->
</div> <!-- .et_pb_section -->
            
            
            
            
            

<div class="tanbg">





            


<div class="et_pb_section exhibitionsection et_pb_section_1_tb_body et_pb_with_background et_section_regular">



<?php while ( have_posts() ): the_post(); ?>

<div class="et_pb_module et_pb_image et_pb_image_0_tb_body exhibitionherowrap">
                
<?php if ( get_field( 'slider_gallery' ) ): ?>

<?php echo do_shortcode( '[acf_gallery_slider acf_field="slider_gallery" autoplay="false" autoplay_speed="6000" dots="false" arrows="true" show_caption="false"]' ); ?>

<?php else: // field_name returned false ?>

	<span class="et_pb_image_wrap ">
    <?php echo get_the_post_thumbnail(); ?>
    </span>

<?php endif; // end of if field_name logic ?>
                
</div>
            

<div class="et_pb_row exhibitionrow et_pb_row_1_tb_body et_pb_gutters1">
                
                
                
                

            
            
            
            
				
				
			 <!-- .et_pb_text --><div class="exhibitbodycontent et_pb_module et_pb_text et_pb_text_2_tb_body  et_pb_text_align_left et_pb_bg_layout_light">
				
				
                            
                <span class="et_pb_text_inner gallerytitle">
                <?php the_field('gallery_name'); ?>
                </span>
                
                <div class="et_pb_text_inner posttitle">
                <?php echo get_the_title(); ?>
                </div>
                
              
				<span class="et_pb_text_inner daterange">
                <?php the_field('date_range'); ?>
                </span>
                
                <div class="buttonsection">
                    <a class="et_pb_button sharebutton" href="<?php echo get_the_permalink() ?>">Share</a>
                    
<?php if ( get_field( 'ticket_links' ) ): ?>

<a class="et_pb_button ticketbutton" href="<?php the_field('ticket_links'); ?>">Tickets</a>

<?php else: // field_name returned false ?>
<?php endif; // end of if field_name logic ?>

                </div>
                
            
            	<?php echo get_the_content(); ?>
	
                <div class="postnavsection">
                <?php previous_post_link( '%link', '← Previous' ); ?>
                <?php next_post_link( '%link', 'Next →' ); ?>
                </div>

                
			</div> <!-- .et_pb_text -->
            

  				
			</div> <!-- .et_pb_row -->
            
<?php endwhile; ?>


			</div> <!-- .et_pb_section -->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div><!-- Tan bg wrap -->
	  
            
            
            </div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	  















      
</div> <!-- #main-content -->
<style>
	.et_right_sidebar #main-content .container:before { display: none !important; }</style>
<?php

get_footer();