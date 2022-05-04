<?php
require_once 'booking.php';
$booking = new Booking("freshlookdb", "127.0.0.1", "root", "");
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, user-scalable=0" >
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/old_browser.css">
    <!-- <script src="javascript/jquery.js"></script>
    <script src="javascript/jquery-ui.js"></script> -->
    <title>Fresh Look</title>
</head>
<noscript>Seu navegador não suporta Javascript, algumas funções deixarão de funcionar. Abilite-o ou mude para um compatível.</noscript>
<body>
    <!------------------------------------------------------------------->
    <!--------------------------------CABECALHO-------------------------->
    <!------------------------------------------------------------------->
    <header id="header">
        <div id="header-container">
            <nav id="navbar">
                <div id="logo">
                    <h1>Fresh Look</h1>
                    <img id="bars" class="bars" src="imagens/bars.png" alt="Bars">
                </div>
                <div id="links">
                    <ul id="list">
                        <li class="link" id="link-1"><a href="#">Home</a></li>
                        <li class="link" id="link-2"><a href="#about-us">Acerca</a></li>
                        <li class="link" id="link-3"><a href="#services">Serviços</a></li>
                        <li class="link" id="link-4"><a href="#contact">Contacto</a></li>
                        <li class="link" id="link-5"><a href="#formulario-reserva">Reserva</a></li>
                    </ul>
                </div>
            </nav>
            <div id="welcome">
                <div id="welcome-title" class="welcome-item">
                    <h2>Bem-Vindo à barbearia</h2>
                </div>
                <div id="welcome-logo" class="welcome-item">
                    <p>Fresh Look</p>
                </div>
                <div id="welcome-text" class="welcome-item">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div id="welcome-btn" class="welcome-item">
                    <a href="#formulario-reserva" id="btn-reservar">Faça sua reserva</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!------------------------------------------------------------------->
        <!---------------------------------ACERCA DE NOS--------------------->
        <!------------------------------------------------------------------->
        <section id="about-us">
            <div class="about-h2">
                <h2>Acerca de <span class="span">nós</span></h2>
            </div>
            <div id="about-us-container">
                <div class="about" id="about-text">
                    <div class="about-us-h3">
                        <h3>Barbearia</h3><br>
                        <h3 class="about-us-h3-logo">Fresh Look</h3>
                    </div>
                    <div class="about-us-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="about" id="about-img"></div>
            </div>
        </section>
        <!------------------------------------------------------------------->
        <!---------------------------------SERVICOS-------------------------->
        <!------------------------------------------------------------------->
        <section id="services">
            <div id="our-services-h2">
                <h2><span class="span">Nossos</span> Serviços</h2>
            </div>
            <div class="services-container">
                <div id="beard-cut-machine" class="services">
                    <div class="services-img">
                        <img src="imagens/beard-cut-machine.png" alt="Beard cut">
                    </div>
                    <div class="services-title">
                        <h3>Corte de Barba</h3>
                    </div>
                    <div class="services-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
                <div id="beard-shaving" class="services">
                    <div class="services-img">
                        <img src="imagens/beard-shaving.png" alt="Beard Shaving">
                    </div>
                    <div class="services-title">
                        <h3>Corte de Barba a mão</h3>
                    </div>
                    <div class="services-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
                <div id="hair-coloring" class="services">
                    <div class="services-img">
                        <img src="imagens/hair-coloring.png" alt="Hair coloring">
                    </div>
                    <div class="services-title">
                        <h3>Coloração de Cabelo</h3>
                    </div>
                    <div class="services-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
                <div id="haircut" class="services">
                    <div class="services-img">
                        <img src="imagens/haircut.png" alt="Haircut">
                    </div>
                    <div class="services-title">
                        <h3>Corte de Cabelo</h3>
                    </div>
                    <div class="services-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
                <div id="hair-treat" class="services">
                    <div class="services-img">
                        <img src="imagens/hai-treat.png" alt="Hair treat">
                    </div>
                    <div class="services-title">
                        <h3>Tratamento de Cabelo</h3>
                    </div>
                    <div class="services-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
                <div id="facemasking" class="services">
                    <div class="services-img">
                        <img src="imagens/face-masking.png" alt="Face masking">
                    </div>
                    <div class="services-title">
                        <h3>Máscara Facial</h3>
                    </div>
                    <div class="services-p">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------------------------------------------->
        <!---------------------------------COMENTARIOS--------------------------->
        <!------------------------------------------------------------------->
        <section id="coments-clients">
            <div class="coment-h2">
                <h2 id="coment-sub">Comentários dos <span class="span">nossos Clientes</span></h2>
            </div>
            <div class="coments-container">
                <img class="arrow" src="imagens/seta-reverse.png" alt="seta">
                <div class="coments-slider">
                    <div class="coments" id="coment-1">
                        <img class="profile" src="imagens/profile-1.PNG" alt="Perfil">
                        <p class="coment">
                            " Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "
                        </p>
                        <p class="client">- Osmane -</p>
                    </div>
                    <div class="coments" id="coment-2">
                        <img class="profile" src="imagens/profile-1.PNG" alt="Perfil">
                        <p class="coment">
                            " Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "
                        </p>
                        <p class="client">- Darken -</p>
                    </div>
                </div>
                <img class="arrow" src="imagens/seta.png" alt="seta">
            </div>
        </section>
        <!------------------------------------------------------------------->
        <!---------------------------------CONTACTO-------------------------->
        <!------------------------------------------------------------------->
        <section id="contact">
            <div class="contact-h2">
                <h2><span class="span">Localize</span>-nos</h2>
            </div>
            <div id="contact-container">
                <div id="map-container" class="contact-item">
                    <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7174.16903118695!2d32.59159693472878!3d-25.965268422142803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69bcf78b5b04f%3A0x397b498c151fc907!2sGentleman&#39;s%20Barber%20Shop!5e0!3m2!1spt-PT!2smz!4v1647895107018!5m2!1spt-PT!2smz"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div id="address" class="contact-item">
                    <div class="fader-contact">
                        <h3>Nosso endereço</h3>
                        <p>Avenida Mao Tse Tung, Nº 412, Maputo</p>
                        <p style="color: #fff">Telefone: (+258) 845509796</p>
                        <h3>Horários</h3>
                        <p>Segunda à Sexta-feira</p>
                        <p>Das 08:00 às 21:30</p>
                        <p>Finais de semana</p>
                        <p>Das 09:00 às 18:30</p>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------------------------------------------->
        <!------------------------FORMULARIO DE RESERVA ---------------------->
        <!------------------------------------------------------------------->
        <section id="formulario-reserva">
            <div class="formulario-h2">
                <h2 id="form-h2">Faça sua <span class="span"> Reserva</h2>
            </div>
            <div class="formulario-reserva-container">
                <div id="fader">
                    <!--------------------------------------------//
                        CODIGO PHP PARA CAPTURAR E VALIDAR VALORES DO FORMULARIO
                    --------------------------------------------->
                    <?php

                        if(isset($_POST['nome'])):
                            $nome = addslashes($_POST['nome']);
                            if(!$booking->nomeVerif($nome)):?>
                                <p id="erro-nome" class="alert-reserva">Nome inválido!</p>
                            <?php else:
                                $telefone = addslashes($_POST['telefone']);
                            if(!$booking->telVerif($telefone)): ?>
                                <p id="erro-numero" class="alert-reserva">Número inválido!</p>
                            <?php else:
                                $idade = addslashes($_POST['idade']);
                            if(!$booking->idadeVerif($idade)): ?>
                                <p id="erro-idade" class="alert-reserva">Idade inválida!</p>
                            <?php
                            else:
                                $corte = addslashes($_POST['corte']);
                            if(!$booking->corteVerif($corte)): ?>
                                <p id="erro-corte" class="alert-reserva">Selecione o corte</p>
                            <?php else:
                            $preco;
                            switch ($corte) {
                                case 'Juba':
                                    $preco = "50 Meticais";
                                    break;
                                case 'Carreca':
                                    $preco = "80 Meticais";
                                    break;
                                case 'Punk':
                                    $preco = "150 Meticais";
                                    break;
                                case 'Escovinha Grosaa':
                                    $preco = "120 Meticais";
                                    break;
                                case 'Escovinha Fina':
                                    $preco = "100 Meticais";
                                    break;
                                case 'Barba':
                                    $preco = "130 Meticais";
                                    break;
                                case 'Cabelo e Barba':
                                    $preco = "200 Meticais";
                                    break;
                                default:
                                    $preco = "Sem preço";
                                    break;
                            }
                            $dia = addslashes($_POST['dia']);
                            if(!$booking->dataVerif($dia)): ?>
                            <p id="erro-dia" class="alert-reserva">Selecione uma data</p>
                            <?php else:
                            $hora = addslashes($_POST['hora']);
                            if(!$booking->horaVerif($hora)): ?>
                            <p id="erro-hora" class="alert-reserva">Hora inválida!</p>
                            <?php else:
                            $observ = addslashes($_POST['observacoes']);

                            if(!$booking->reservar($nome, $telefone, $idade, $corte, $preco, $dia, $hora, $observ)):?>
                            <p id="erro-reserva" class="alert-reserva">Hora ocupada. Por favor, selecione outra hora.</p>
                            <?php else: ?>
                            <p id="sucesso-reserva" class="alert-reserva">Agendado com sucesso!</p>
                            <?php 
                            endif;
                            endif;
                            endif;
                            endif; 
                            endif;
                            endif;
                            endif;
                            endif; 
                    ?>
                    <!-- ---------------FIM CAPTURA E VALIDACAO DE DADOS---------------------->
                    
                    <form id="formulario-container" method="POST">
                        <div id="left-form" class="form">
                            <label for="nome">Nome<span class="asteristico"> *</span></label>
                            <input type="text" class="form-item" name="nome" id="nome" placeholder="Nome"
                                autocomplete="off" required maxlength="30">
                            <label for="telefone">Telefone<span class="asteristico"> *</span></label>
                            <input type="tel" class="form-item" name="telefone" id="telefone" placeholder="Telefone"
                                autocomplete="off" required maxlength="9">
                            <label for="idade">Idade<span class="asteristico"> *</span></label>
                            <input type="text" pattern="\d*" class="form-item" name="idade" id="idade" placeholder="Idade (6-80 anos)"
                                autocomplete="off" required maxlength ="2">
                            <label for="corte">Corte<span class="asteristico"> *</span></label>
                            <select class="select" name="corte" id="corte" required>
                                <option value="">Selecione o corte</option>
                                <option value="Juba">Juba</option>
                                <option value="Carreca">Carreca</option>
                                <option value="Punk">Punk</option>
                                <option value="Escovinha Grossa">Escovinha Grossa</option>
                                <option value="Escovinha Fina">Escovinha Fina</option>
                                <option value="Barba">Barba</option>
                                <option value="Cabelo e Barba">Cabelo & Barba</option>
                            </select>
                            <label for="preco">Preço</label>
                            <div id="preco" class="preco"><span id="valor" class="valor"></span> </div>
                        </div>
                        <div id="right-form" class="form">
                            <label for="data">Data<span class="asteristico"> *</span></label>
                            <input type="date" class="form-item" name="dia" id="dia" required>
                        <?php
                            $selectHora = "<label for='hora'>Hora<span class='asteristico'> *</span></label>
                                            <select name='hora' id='hora' required>";
                            $selectHora .= "</select>";

                            echo $selectHora;
                        ?>

                        <!-- ---------------FIM CODIGO PHP---------------------->

                            <label for="observacoes">Observações (opcional)</label>
                            <textarea class="observacoes" name="observacoes" id="observacoes" cols="30" rows="9"
                                placeholder="Observações( max. 120 )" maxlength="120"></textarea>
                            <input type="submit" class="form-item" id="btn-submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>                 
        </section>
    </main>
    <!------------------------------------------------------------------->
    <!------------------------------RODAPÉ ----------------------------->
    <!------------------------------------------------------------------>
    <footer id="footer">
        <div class="footer-container">
            <div class="footer-item" id="logo-footer">
                <h1>Fresh Look</h1>
            </div>
            <div class="footer-item" id="social-media">
                <a href="#"><img src="imagens/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="imagens/whatsapp-icon.png" alt="Whatsapp"></a>
                <a href="#"><img src="imagens/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="imagens/twitter-icon.png" alt="Twitter"></a>
            </div>
        </div>
        <div id="developer">
            <p>Desenvolvedor - <b id="author">Salvador Carlos Mucavele</b> &copy <?php echo date("Y");?></p>
        </div>
    </footer>
    <script src="javascript/index.js"></script>
</body>

</html>