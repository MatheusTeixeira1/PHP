<html>
<body>

    <?php 
    
    if(isset($_POST["enviar"])){
        $formatosPermitidos = array("png","jpeg","jpg");
        $extencao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if(in_array($extencao, $formatosPermitidos)){
            $pasta = "uploads/";
            $temporario = $_FILES['arquivo']['tmp_name'];     
            $novoNome = uniqid().".$extencao";
            
            if(move_uploaded_file($temporario, $pasta.$novoNome)){
                $mesagem = "Upload feito com sucesso!";
            }else{
                $mesagem = "Não foi possivel fazer o upload";
            }
        }else{
            $mesagem = "Formato invalido";
        }
    }
    echo $mesagem;
    ?>

    <form 
    action="<?php echo $_SERVER['PHP_SELF'] ?>" 
    method="POST" 
    enctype="multipart/form-data"
    >

        <input type="file" name="arquivo">
        <button type="submit" name="enviar">Enviar arquivo</button>

    </form>
</body>
</html>