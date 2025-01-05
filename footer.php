    <footer class="footer">
        <div class="container">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-escritorio-santana-vanzella-branca.png" alt="Logo Branca Escritório Santana e Vanzella" class="img-fluid">
            </div>
            <div class="col-4">
                <div class="footer__links">
                    <h3>Links</h3>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu',
                            'container' => 'nav'
                        ));
                    ?>
                </div>
                <div class="footer__links">
                    <h3>Endereço</h3>
                    <address>Avenida Ayrton Senna da Silva, 500 Condomínio Torre di Pietra, 15º andar
                    Londrina/PR</address>
                </div>
            </div>
            <div class="col-4">
                <div class="footer__links">
                    <h3>E-mail</h3>
                    <a href="mailto:escritorio@santanaevanzella.com.br" target="_blank" rel="external">escritorio@santanaevanzella.com.br</a>
                </div>
                <div class="footer__links">
                    <h3>WhatsApp / Telefone</h3>
                    <ul>
                        <li><a href="">(43) 99835-3386</a></li>
                        <li><a href="">(43) 3341-5663</a></li>
                    </ul>
                </div>
                <div class="footer__links">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="col-12">
                <p><?php echo date('Y'); ?> ® - Santana & Vanzella Advogados - Todos os Direitos Reservados.</p>
                <p>Site desenvolvido por Ambigram Design Studio <a href="https://ambigram.studio" target="_blank" rel="external" title="Desenvolvido por Ambigram Design Studio">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-ambigram.svg" alt="Ícone Ambigram">
                </a></p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>