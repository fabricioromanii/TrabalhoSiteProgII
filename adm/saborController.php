<?php

include_once "../classes/SaborDAO.php";

if(!isset($_GET['acao'])){
    $titulo = "Lista de Sabores";
    $obj = new SaborDAO();
    $lista = $obj->listar();
    include "views/includes/header.php";
    include "views/listaSabor.php";
    include "views/includes/footer.php";
}
else {    
	switch($_GET['acao']){

        case 'cadastra':
            $titulo = "Cadastro de Sabor";
            if(!isset($_POST['cadastrar'])){ 
                include "views/includes/header.php";
                include "views/cadastraSabor.php";
                include "views/includes/footer.php";                
            }
            else{ 
                $novo = new Sabor();
                $novo->setNome($_POST['field_nome']);
                $novo->setIngredientes($_POST['field_ingredientes']);
                $novo->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros) != 0){ 
                    include "views/includes/header.php";
                    include "views/cadastraSabor.php";
                    include "views/includes/footer.php";                       
                }
                else{
                    $destino = "../img/images/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new SaborDAO();
                        if($bd->inserir($novo))
                            header("Location: saborController.php");
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/includes/header.php";
                        include "views/cadastraSabor.php";
                        include "views/includes/footer.php";                         
                    }
                }
            }
            break;
        
        case 'altera':
            $titulo = "Alteração de Sabor";
            if(!isset($_POST['alterar'])){
                $obj = new SaborDAO();
                $sabor = $obj->buscar($_GET['cod']);
                include "views/layout/topo.php";
                include "views/alteraSabor.php";
                include "views/layout/rodape.php"; 
            }
            else{ 
                $obj = new Sabor();
                $obj->setNome($_POST['field_nome']);
                $obj->setIngredientes($_POST['field_ingredientes']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $obj->setCodigo($_POST['field_codigo']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/layout/topo.php";
                    include "views/alteraSabor.php";
                    include "views/layout/rodape.php";                       
                }
                else{ 
                    $destino = "../assets/images/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new SaborDAO();
                        if($bd->alterar($obj))
                            header("Location: saborController.php"); 
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/layout/topo.php";
                        include "views/cadastraSabor.php";
                        include "views/layout/rodape.php";                         
                    }
                }
            }
            break;

        case 'exclui':
            $bd = new SaborDAO();
            if($bd->excluir($_GET['cod']))
                header("Location: saborController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

