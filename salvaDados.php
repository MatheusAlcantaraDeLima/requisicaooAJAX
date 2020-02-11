<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $clieData = "Nome: {$nome}\n\rE-mail: {$email}\n\rtelefone: {$telefone}\n-----------------------------------------------------------\n";

    function salvaDados($arq, $clieData){
        try{
            $arq = fopen("cadastros.txt","a+");
            fwrite($arq, $clieData);
            fclose($arq);
            sleep(2);
            echo "<script>alert('Cadastrado com sucesso!')</script>;";
            echo "<script>window.location.href='index.php'</script>;";
        }catch(Exception $e){
            echo("Mensagem: ". $e->getMessage());
        }
    }
    salvaDados("cadastros.txt", $clieData);
    
?>