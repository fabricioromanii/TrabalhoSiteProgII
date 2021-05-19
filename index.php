<?php require_once("views/includes/header.php");?>

    <div>
        <img class="banner" title="Foto da pizzaria" src="img/banner.jpg" />
        <h1 class="textoBanner">Pizzaria Los Hermanos</h1>
    </div>

    <div class="textoPizzaria" id="TextoSobreJS">
        <h2>Pizzaria Hermanos</h2>
        <p>Acreditamos que cada pedaço de pizza representa em seu próprio ser uma experiência completa.</p>
    </div>

    <div class="fotosPizzaria" id="FotosJS">
        <h2>Galeria de fotos</h2>

        <section class="galeria">
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria1.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria2.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria3.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria4.jpg" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria5.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria6.jpg" alt="imagem-promocao" onclick="" /></a>
        </section>
    </div>

    <div id="PizzasJS" class="cardapio">
        <h2>Cardápio</h2>
        <div>
            <h2>Pizzas</h2>
            <div class="itemCardapioPizza">
                <a href="../controller/pedidoController.php?acao=pedido&tam=G">
                    <h5>Grande</h5>
                    <img class="imagemPizza" src="img/logoPizzaGrande.png" alt="imagem-promocao" height="120" width="120">
                    <p>45 cm - 16 fatias - 4 sabores</p>
                    <div class="precoPizza">R$ 40,00</div>
                </a>
            </div>
            <div class="itemCardapioPizza">
                <a href="../controller/pedidoController.php?acao=pedido&tam=M">
                    <h5>Média</h5>
                    <img class="imagemPizza" src="img/logoPizzaMedia.png" alt="imagem-promocao" height="120" width="120">
                    <p>30 cm - 12 fatias - 3 sabores</p>
                    <div class="precoPizza">R$ 30,00</div>
                </a>
            </div>
            <div class="itemCardapioPizza">
                <a href="../controller/pedidoController.php?acao=pedido&tam=P">
                    <h5>Pequena</h5>
                    <img class="imagemPizza" src="img/logoPizzaPequena.png" alt="imagem-promocao" height="120" width="120">
                    <p>15 cm - 8 fatias - 2 sabores</p>
                    <div class="precoPizza">R$ 23,00</div>
                </a>
            </div>
        </div>
    </div>

    <div class="contato" id="ContatoJS">
        <form class="form">
            <h2>Faça seu pedido!</h2>
            <div class="div-metade">
            <input placeholder="Nome" type="text" required>
            </div>
            <div class="div-metade">
            <input placeholder="Telefone" type="number" required>
            </div>
            <div class="div-inteira">
            <input placeholder="E-mail" type="email" required>
            </div>
            <div class="div-inteira">
            <input type="text" placeholder="Digite sua mensagem aqui" maxlength="600" required></input>
            </div>
            <button class="field-enviar" type="submit">Enviar</button>
        </form>
    </div>

    <script src="js/header.js"></script>

    <?php require_once("views/includes/footer.php");?>