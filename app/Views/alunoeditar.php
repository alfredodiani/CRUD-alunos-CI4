<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
    <div class='container mt-5'>
        <h1>Atualizar dados</h1>
        <form action="<?= base_url('/alunoatualizar') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?= $aluno['id'] ?>" name="id" >
            <input type="hidden" value="<?= $aluno['fotopath'] ?>" name="fotopathold" >
            <div class="mb-3">
                <p>Foto atual</p>
                <img src="<?=base_url()?>/imagens/<?= $aluno['fotopath'] ?>" alt="Avatar Logo" style="width:200px;" class="rounded-circle" name="foto"> 
            </div>
            <div class="mb-3" style="max-width:500px">
                <label for="fotopath" class="form-label">Carregar nova foto</label>
                <input type="file" class="form-control" id="fotopath" name="fotopath" accept="image/png,image/jpeg">
            </div>
            <div class="mb-3" style="max-width:500px">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control" type="text" id="nome" value="<?= $aluno['nome'] ?>" name="nome">
            </div>
            <div class="mb-3" style="max-width:500px">
                <label for="endereco" class="form-label">Endereço</label>
                <input class="form-control" type="text" id="endereco" value="<?= $aluno['endereco'] ?>" name="endereco">
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-success">Atualizar</button>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>

