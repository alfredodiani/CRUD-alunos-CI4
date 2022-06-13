<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
    <div class="container mt-5">
        <h1>Aluno</h1>
        <form>
            <div class="mb-3">
                <img src="<?=base_url()?>/imagens/<?= $aluno['fotopath'] ?>" alt="Avatar Logo" style="width:200px;" class="rounded-circle"> 
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control" type="text" id="nome" value="<?= $aluno['nome'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input class="form-control" type="text" id="endereco" value="<?= $aluno['endereco'] ?>" readonly>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>
