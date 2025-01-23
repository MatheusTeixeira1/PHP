<html>
<body>
    <?php 
    
    if(isset($_POST["enviar"])){
        $formatosPermitidos = array("png", "PNG", "jpeg", "jpg");
        $quantidadeDeArquivos = count($_FILES['arquivos']['name']);
        $contador = 0;

        while($contador < $quantidadeDeArquivos){ 
            $extencao = pathinfo($_FILES['arquivos']['name'][$contador], PATHINFO_EXTENSION);

            if(in_array($extencao, $formatosPermitidos)){
                $pasta = "uploads/";
                $temporario = $_FILES['arquivos']['tmp_name'][$contador];
                $novoNome = uniqid().".$extencao";

                if(move_uploaded_file($temporario, $pasta.$novoNome)){
                    echo"Upload da imagen feito com sucesso<br>";
                }else{
                    echo"Erro no upload do arquivo $temporario<br>";
                }
            }else{
                echo "$extencao não permitido<br>";
            }

            $contador++;
        }
    }

    ?>
    <form 
    action="<?php $_SERVER['PHP_SELF'] ?>" 
    method="POST" 
    enctype="multipart/form-data">
        
        <!-- O nome do imput precisa estar no padrão de array -->
        <!-- o atributo multiple é necessario para enviar multiplos arquivos -->
        <input type="file" name="arquivos[]" multiple>
        <button type="submit" name="enviar"> Enviar </button>

    </form>

</body>
</html>