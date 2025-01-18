<?php
    get_header();
?>

<main class="main">
    <div class="container">
        <div class="col-5">
            <h1>Nós acreditamos na proximidade entre as <em>pessoas</em> para buscarmos o melhor caminho <em>juntos</em>.</h1>
        </div>
        <div class="col-6">
            <p>O escritório FSV Advogados foi fundado em 2005, na cidade de Londrina-PR. Cada um dos sócios fundadores apresenta especialidades distintas dentro do Direito Empresarial para prestar serviços jurídicos tanto na área consultiva quanto no contencioso.</p>
            a
        </div>
    </div>
</main>

<section>
    <div class="container">
        <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pessoas-analisando-documentos.png" alt="Pessoas analisando documentos" class="img-fluid">
        </div>
    </div>
    <div class="container">
        <div class="col-4">
            <h3><strong>20</strong> anos de experiência</h3>
        </div>
        <div class="col-4">
            <h3><strong>100</strong> clientes atendidos</h3>
        </div>
        <div class="col-4">
            <h3><strong>87</strong> ações expedidas em 2024</h3>
        </div>
    </div>
</section>

<section class="info">
    <div class="container">
        <div class="col-5">
            <h3>Todo o suporte que você precisa para lidar com questões jurídicas com <em>agilidade</em>, <em>estratégia</em> e <em>confiança</em>.</h3>
        </div>
        <div class="col-6">
            <p>Nestes 20 anos, nosso escritório construiu uma história sólida e vários cases de sucesso através destes três elementos.</p>
            <a href="" class="link">Nossas Áreas de Atuação</a>
        </div>
    </div>
</section>

<section class="fotos">
    <div class="container">
        <div class="col-12">
            <h2>Fotos</h2>
        </div>
    </div>
    <div class="container fotos__slider">
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/frente-edificio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sala-escritorio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/frente-edificio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sala-escritorio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/frente-edificio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sala-escritorio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/frente-edificio.png" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sala-escritorio.png" class="img-fluid" alt="">
        </div>
    </div>
</section>

<?php get_template_part('content', 'call-to-action'); ?>

<?php
    get_footer();
?>