<?php
    get_header();
?>

<main class="main-contato">
    <div class="container">
        <div class="col-5">
            <h1>Entre em <strong>Contato</strong></h1>
            <p>Preencha o formulário abaixo para entendermos melhor a sua necessidade. Nossa equipe entrará em contato o mais rápido possível:</p>
            <form action="" method="">
                <div class="form-input">
                    <label>Nome:</label>
                    <input type="text">
                </div>
                <div class="form-input">
                    <label>E-mail:</label>
                    <input type="email">
                </div>
                <div class="form-input">
                    <label>WhatsApp:</label>
                    <input type="text">
                </div>
                <div class="form-input">
                    <label>Área</label>
                    <select name="" id="">
                        <option value="Direito Médico">Direito Médico</option>
                        <option value="Direito Trabalhista">Direito Trabalhista</option>
                        <option value="Direito Civil">Direito Civil</option>
                    </select>
                </div>
                <div class="form-input">
                    <label>Mensagem</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn btn__primary" type="submit">Enviar</button>
            </form>
        </div>
        <aside class="col-6">
            <h3>Onde estamos</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/edificio-torre-di-pietra-londrina-pr.jpg" alt="Edifício Torre di Pietra em Londrina/PR" class="img-fluid"/>
            <address>Avenida Ayrton Senna da Silva, 500 Condomínio Torre di Pietra, 15º andar - Londrina/PR</address>
            <a href="" class="link">Clique para visualizar o mapa</a>
            <hr>
            <h3>Contatos</h3>
            <ul>
                <li><a href="">(43) 99835-3386</a></li>
                <li><a href="">(43) 3341-5663</a></li>
                <li><a href="">escritorio@santanaevanzella.com.br</a></li>
            </ul>
            <hr>
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">LinkedIn</a></li>
            </ul>
        </aside>
    </div>
</main>

<?php
    get_footer();
?>