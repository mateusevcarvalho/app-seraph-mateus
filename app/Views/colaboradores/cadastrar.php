<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5 class="card-title">Cadastrar Colaboradores</h5>
            </div>
            <div class="col-6 text-right"></div>
        </div>
        <hr>

        <form class="row" id="form-cadastro">

            <div class="col-sm-12 mb-3">
                <h6>Dados Gerais:</h6>
            </div>

            <div class="form-group col-sm-4">
                <label>Nome:</label>
                <input name="nome" type="text" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Email:</label>
                <input name="email" type="email" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Data Nacimento:</label>
                <input name="data_nascimento" type="date" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Celular:</label>
                <input name="celular" type="text" class="form-control" data-mask="(00) 00000-0000"
                       placeholder="(__) _____-____" reverse="true" required>
            </div>

            <div class="col-sm-12 mb-3 mt-2">
                <h6>Dados de Endereço:</h6>
            </div>

            <div class="form-group col-sm-4">
                <label>Cep:</label>
                <input name="cep" type="text" class="form-control" data-mask="00000-000"
                       placeholder="_____-___" reverse="true" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Logradouro:</label>
                <input name="logradouro" type="text" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Numero:</label>
                <input name="numero" type="number" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Bairro:</label>
                <input name="bairro" type="text" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Cidade:</label>
                <input name="cidade" type="text" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Estado:</label>
                <input name="estado" type="text" class="form-control" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Complemento:</label>
                <input name="complemento" type="text" class="form-control">
            </div>

            <div class="col-sm-12 mb-3 mt-2">
                <h6>Competências:</h6>
            </div>

            <div class="col-sm-12">
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="<?= BASEPATH ?>/colaboradores" class="btn btn-secondary">
                            <i class="icofont-arrow-left"></i> Voltar
                        </a>
                    </div>
                    <div class="col-6 text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="icofont-save"></i> Salvar
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>



