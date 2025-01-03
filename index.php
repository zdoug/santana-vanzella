<?php get_header(); ?>
<section class="title-archive">
    <div class="container">
        <h1>Blog</h1>
    </div>
</section>
    <div class="container">
        <?php
            if ( have_posts() ):
                while ( have_posts() ): the_post();
        ?>
            <div class="col-12">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        <?php
                endwhile;
            else : ?>
                <p><?php _e('Desculpe, nenhum post encontrado.', 'deniseferioli'); ?></p>
        <?php
            endif;
        ?>
    </div>

<?php get_footer(); ?>