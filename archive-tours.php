<?php

/* =====

Template Name: Custom Post Type Archive

===== */
get_header(); ?>

<div id="main-content" class="experiencepage">



 






<div class="et-l et-l--body">
	<div class="et_builder_inner_content et_pb_gutters3">



<div class="et_pb_section parenttitlesection et_pb_section_0_tb_body et_section_regular">		
<div class="et_pb_row et_pb_row_0_tb_body">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_0_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
<div class="et_pb_module et_pb_text et_pb_text_0_tb_body  et_pb_text_align_left et_pb_bg_layout_light">
				
<div class="et_pb_text_inner">
<div class="parenttitle experiencetitle">
<h1>Tours</h1>
</div>
</div>
			
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
</div> <!-- .et_pb_row -->
</div> <!-- .et_pb_section -->
            
            
            
            
            

<div class="tanbg">





            



            
            
            
            
            
            
<div class="et_pb_section eventonexperience et_pb_section_1_tb_body et_pb_with_background et_section_regular">

<div class="et_pb_row eventsrow et_pb_row_1_tb_body et_pb_gutters1">

			<div class="et_pb_column et_pb_column_1_1 et_pb_column_1_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
			<div class="et_pb_module">
				
<?php wp_reset_query(); ?>

<?php
$args = array(
  'posts_per_page' => 5,
  'post_type' => array( 'tours' ),
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'Experience Page List'
);
$loop = new WP_Query( $args ); 
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

<div class="experiencelistitem">

<div class="et_pb_text_inner exhibittitle"><a href="<?php echo get_the_permalink() ?>"><h3><?php echo get_the_title(); ?></h3></a></div>

<div class="et_pb_module et_pb_text et_pb_text_2_tb_body daterange  et_pb_text_align_left et_pb_bg_layout_light">
				<div class="et_pb_text_inner">
                <?php the_field('date_range'); ?>
                </div>
</div>

<div class="et_pb_button_module_wrapper et_pb_button_0_tb_body_wrapper  et_pb_module ">
<a class="et_pb_button et_pb_button_0_tb_body et_pb_bg_layout_light moreinfobutton" href="<?php echo get_the_permalink() ?>">More Info</a>
</div>




</div>


<?php endwhile; ?>
<?php wp_reset_query(); ?>
                
                
			</div>
            
			</div> <!-- .et_pb_column -->
				
			</div> <!-- .et_pb_row -->
           
			</div> <!-- .et_pb_section -->
            











            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div><!-- Tan bg wrap -->
	  
            
            
            </div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	  















      
</div> <!-- #main-content -->
<style>
	.et_right_sidebar #main-content .container:before { display: none !important; }</style>
<?php

get_footer();