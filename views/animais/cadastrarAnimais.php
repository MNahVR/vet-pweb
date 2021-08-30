<section class="content">
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center"> Cadastrar animais</h2>
            </div> <hr />
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="name"> NOME:</label>
                            <input class="form-control" id="name" name="name" type="text" required placeholder="Nome do animal" autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="type"> TIPO:</label>
                            <input class="form-control" id="type" name="type" type="text" required placeholder="Cachorro, gato, passarinho..." autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="race"> RAÇA:</label>
                            <input class="form-control" id="race" name="race" type="text" required placeholder="Raça do animal" autofocus>
                        </div>
                        <div class="col-md-1">
                            <label for="age"> IDADE:</label>
                            <input class="form-control" id="age" name="age" type="text" required placeholder="Idade do animal" autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="name2"> NOME DO DONO:</label>
                            <input class="form-control" id="name2" name="name2" type="text" required placeholder="Seu nome completo" autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="phone"> CONTATO:</label>
                            <input class="form-control" id="phone" name="phone" type="text" required placeholder="Telefone com DDD" autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                            <button type="submit" name="confirm" class="btn btn-success">Confirme</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>