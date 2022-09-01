

<?php get_header(); ?>

		<main class="wd_bloc_main">
			<section class="wd_bloc_main_section">
				<h1 class="wd_bloc_main_section_h1">App Design</h1>
				<p class="wd_bloc_main_section_p">Our mobile designs bring intuitive digital solutions to your customers right at their fingertips.</p>
			</section>

			<img class="wd_bloc_main_img_deco_top" alt="deco" src="<?php echo get_template_directory_uri();?>/src/img/deco_background_1_index.svg" />

			
			<!-- DEFAULT LOOP -->
            <?php if ( have_posts() ) : ?>

			<div class="wd_bloc_main_article">

                <?php while ( have_posts() ) : the_post(); ?>

				<article id="<?php echo $post->post_name; ?>">
					<a href="<?php the_permalink(); ?>" class="wd_bloc_main_article_div">
						<div class="wd_bloc_main_article_div_div">
							<img class="wd_bloc_main_article_div_div_img" alt="<?php echo $post->post_name; ?>" src="<?php echo get_template_directory_uri();?>/src/img/ap-airfilter.png" />
							<div class="wd_bloc_main_article_div_div_text">
								<h1 class="wd_bloc_main_article_div_div_text_h3"><?php the_title(); ?></h1>
								<p class="wd_bloc_main_article_div_div_text_p"><?php the_field('intro'); ?></p>
							</div>
						</div>
					</a>
				</article>

                <?php endwhile;?>

			</div>

            <?php endif; wp_reset_postdata(); ?>
			<!-- END: DEFAULT LOOP -->
			
			
			<!-- WP_QUERY LOOP -->
			<?php 
			$q = new WP_Query(array( 
				'post_type' => 'web-design',
				'order'   => 'DESC',
				));

			if ( $q->have_posts() ) : ?>

			<div class="wd_bloc_main_article">

				<?php while( $q->have_posts() ) : $q->the_post(); ?>

				<article id="<?php echo $post->post_name; ?>">
					<a href="<?php the_permalink(); ?>" class="wd_bloc_main_article_div">
						<div class="wd_bloc_main_article_div_div">
							<img class="wd_bloc_main_article_div_div_img" alt="<?php echo $post->post_name; ?>" src="<?php echo get_template_directory_uri();?>/src/img/ap-airfilter.png" />
							<div class="wd_bloc_main_article_div_div_text">
								<h1 class="wd_bloc_main_article_div_div_text_h3"><?php the_title(); ?></h1>
								<p class="wd_bloc_main_article_div_div_text_p"><?php the_field('intro'); ?></p>
								<?php $term= get_field('category'); ?>
								<p class="wd_bloc_main_article_div_div_text_p"><?php  echo esc_html( $term->name ); ?></p>
							</div>
						</div>
					</a>
				</article>

				<?php endwhile; ?>

			</div>

			<?php endif; wp_reset_postdata(); ?>
			<!-- END: WP_QUERY LOOP -->


			<nav class="wd_bloc_main_nav">
				<ul class="wd_bloc_main_nav_ul">
					<li class="wd_bloc_main_nav_ul_li wd_bloc_main_nav_ul_li-wppd">
						<a title="Designo Web Design page" href="webdesign.html">
							<div class="index_main_nav_ul_li_a_div">
								<h2 class="wd_bloc_main_nav_ul_li_h2">WEB DESIGN</h2>
								<h3 class="wd_bloc_main_nav_ul_li_h3">VIEW PROJECTS</h3>
							</div>
						</a>
					</li>
					<li class="wd_bloc_main_nav_ul_li wd_bloc_main_nav_ul_li-grd">
						<a title="Designo Home page" href="index.html">
							<div class="index_main_nav_ul_li_a_div">
								<h2 class="wd_bloc_main_nav_ul_li_h2">GRAPHIC DESIGN</h2>
								<h3 class="wd_bloc_main_nav_ul_li_h3">VIEW PROJECTS</h3>
							</div>
						</a>
					</li>
				</ul>
			</nav>
		</main>