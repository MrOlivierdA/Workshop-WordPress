<h1><?php the_title(); ?></h1>

<h2><?php the_field('intro'); ?></h2>

<?php if( have_rows('repaet') ): ?>
    <ul class="repaet">
    <?php while( have_rows('repaet') ): the_row(); 
        ?>
        <li>
            <p><?php the_sub_field('title'); ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php $term= get_field('category'); ?>

<p><?php  echo esc_html( $term->name ); ?></p>

<img src="<?php the_field('image'); ?>" alt="image">

