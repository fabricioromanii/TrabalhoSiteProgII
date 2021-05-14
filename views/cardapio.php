<?php require_once("includes/header.php");?>

<h2>Faça seu pedido</h2>
<hr>

<form action="carrinho.php" method="post" onsubmit="return addToCart()">

    <label for="tamanho">Selecione o tamanho da pizza:</label>

    <select name="tamanho" id="tamanho" onchange="selectPizzaSize()">
        <option value="">---- Selecione ----</option>
        <option value="b">Broto</option>
        <option value="p">Pequena</option>
        <option value="m">Média</option>
        <option value="g">Grande</option>
        <option value="gg">Gigante</option>
    </select>

    <br>

        <p>Você selecionou <strong id="numSabores">0</strong> de <strong id="limiteSabores">0</strong> sabores</p>
        <div class="lista_sabores" id="lista_sabores">

            <?php
            require_once "../classes/SaborDAO.php";
            $obj = new SaborDAO();
            $lista = $obj->listar(); 
            if(count($lista) == 0){
                echo "Nenhum sabor encontrado.";
            }
            else{
                foreach ($lista as $sabor){
                ?>            
                <div class="sabor">
                    <label>
                        <input type="checkbox" name="sabores[]" value="<?=$sabor->getCodigo()?>" onchange="updateCount()">
                        <div class="sabor_img">
                            <img src="../img/<?=$sabor->getNomeImagem()?>" alt="<?=$sabor->getNome()?>">
                        </div>
                        <div class="sabor_descricao">
                            <strong><?=$sabor->getNome()?></strong>
                            <?=$sabor->getIngredientes()?>
                        </div>
                    </label>
                </div>
                <?php
                }
            ?>
        </div> 

        <fieldset class="borda-pizza">
            <legend>Selecione a opção de borda:</legend>
            <label><input type="radio" name="borda" value="" checked>Sem borda</label><br>
            <label><input type="radio" name="borda" value="">Catupiry</label><br>
            <label><input type="radio" name="borda" value="">Cheddar</label><br>
            <label><input type="radio" name="borda" value="">Chocolate</label><br>
        </fieldset>

        <button type="submit" class="botaoEnviar" name="adicionar"> Adicionar ao carrinho</button>

        <?php
        } 
        ?>

</form>

<?php require_once("includes/footer.php");?>