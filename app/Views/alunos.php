<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
        <div class='container mt-5'>
            <table class="table">
                <thead>
                    <tr> 
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereco</th>
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alunos as $aluno){ ?>
                        <tr>
                            <td><?= $aluno['id'] ?></td>
                            <td><?= $aluno['nome'] ?></td>
                            <td><?= $aluno['endereco'] ?></td>
                            <td><img src="<?=base_url()?>/imagens/<?= $aluno['fotopath'] ?>" alt="Avatar Logo" style="width:40px;" class="rounded-circle"></td>
                            <td>
                                <a href="<?= base_url('alunoeditar').'/'.$aluno['id'] ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                                <a href="<?= base_url('alunodelete').'/'.$aluno['id'] ?>"><button type="button" class="btn btn-danger">Apagar</button></a>
                                <a href="<?= base_url('alunover').'/'.$aluno['id'] ?>"> <button type="button" class="btn btn-success">Mostrar</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
<?= $this->endSection() ?>