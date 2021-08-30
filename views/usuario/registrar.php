<section class="content">
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center"> Cadastrar Usuário</h2>
            </div> <hr />
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name"> NOME:</label>
                            <input class="form-control" id="name" name="name" type="text" required placeholder="Nome completo" autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="rg"> R.G.:</label>
                            <input class="form-control" id="rg" name="rg" type="text" required placeholder="R.G." autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="cpf"> CPF:</label>
                            <input class="form-control" id="cpf" name="cpf" type="text" required placeholder="CPF" autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="date"> DATA DE NASCIMENTO:</label>
                            <input class="form-control" id="date" name="date" type="text" required placeholder="dd/mm/aaaa" autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="phone"> CONTATO:</label>
                            <input class="form-control" id="phone" name="phone" type="text" required placeholder="(xx) xxxxx-xxxx" autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="address"> ENDEREÇO:</label>
                            <input class="form-control" id="address" name="address" type="text" required placeholder="Endereço" autofocus>
                        </div>
                        <div class="col-md-1">
                            <label for="number"> NÚMERO:</label>
                            <input class="form-control" id="number" name="number" type="text" required placeholder="Número" autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="neighbourhood"> BAIRRO:</label>
                            <input class="form-control" id="neighbourhood" name="neighbourhood" type="text" required placeholder="Bairro" autofocus>
                        </div>
                        <div class="col-md-1">
                            <label for="uf"> ESTADO:</label>
                            <input class="form-control" id="uf" name="uf" type="text" required placeholder="UF" autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="city"> CIDADE:</label>
                            <input class="form-control" id="city" name="city" type="text" required placeholder="Cidade" autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="email"> EMAIL:</label>
                            <input class="form-control" id="email" name="email" type="text" required placeholder="Email" autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="password"> SENHA:</label>
                            <input class="form-control" id="pasword" name="password" type="text" required placeholder="Senha" autofocus>
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