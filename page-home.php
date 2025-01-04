<?php
    get_header();
?>

<main class="main">
    <div class="container">
        <div class="col-7">
            <h1>Somos advogados especialistas em <a href="">Direito Médico</a>, <a href="">Civil</a> e <a href="">Trabalhista</a>.</h1>
            <p>O escritório <strong>Santana & Vanzella Advogados</strong> possui atendimento personalizado e com pleno foco nas suas necessidades.</p>
            <div class="main__buttons">
                <a href="<?php echo home_url(); ?>/o-escritorio/" class="btn btn__primary">O Escritório</a>
                <a href="<?php echo home_url(); ?>/areas-atuacao/" class="btn btn__secondary">Áreas de Atuação</a>
            </div>
        </div>
        <div class="col-5 seal-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/homem-paleto-escrevendo.png" alt="" class="img-fluid">
            <div id="seal">
                <span class="years">2005-2025</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icone-balanca.svg" alt="Ícone de Balança">
                <p><strong>20</strong> anos de experiência</p>
            </div>
        </div>
    </div>
</main>

<blockquote>
    <div class="container">
        <div class="col-8">
            <p>Quando todos avançam juntos, o sucesso ocorre por si só.</p>
            <cite>Henry Ford</cite>
        </div>
    </div>
</blockquote>

<section class="home-areas">
    <div class="container">
        <div class="col-6">
            <h2>Conheça nossas<br />Áreas de Atuação</h2>
            <p>Nossa equipe é composta de especialistas em Direito Civil, Direito Médico e Direito Trabalhista. Mas acima de tudo, somos especialistas em ouvir a sua necessidade, para trazer a melhor solução para ela:</p>
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
                <a href="<?php the_permalink(); ?>">
                    <div class="icon-area">
                    <?php the_post_thumbnail( 'medium' ); ?>
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

<section class="call-to-action">
    <div class="container">
        <div class="col-7">
            <h2>Nós temos o <em>caminho certo</em> para a sua necessidade.</h2>
            <p>Agende uma consultoria gratuita através de nosso WhatsApp ou pelo telefone com nossa equipe:</p>
            <div class="main__buttons">
                <a href="<?php echo home_url(); ?>/sobre-nos/" class="btn btn__primary">WhatsApp</a>
                <a href="tel:+554333415663" class="btn btn__secondary">Falar por telefone</a>
            </div>
        </div>
        <div class="col-5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/homem-negocios-bracos-cruzados-sorrindo" alt="Homem de negócios sorrindo de braços cruzados" class="img-fluid">
        </div>
    </div>
</section>

<?php
    get_footer();
?>