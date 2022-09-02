<h1><?php the_title(); ?></h1>

<h2><?php the_field('intro'); ?></h2>

<?php if( have_rows('repeat') ): ?>
    <ul class="repaet">
    <?php while( have_rows('repeat') ): the_row(); 
        ?>
        <li>
            <p><?php the_sub_field('title'); ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php $term= get_field('category'); ?>

<p><?php  echo esc_html( $term->name ); ?></p>

<img class="wd_bloc_main_article_div_div_img" alt="<?php echo $post->post_name; ?>" src="<?php echo get_field('image')['sizes']['single-post']; ?>" />

