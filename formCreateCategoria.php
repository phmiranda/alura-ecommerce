<?php require_once('helperCabecalho.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="POST" action="formRequestCreateCategoria.php">
                    <h3> Formulário de Categoria </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome" required>
                    </div>
                    <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>