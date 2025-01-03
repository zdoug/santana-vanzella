<?php get_header(); ?>

    <section class="post">
        <div class="container">
            <?php
                while( have_posts() ): the_post();
            ?>
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo get_home_url(); ?>">Início</a></li>>
                        <li><?php the_category( ' '); ?></li>>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
        </div>
        <div class="container">
            <div class="col-8">
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail( array( 456, 609 ) ); ?>
                <?php the_content(); ?></p>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </section>

<?php get_footer(); ?>