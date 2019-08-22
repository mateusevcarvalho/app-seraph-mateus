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
                        <td><?= calculo_idade($colaborador['data_nascimento']) ?> anos</td>
                        <td><?= $colaborador['celular'] ?></td>
                        <td><?= $colaborador['email'] ?></td>
                        <td>
                            <a href="<?= BASEPATH ?>/colaboradores/detalhes/<?= $colaborador['id'] ?>" title="Detalhes"
                               class="btn btn-sm btn-secondary"><i class="icofont-file-alt"></i></a>

                            <a href="<?= BASEPATH ?>/colaboradores/editar/<?= $colaborador['id'] ?>" title="Editar"
                               class="btn btn-sm btn-info"><i class="icofont-edit"></i></a>

                            <a href="<?= BASEPATH ?>/colaboradores/imprimir/<?= $colaborador['id'] ?>" target="_blank"
                               title="Exportar PDF" class="btn btn-sm btn-warning"><i class="icofont-print"></i></a>

                            <button type="button" class="btn btn-sm btn-danger deletar" title="Apagar"
                                    data-id="<?= $colaborador['id'] ?>" data-nome="<?= $colaborador['nome'] ?>">
                                <i class="icofont-trash"></i>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

<!-- Modal deletar -->
<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <form class="modal-dialog" role="document" id="form-deletar">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja deletar o colaborador: <span class="text-danger" id="body-modal"></span> ?
                <input type="hidden" name="id" id="id-delete" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="icofont-close"></i> Fechar
                </button>
                <button type="submit" class="btn btn-danger">
                    <i class="icofont-trash"></i> Apagar
                </button>
            </div>
        </div>
    </form>
</div>



