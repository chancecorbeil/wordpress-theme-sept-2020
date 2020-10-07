<?php

/* =====

Template Name: Custom Post Type Archive

===== */
get_header(); ?>

<div id="main-content">





<div class="et-l et-l--body">
	<div class="et_builder_inner_content et_pb_gutters3">



<div class="et_pb_section parenttitlesection et_pb_section_0_tb_body et_section_regular">		
<div class="et_pb_row et_pb_row_0_tb_body">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_0_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
<div class="et_pb_module et_pb_text et_pb_text_0_tb_body  et_pb_text_align_left et_pb_bg_layout_light">
				
<div class="et_pb_text_inner">
<div class="parenttitle">
<h1>Exhibitions Archive</h1>
</div>
</div>
			
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
</div> <!-- .et_pb_row -->
</div> <!-- .et_pb_section -->
            
            
            </div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	  















            
            
            
            
            
            

            
            
		<div id="content-area" class="clearfix"
        
        
<div class="et_pb_section pastexhibitionssection et_pb_section_0_tb_body et_section_regular">		

<div class="et_pb_row pastexhibitionrow archive_row">


<?php
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'exhibitions',
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'Past Exhibitions'
);
$loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>


<div class="et_pb_column et_pb_column_1_3 et_pb_css_mix_blend_mode_passthrough">
<div class="pastexhibition et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_center et_pb_bg_layout_light">


<a href="<?php echo get_the_permalink() ?>" class="pastexhibittitle">
<?php echo get_the_title(); ?>
</a>

<div class="pastexhibitionimage">

<?php 
$image = get_field('image_for_past_exhibitions');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

</div>
                
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->            
            
            <?php endwhile; ?>
            
            </div> <!-- .archive_row -->
            </div> <!-- .et_pb_section -->
            

            
            
            

		</div> <!-- #content-area -->
</div> <!-- #main-content -->
<style>
	.et_right_sidebar #main-content .container:before { display: none !important; }</style>
<?php

get_footer();