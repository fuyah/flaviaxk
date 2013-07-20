<?php
/*
Template Name: landingpage
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div class="img_block">

						

						</div>

							<div class= "text">

								<div class="under">

									<div class="under_contents">

									<?php if (have_posts()) : while (have_posts()) : the_post();?>
									<?php the_content(); ?>
									<?php endwhile; endif; ?>
									<?php get_footer(); ?>

									</div> 

								</div> 

							</div>  

						</div> 

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
