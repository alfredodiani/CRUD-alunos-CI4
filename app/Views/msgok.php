<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
    <div class="container mt-5">
        <h2><?= $msg?></h2>
        <a href="<?= $pagina ?>"><button type="button" class="btn btn btn-primary">Voltar</button></a>
    </div>
<?= $this->endSection() ?>