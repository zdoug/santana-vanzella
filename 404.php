<?php
    get_header();
?>

<main class="main">
    <div class="container">
        <div class="col-5">
            <h1>Erro <em>404</em></h1>
            <p>Infelizmente a página que você está procurando não existe ou foi movida. Que tal visualizar nosso site do começo?</p>
            <a href="<?php echo get_home_url(); ?>" class="link">Voltar para a Página inicial</a>
        </div>
        <div class="col-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pessoa-levando-papeis-numa-caixa.png" alt="" class="img-fluid">
        </div>
    </div>
</main>

<?php
    get_footer();
?>