<?php get_header(); ?>

    <article class="post" id="post">
        <div class="container">
            <?php
                while( have_posts() ): the_post();
            ?>
                <!-- <div class="col-8">
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a href="<?php echo get_home_url(); ?>">Início</a></li>>
                        <li class="breadcrumb__item"><?php the_category( ' '); ?></li>>
                        <li class="breadcrumb__item"><?php the_title(); ?></li>
                    </ul>
                </div> 
        </div>
        <div class="container">-->
            <div class="col-8">
                <div class="metabox">
                    <time class="metabox__date" datetime="<?php echo $post->post_date; ?>"><?php echo the_date(); ?></time>
                    <?php the_category(); ?>
                </div>
                <div class="content-post">
                    <h1><?php the_title(); ?></h1>
                    <?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?>
                    <?php the_content(); ?></p>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </article>

    <?php get_template_part('content', 'call-to-action'); ?>

<?php get_footer(); ?>