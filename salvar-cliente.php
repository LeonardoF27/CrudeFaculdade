<?php
    switch ($_REQUEST["acao"]) {
        // Cadastrado no banco de dados
        case 'cadastrar':
            $nome = $_POST["nome"];
            $pedido = $_POST["pedido"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];

            $sql = "INSERT INTO cliente (nome, pedido, endereco, numero) VALUES ('{$nome}', '{$pedido}', '{$endereco}', '{$numero}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>"; 
            }else{
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
             break;

            //  Editar no banco de dados
            case 'editar':
                $nome = $_POST["nome"];
                $pedido = $_POST["pedido"];
                $endereco = $_POST["endereco"];
                $numero = $_POST["numero"];

                $sql = "UPDATE cliente SET
                nome='{$nome}',
                pedido='{$pedido}',
                endereco='{$endereco}',
                numero='{$numero}'
                WHERE
                id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>"; 
                }else{
                    print "<script>alert('Não foi possivel Editar');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
    
                break;

                // Excluir no banco de dados
                case 'excluir':
                    $sql = "DELETE FROM cliente WHERE id=".$_REQUEST["id"];

                    $res = $conn->query($sql);

                    if($res==true){
                        print "<script>alert('Excluído com sucesso');</script>";
                        print "<script>location.href='?page=listar';</script>"; 
                    }else{
                        print "<script>alert('Não foi possivel Excluir');</script>";
                        print "<script>location.href='?page=listar';</script>";
                    }

                    break;
    }
?>