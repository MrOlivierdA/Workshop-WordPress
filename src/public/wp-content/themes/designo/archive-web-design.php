
<?php if ( have_posts() ) : ?>
<ul>

    <?php while ( have_posts() ) :
		the_post(); ?>
		<li><h2><?php the_title(); ?></h2></li>
        <?php endwhile;?>
</ul> 
<?php endif; // end if
?>

<?php get_header(); ?>

<main class="wd_bloc_main">
			<section class="wd_bloc_main_section">
				<h1 class="wd_bloc_main_section_h1">App Design</h1>
				<p class="wd_bloc_main_section_p">Our mobile designs bring intuitive digital solutions to your customers right at their fingertips.</p>
			</section>

			<img class="wd_bloc_main_img_deco_top" alt="deco" src="./src/img/deco_background_1_index.svg" />

			<article class="wd_bloc_main_article">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :
		            the_post(); ?>
				<div class="wd_bloc_main_article_div">
					<div class="wd_bloc_main_article_div_div">
						<img class="wd_bloc_main_article_div_div_img" alt="airfilter" src="<?php echo get_template_directory_uri();?>/src/img/ap-airfilter.png" />
						<div class="wd_bloc_main_article_div_div_text">
							<h3 class="wd_bloc_main_article_div_div_text_h3"><?php the_title(); ?></h3>
							<p class="wd_bloc_main_article_div_div_text_p">Solving the problem of poor indoor air quality by filtering the air</p>
						</div>
					</div>
				</div>
                <?php endwhile;?>
            <?php endif; ?>
				<!------------------Made with love by Arthur Lefevre lefevre.arthur98@gmail.com--------------------->
				
			</article>

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