<?php

/* =====

Template Name: Custom Post Type Archive

===== */
get_header(); ?>

<div id="main-content">




			<div class="et_pb_row pagetitlerow">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
				<div class="et_pb_text_inner"><h1>Divi Issue</h1>
                <p>See how the header and footer styles are not working?</p></div>
                
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
			</div> <!-- .et_pb_row -->
            











            
            
            
            
            
            
            
            

		<div id="content-area" class="clearfix">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					 ?>






<div class="et_pb_row archive_row">
				<div class="et_pb_column et_pb_column_2_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
			
            
<div class="et_pb_text_inner">
<a href="<?php the_field('website_url'); ?>" class="archivetitle" target="_blank">
<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_the_title(); ?>
</a>
<div class="file-description"><?php the_content(); ?></div>
</div>
                
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
            
            <div class="et_pb_column et_pb_column_1_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">				
				<div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
				
				<div class="et_pb_text_inner"><a href="<?php the_field('website_url'); ?>" target="_blank"><?php the_post_thumbnail(); ?></a></div>
                
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
			</div> <!-- .archive_row -->
            
            
            
            

			<?php endwhile; ?>
            
            <div class="et_pb_row">
            
            <?php

					if ( function_exists( 'wp_pagenavi' ) )
						wp_pagenavi();
					else
						get_template_part( 'includes/navigation-partners', 'index' );
				else :
					get_template_part( 'includes/no-results', 'index' );
				endif;
			?>
</div>     
            
            
            

		</div> <!-- #content-area -->
</div> <!-- #main-content -->
<style>
	.et_right_sidebar #main-content .container:before { display: none !important; }</style>
<?php

get_footer();