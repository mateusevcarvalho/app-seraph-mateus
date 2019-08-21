<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5 class="card-title">Editar Colaboradores</h5>
            </div>
            <div class="col-6 text-right"></div>
        </div>
        <hr>

        <form class="row" id="form-editar">

            <input type="hidden" name="id" id="colaboradorId" value="<?= $colaborador->id ?>">

            <div class="col-sm-12 mb-3">
                <h6>Dados Gerais:</h6>
            </div>

            <div class="form-group col-sm-4">
                <label>Nome: <span class="text-danger">*</span></label>
                <input name="nome" type="text" class="form-control" value="<?= $colaborador->nome ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Email: <span class="text-danger">*</span></label>
                <input name="email" type="email" class="form-control" value="<?= $colaborador->email ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Data Nacimento: <span class="text-danger">*</span></label>
                <input name="data_nascimento" type="date" class="form-control"
                       value="<?= $colaborador->data_nascimento ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Celular: <span class="text-danger">*</span></label>
                <input name="celular" type="text" class="form-control" data-mask="(00) 00000-0000"
                       placeholder="(__) _____-____" reverse="true" value="<?= $colaborador->celular ?>" required>
            </div>

            <div class="col-sm-12 mb-3 mt-2">
                <h6>Dados de Endereço:</h6>
            </div>

            <div class="form-group col-sm-4">
                <label>Cep: <span class="text-danger">*</span></label>
                <input name="cep" type="text" class="form-control" data-mask="00000-000"
                       value="<?= $colaborador->cep ?>" placeholder="_____-___" reverse="true" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Logradouro: <span class="text-danger">*</span></label>
                <input name="logradouro" type="text" class="form-control" value="<?= $colaborador->logradouro ?>"
                       required>
            </div>

            <div class="form-group col-sm-4">
                <label>Numero: <span class="text-danger">*</span></label>
                <input name="numero" type="number" class="form-control" value="<?= $colaborador->numero ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Bairro: <span class="text-danger">*</span></label>
                <input name="bairro" type="text" class="form-control" value="<?= $colaborador->bairro ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Cidade: <span class="text-danger">*</span></label>
                <input name="cidade" type="text" class="form-control" value="<?= $colaborador->cidade ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Estado: <span class="text-danger">*</span></label>
                <input name="estado" type="text" class="form-control" value="<?= $colaborador->estado ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label>Complemento: </label>
                <input name="complemento" type="text" value="<?= $colaborador->complemento ?>" class="form-control">
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



