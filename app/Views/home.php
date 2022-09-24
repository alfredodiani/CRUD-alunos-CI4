<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
<div class='container mt-5' >
    <h2>Bem vindo!</h2>
    <br>
    <br>
    <p>Este site é um exemplo de CRUD básico com arquitetura MVC.</p>
    <p>A entidade é um aluno que contem nome, endereço e uma foto jpg.</p>
    <br>
    <p>A implementação foi foeita utilizando PHP 8, framework CodeIgniter 4.2 e MySQL 8</p>
    <br>
    <p>Dev: Alfredo Diani</p>
</div>
<?= $this->endSection() ?>
