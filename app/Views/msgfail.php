<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
    <div class="container mt-5">
        <?php
            foreach ($msg as $m) {
            echo '<h3>' . $m . '</h3>';
        }
        ?>
        <a href="<?= $pagina ?>"><button type="button" class="btn btn btn-primary">Voltar</button></a>
    </div>
<?= $this->endSection() ?>