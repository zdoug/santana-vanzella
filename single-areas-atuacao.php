<?php get_header(); ?>

<?php
    while ( have_posts() ): the_post();
?>
    <main class="area-atuacao">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/head_direito_medico.png" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="col-5">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-7">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
    <section class="area-list">
        <div class="container">
            <div class="col-4 area-list_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt="Ícone de Vantagem">
                <p><?php echo get_post_meta(get_the_ID(), 'beneficio1', true); ?></p>
            </div>
            <div class="col-4 area-list_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt="Ícone de Vantagem">
                <p><?php echo get_post_meta(get_the_ID(), 'beneficio2', true); ?></p>
            </div>
            <div class="col-4 area-list_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt="Ícone de Vantagem">
                <p><?php echo get_post_meta(get_the_ID(), 'beneficio3', true); ?></p>
            </div>
        </div>
    </section>
    <section class="area-speciality">
        <div class="container">
            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/foto-especialidades-direito-medico.png" alt="Ícone de Vantagem" class="img-fluid">
            </div>
            <div class="col-7">
                <h3>Especialidades</h3>
                <?php
                    $especialidades = get_field('especialidades');
                    if (isset($especialidades)) {
                        foreach ($especialidades as $especialidade) { ?>
                        <details>
                            <summary><?php echo $especialidade['especialidade']; ?></summary>
                            <p><?php echo $especialidade['descricao_especialidade']; ?></p>
                        </details>
                <?php } } ?>
            </div>
        </div>
    </section>
    <?php
        endwhile;
    ?>

    <?php get_template_part('content', 'call-to-action'); ?>

<?php get_footer(); ?>