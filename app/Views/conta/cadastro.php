<form class="form-signin" id="form-cadastro">
    <h1 class="h3 mb-3 font-weight-normal">Nova Conta</h1>

    <label for="inputEmail" class="sr-only">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome" required autofocus>

    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Senha" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Criar</button>
    <div class="text-center"><b><a href="<?= BASEPATH ?>/conta/login">Já tenho conta</a></b></div>

    <p class="mt-5 mb-3 text-muted">&copy; Mateus Carvalho 2019</p>
</form>