<?php
    get_header();
?>

<section class="home-areas">
    <div class="container">
        <div class="col-7">
            <h2>Conheça nossas<br />Áreas de Atuação</h2>
        </div>
    </div>
    <div class="container">
        <?php
            $args2 = array(
                'post_type' => 'areas-atuacao',
                'posts_per_page' => 3,
                'orderby' => 'post_title',
                'order'=>'ASC'
            );


            $postlist2 = new WP_Query( $args2 );

            if( $postlist2->have_posts() ):
                while ( $postlist2->have_posts() ): 
                    $postlist2->the_post();
        ?>
            <div class="col-4 home-areas__area">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="icon-area">
                    <?php the_post_thumbnail( 'custom-thumb' ); ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                </a>
            </div>
        <?php
                endwhile;
                wp_reset_postdata();
            else:
        ?>
            <p>Nenhuma Área de Atuação para mostrar.</p>
        <?php
            endif;
        ?>
    </div>
</section>

<?php get_template_part('content', 'call-to-action'); ?>

<?php
    get_footer();
?>