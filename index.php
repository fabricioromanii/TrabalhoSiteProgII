<?php require_once("views/includes/header.php");?>

    <div>
        <img class="banner" title="Foto da pizzaria" src="img/banner.jpg" />
        <h1 class="textoBanner">Pizzaria Los Hermanos</h1>
    </div>

    <div class="textoPizzaria" id="TextoSobreJS">
        <h1>Pizzaria Hermanos</h1>
        <p>Acreditamos que cada pedaço de pizza representa em seu próprio ser uma experiência completa.</p>
    </div>

    <div class="fotosPizzaria" id="FotosJS">
        <h1>Galeria de fotos</h1>

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
                <a href="views/cardapio.php">
                    <h5>Grande</h5>
                    <img class="imagemPizza" src="img/logoPizzaGrande.png" alt="imagem-promocao" height="120" width="120">
                    <p>45 cm - 16 fatias - 4 sabores</p>
                    <div class="precoPizza">R$ 40,00</div>
                </a>
            </div>
            <div class="itemCardapioPizza">
                <a href="views/cardapio.php">
                    <h5>Média</h5>
                    <img class="imagemPizza" src="img/logoPizzaMedia.png" alt="imagem-promocao" height="120" width="120">
                    <p>30 cm - 12 fatias - 3 sabores</p>
                    <div class="precoPizza">R$ 30,00</div>
                </a>
            </div>
            <div class="itemCardapioPizza">
                <a href="views/cardapio.php">
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
            <h1>Faça seu pedido!</h1>
            <input class="field-nome" placeholder="Nome" type="text" required>
            <input class="field-telefone" placeholder="Telefone" type="number" required>
            <input class="field-email" placeholder="E-mail" type="email" required>
            <textarea class="field-mensagem" placeholder="Digite sua mensagem aqui" maxlength="600" required></textarea>
            <input class="field-enviar" type="submit" value="Enviar">
        </form>
    </div>

    <script src="js/header.js"></script>

    <?php require_once("views/includes/footer.php");?>