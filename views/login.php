<section class="content">
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center"><i class="fa fa-users"></i> Login</h2>
            </div> <hr />
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <h3>Usuários</h3>
                        <div class="col-md-12 text-end">
                            <a href="registrarUser.php" title="novo" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                        </div>
                        <div class="col-md-5">
                                <label for="email"> EMAIL:</label>
                                <input class="form-control" id="email" name="email" type="text" required placeholder="Digite o email" autofocus>
                        </div>
                        <div class="col-md-5">
                                <label for="password"> SENHA:</label>
                                <input class="form-control" id="password" name="password" type="text" required placeholder="Digite a senha" autofocus>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <a href="gerenciar.php" title="entrar" type="submit" class="btn btn-success"> Entrar</a>
                        </div>
                    </div>
                </form>
            </div>
            <br><br><br>
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <h3>Veterinários</h3>
                        <div class="col-md-12 text-end">
                            <a href="" title="novo" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                        </div>
                        <div class="col-md-5">
                            <label for="email"> EMAIL:</label>
                            <input class="form-control" id="email" name="email" type="text" required placeholder="Digite o email" autofocus>
                        </div>
                        <div class="col-md-5">
                            <label for="password"> SENHA:</label>
                            <input class="form-control" id="password" name="password" type="password" required placeholder="Digite a senha" autofocus>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <a href="" title="entrar" type="submit" class="btn btn-success"> Entrar</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>