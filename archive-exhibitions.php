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
<h1>Exhibitions</h1>
</div>
</div>
			
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
</div> <!-- .et_pb_row -->
</div> <!-- .et_pb_section -->
            
            
            
            
            







            


<div class="et_pb_section exhibitionssection et_pb_section_1_tb_body et_pb_with_background et_section_regular">






<?php wp_reset_query(); ?>

<?php
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'exhibitions',
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'Current Exhibitions'
);
$loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

<div class="et_pb_row exhibitionsrow et_pb_row_1_tb_body et_pb_gutters1">

				<div class="et_pb_column textcolumn et_pb_column_1_3 et_pb_column_1_tb_body  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_1_tb_body exhibitionfeaturetitle  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner exhibittitle"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_2_tb_body daterange  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner">
                <?php the_field('date_range'); ?>
                </div>
                
			</div> <!-- .et_pb_text -->
            
            <div class="et_pb_button_module_wrapper et_pb_button_0_tb_body_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_button_0_tb_body et_pb_bg_layout_light" href="<?php echo get_the_permalink() ?>"><?php the_field('button_text'); ?></a>
			</div>
            
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_3 et_pb_column_2_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
			<div class="et_pb_module et_pb_image et_pb_image_0_tb_body">
				
				<a href="<?php echo get_the_permalink() ?>" class="xxxxsddedf">
                <span class="et_pb_image_wrap ">
                
<?php 
$image = get_field('image_for_exhibitions_page');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

                </span>
                </a>
                
			</div>
            
			</div> <!-- .et_pb_column -->

			</div> <!-- .et_pb_row -->
            
            
<?php endwhile; ?>
<?php wp_reset_query(); ?>


			</div> <!-- .et_pb_section -->
            </div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	  















            
            
            
            
            
            

            
            
		<div id="content-area" class="clearfix"
        
        
<div class="et_pb_section pastexhibitionssection et_pb_section_0_tb_body et_section_regular">		
<div class="et_pb_row pastexhibitionsrow et_pb_row_0_tb_body">

<div class="et_pb_column et_pb_column_4_4 et_pb_column_0_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
<div class="et_pb_module et_pb_text et_pb_text_0_tb_body  et_pb_text_align_left et_pb_bg_layout_light">
				
<div class="et_pb_text_inner">
<div class="seeallpast seeallpast1"><a href="https://wpcaboose.com/exhibitions-archive/">See All Past Exhibitions</a></div>
<div class="parenttitle">
<div>Past Exhibitions</div>
</div>
</div>
			
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
</div> <!-- .et_pb_row -->
</div> <!-- .et_pb_section -->






<div class="et_pb_row pastexhibitionrow archive_row">


<?php
$args = array(
  'posts_per_page' => 3,
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
            
            <div class="seeallpast seeallpast2"><a href="https://wpcaboose.com/exhibitions-archive/">See All Past Exhibitions</a></div>
            
            </div> <!-- .archive_row -->
            
            

            
            
            

		</div> <!-- #content-area -->
</div> <!-- #main-content -->
<style>
	.et_right_sidebar #main-content .container:before { display: none !important; }</style>
<?php

get_footer();