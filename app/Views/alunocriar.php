<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
    <div class="container mt-5">
        <h1>Cadastrar Aluno</h1>
        <form action="<?= base_url('/alunosalvar') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3" style="max-width:500px">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control" type="text" id="nome" value="" name="nome">
            </div>
            <div class="mb-3" style="max-width:500px">
                <label for="endereco" class="form-label">Endereço</label>
                <input class="form-control" type="text" id="endereco" value="" name="endereco">
            </div>
            <div class="mb-3" style="max-width:500px">
                <label for="fotopath" class="form-label">Foto</label>
                <input type="file" class="form-control" id="fotopath" name="fotopath" accept="image/png,image/jpeg">
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>
