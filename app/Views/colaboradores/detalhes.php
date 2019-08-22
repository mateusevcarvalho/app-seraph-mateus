<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5 class="card-title">Detalhes do Colaborador</h5>
            </div>
            <div class="col-6 text-right"></div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-12 mb-3">
                <h6>Dados Gerais:</h6>
            </div>

            <div class="col-sm-4">
                <b>Nome: </b><br> <?= $colaborador->nome ?>
            </div>

            <div class="col-sm-4">
                <b>Email: </b><br> <?= $colaborador->email ?>
            </div>

            <div class="col-sm-4">
                <b>Data Nascimento: </b><br> <?= date('d/m/Y', strtotime($colaborador->data_nascimento)) ?>
            </div>

            <div class="col-sm-4 mt-3">
                <b>Idade: </b><br> <?= calculo_idade($colaborador->data_nascimento) ?> anos
            </div>

            <div class="col-sm-4 mt-3">
                <b>Celular: </b><br> <?= $colaborador->celular ?>
            </div>

            <div class="col-sm-12 mt-5">
                <h6>Endereço:</h6>
            </div>

            <div class="col-sm-4 mt-3">
                <b>Cep: </b><br> <?= $colaborador->cep ?>
            </div>

            <div class="col-sm-4 mt-3">
                <b>Logradouro: </b><br> <?= $colaborador->logradouro ?>
            </div>

            <div class="col-sm-4 mt-3">
                <b>Número: </b><br> <?= $colaborador->numero ?>
            </div>

            <div class="col-sm-3 mt-3">
                <b>Bairro: </b><br> <?= $colaborador->bairro ?>
            </div>

            <div class="col-sm-3 mt-3">
                <b>Cidade: </b><br> <?= $colaborador->cidade ?>
            </div>

            <div class="col-sm-3 mt-3">
                <b>Estado: </b><br> <?= $colaborador->estado ?>
            </div>

            <div class="col-sm-3 mt-3">
                <b>Complemento: </b><br> <?= $colaborador->complemento ?>
            </div>

            <div class="col-sm-12 mt-5 mb-3">
                <h6>Competências:</h6>
            </div>

            <div class="col-sm-12">
                <b>Comportamentais: </b><br>

                <?php foreach ($comportamentais as $comportamento) { ?>
                    <span class="badge badge-pill badge-info"><?= $comportamento['nome'] ?></span>
                <?php } ?>
            </div>

            <div class="col-sm-12 mt-3">
                <b>Técnicas: </b><br>

                <?php foreach ($tecnicas as $tecnica) { ?>
                    <span class="badge badge-pill badge-info"><?= $tecnica['nome'] ?></span>
                <?php } ?>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-6">
                <a href="<?= BASEPATH ?>/colaboradores" class="btn btn-secondary">
                    <i class="icofont-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </div>
</div>
</div>



