<?php
/*
Template Name: blogpage
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div class="img_block"></div>

							<div class= "text">

								<div class="under">

									<div class="under_content">

									<?php echo do_shortcode("[ic_add_posts]"); ?>

									</div> 

								</div> 

							</div>  

						</div> 

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
