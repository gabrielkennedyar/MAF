<?php include_once("../layouts/header.php"); ?>
    <main>
        <div class="container-fluid">
            <div>
                <br>
                <p>
                    <span style="color:#395143; font-size: 18px;">
                        <i class="far fa-hand-point-right"></i> Você está em: Editar Perfil
                    </span>
                </p>
            </div>

            <hr>
            <div class="container">
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header">Editando Perfil</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputName">Nome</label>
                                        <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Primeiro nome">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputLastName">Sobrenome</label>
                                        <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Sobrenome">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="InputCPF">CPF</label>
                                        <input class="form-control" id="InputCPF" type="text" aria-describedby="cpfHelp" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="000.000.000-00" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="InputdataNasc">Data de Nascimento</label>
                                        <input class="form-control" id="InputdataNasc" type="date" aria-describedby="dataNascHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Nova Senha</label>
                                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleConfirmPassword">Confirmar senha</label>
                                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirmar senha">
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-block" href="index.html">Salvar Mudanças</a>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="index.html">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- Fim container-fluid -->
    </main>


<?php include_once("../layouts/footer.php"); ?>

</body>

</html>