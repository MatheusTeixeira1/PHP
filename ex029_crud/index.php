<?php
include_once 'includs/header.php'; 
include_once 'php_action/db_connection.php';
include_once 'includs/mensagem.php';
?>




<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    
                    if(mysqli_num_rows($resultado)>0){

                    

                    while ($dados = mysqli_fetch_array($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $dados['nome']?></td>
                        <td><?php echo $dados['sobrenome']?></td>
                        <td><?php echo $dados['email']?></td>
                        <td><?php echo $dados['idade']?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td>
                            <a class="btn-floating orange btn modal-trigger" href="#modal <?php echo $dados['id'] ?>"><i class="material-icons red">delete</i></a>
                        </td>
                    
                        
                        <div id="modal <?php echo $dados['id'] ?>" class="modal">
                            <div class="modal-content">
                            <h4>Opa, cuidado!</h4>
                            <p>Tem certeza que excluir o cliente <?php echo $dados['nome'] ?> para sempre? (É muito tempo)</p>
                            </div>
                            <div class="modal-footer">
                                <form action="php_action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                                    <button type="submit" name="btn-deletar" class="btn red">Sim, quer deletar</button>
                                    <a style="color: white;" href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    
                    </tr>
            <?php 
                }
            }else{
                ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>    
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php include_once 'includs/footer.php'; ?>