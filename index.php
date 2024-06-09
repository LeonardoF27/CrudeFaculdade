<?php require "inc/cabecalho.php"; ?>

<main class="fundo">

<div class="container">

    <div class="row">

        <div class="col mt-5">

        <?php
        include("config.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("novos_clientes.php");
                    break;
                    case "listar":
                        include("lista_de_clientes.php");
                        break;
                        case "salvar":
                            include("salvar-cliente.php");
                            break;
                            break;
                        case "editar":
                            include("editar_cliente.php");
                            break;
                        default:
                        print "<h1>Bem vindo!</h1>";
                        }
                ?>
        </div>

    </div>

</div>

</main>

<?php require "inc/rodape.php"; ?>