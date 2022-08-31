
<?php get_header(); ?>

		<main class="bloc_main_index">
			<article class="index_main_article">
				<section class="index_main_article_section">
					<h1 class="index_main_article_section_h1">Award-winning custom designs and digital branding solutions</h1>
					<p class="index_main_article_section_p">With over 10 years in the industry, we are experienced in creating fully responsive websites, app design, and engaging brand experiences. Find out more about our services.</p>
					<a href="about.html" title="Designo about page" aria-label="Designo about page" class="index_main_article_section_a">learn more</a>
				</section>
			</article>

			<img class="index_main_img_deco_top" alt="deco" src="<?php echo get_template_directory_uri(); ?>/src/img/deco_background_1_index.svg" />

			<nav class="index_main_nav">
				<ul class="index_main_nav_ul">


	<?php 
		$q = new WP_Query(array( 
        	'post_type' => 'web-design',
        	'order'   => 'ASC',
			//'meta_key' => ''
	    ));
		if ( $q->have_posts() ) : while( $q->have_posts() ) : $q->the_post();?>
		<li class="item-pate" id="<?php echo $post->post_name; ?>">
			<a href="<?php the_permalink(); ?>">
				<div class="text-container">
					<h3 class="title"><?php the_title(); ?></h3>
					<p class="intro"><?php the_field('intro'); ?>
					<?php $term= get_field('category'); ?>
					<p><?php  echo esc_html( $term->name ); ?></p>
				</div>
			</a>
		</li>
		<?php endwhile; endif; ?>
	<?php wp_reset_postdata() ?>

				
				</ul>
			</nav>

			<img class="index_main_img_deco_bottom" alt="deco" src="<?php echo get_template_directory_uri(); ?>/src/img/deco_background_2_index.svg" />

			<section class="index_main_section">
				<div class="index_main_section_div">
					<img class="index_main_section_div_img" alt="passinate" src="<?php echo get_template_directory_uri(); ?>/src/img/passinate_index.png" />
					<h3 class="index_main_section_div_h3">PASSIONATE</h3>
					<p class="index_main_section_div_p">Each project starts with an in-depth brand research to ensure we only create products that serve a purpose. We merge art, design, and technology into exciting new solutions.</p>
				</div>

				<div class="index_main_section_div">
					<img class="index_main_section_div_img" alt="resourceful" src="<?php echo get_template_directory_uri(); ?>/src/img/resourceful_index.png" />
					<h3 class="index_main_section_div_h3">RESOURCEFUL</h3>
					<p class="index_main_section_div_p">Everything that we do has a strategic purpose. We use an agile approach in all of our projects and value customer collaboration. It guarantees superior results that fulfill our client’s needs.</p>
				</div>

				<div class="index_main_section_div">
					<img class="index_main_section_div_img" alt="friendly" src="<?php echo get_template_directory_uri(); ?>/src/img/friendly_index.png" />
					<h3 class="index_main_section_div_h3">FRIENDLY</h3>
					<p class="index_main_section_div_p">We are a group of enthusiastic folks who know how to put people first. Our success depends on our customers, and we strive to give them the best experience a company can provide.</p>
				</div>
			</section>
		</main>

<?php get_footer(); ?>
