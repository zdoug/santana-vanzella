<?php get_header(); ?>
<section class="title-archive">
    <div class="container">
        <h1>Blog</h1>
    </div>
</section>
    <div class="container container-posts">
        <?php
            global $post;
            if ( have_posts() ):
                while ( have_posts() ): the_post();
        ?>
            <div class="col-4">
                <a href="<?php the_permalink(); ?>">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'img-fluid'));
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sem-imagem.png" class="img-fluid" alt="">
                        <?php
                            }                        
                        ?>
                </a>
                <time datetime="<?php echo $post->post_date; ?>"><?php echo the_date(); ?></time>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        <?php
                endwhile;
            else : ?>
                <p><?php _e('Desculpe, nenhum post encontrado.', 'santanaevanzella'); ?></p>
        <?php
            endif;
        ?>
    </div>

    <?php get_template_part('content', 'call-to-action'); ?>

<?php get_footer(); ?>