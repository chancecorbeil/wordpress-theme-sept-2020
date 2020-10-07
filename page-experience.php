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
<h1>Experience</h1>
</div>
</div>
			
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
</div> <!-- .et_pb_row -->
</div> <!-- .et_pb_section -->
            
            
            
            
            

<div class="tanbg">





            


<div class="et_pb_section exhibitionssection et_pb_section_1_tb_body et_pb_with_background et_section_regular">

<?php wp_reset_query(); ?>

<?php
$args = array(
  'posts_per_page' => 1,
  'post_type' => 'exhibitions',
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'Experience Page Feature 1'
);
$loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

<div class="et_pb_row exhibitionsrow et_pb_row_1_tb_body et_pb_gutters1">
				<div class="et_pb_column textcolumn et_pb_column_1_2 et_pb_column_1_tb_body  et_pb_css_mix_blend_mode_passthrough">
				
				
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
            
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_2 et_pb_column_2_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child columnalignright">
				
				
			<div class="et_pb_module et_pb_image et_pb_image_0_tb_body">
				
				<a href="<?php echo get_the_permalink() ?>">
                <span class="et_pb_image_wrap ">
                
                <?php 
$image = get_field('image_for_past_exhibitions');
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<div class="et_pb_section eventonexperience et_pb_section_1_tb_body et_pb_with_background et_section_regular">

<div class="et_pb_row eventsrow et_pb_row_1_tb_body et_pb_gutters1">

			<div class="et_pb_column et_pb_column_1_1 et_pb_column_1_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
			<div class="et_pb_module">
				
<?php wp_reset_query(); ?>

<?php
$args = array(
  'posts_per_page' => 5,
  'post_type' => array( 'events', 'tours', 'publicprograms', 'exhibitions' ),
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'Experience Page List'
);
$loop = new WP_Query( $args ); 
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

<div class="experiencelistitem">


<div class="et_pb_text_inner cpttype"><?php $post_type = get_post_type_object( get_post_type($post) );

echo $post_type->label ; ?></div>


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
            











            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="et_pb_section exhibitionssection exhibitionssectionlast et_pb_section_1_tb_body et_pb_with_background et_section_regular">

<?php wp_reset_query(); ?>

<?php
$args = array(
  'posts_per_page' => 1,
  'post_type' => 'exhibitions',
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'Experience Page Feature 2'
);
$loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

<div class="et_pb_row exhibitionsrow et_pb_row_1_tb_body et_pb_gutters1">
				<div class="et_pb_column textcolumn et_pb_column_1_2 et_pb_column_1_tb_body  et_pb_css_mix_blend_mode_passthrough">
				
				
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
            
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_2 et_pb_column_2_tb_body  et_pb_css_mix_blend_mode_passthrough et-last-child columnalignright">
				
				
			<div class="et_pb_module et_pb_image et_pb_image_0_tb_body">
				
				<a href="<?php echo get_the_permalink() ?>">
                <span class="et_pb_image_wrap ">
                
                <?php 
$image = get_field('image_for_past_exhibitions');
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
            
            
            
            
            
            
            
            
            
            
            
            </div><!-- Tan bg wrap -->
	  
            
            
            </div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	  















      
</div> <!-- #main-content -->
<style>
	.et_right_sidebar #main-content .container:before { display: none !important; }</style>
<?php

get_footer();