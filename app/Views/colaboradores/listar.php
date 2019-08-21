<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5 class="card-title">Listar Colaboradores</h5>
            </div>
            <div class="col-6 text-right">
                <a href="<?= BASEPATH ?>/colaboradores/cadastrar" class="btn btn-primary">
                    <i class="icofont-plus"></i> Cadastar
                </a>
            </div>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($colaboradores as $colaborador) { ?>
                    <tr>
                        <td><?= $colaborador['nome'] ?></td>
                        <td><?= calculo_idade($colaborador['data_nascimento']) ?></td>
                        <td><?= $colaborador['celular'] ?></td>
                        <td><?= $colaborador['email'] ?></td>
                        <td>
                            <a href="<?= BASEPATH ?>/colaboradores/editar/<?= $colaborador['id'] ?>"
                               class="btn btn-sm btn-info"><i class="icofont-edit"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



