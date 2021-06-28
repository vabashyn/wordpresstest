<?php get_header(); ?>
<main>

    wp_enqueue_style();
    <div class="conetnt">
        <h1>Main Content</h1>
        <h1> <?php the_title(); ?></h1>
        <h4>Posted on <?php the_time('F JS, Y') ?></h4>
        <p> <?php the_content(__('(more...)')); ?></p>
        <p>  <?php _e('Sorry no posts'); ?> </p>
    </div>
    <?php get_sidebar(); ?>
</main>
<div class="delimetr"></div>
<?php get_footer(); ?>