<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>
<div class='container mt-5' >
    <h2>Bem vindo!</h2>
    <br>
    <p>Este site foi feito como trabalho da disciplina Computação em Nuvem.</p>
    <p>Ministrada pelo Prof. Neumar Malheiros.</p>
    <br>
    <p>Para a hospedagem web foi utilizada uma instância AWS EC2 configurada manualmente</p>
    <p>Utilizando Ubuntu Server, Apache http Server, PHP, DNS CloudFlare e Dominio Freenom</p>
    <br>
    <p>Para o banco de dados foi utilizada uma instância AWS RDS MySQL</p>
    <br>
    <p><strong>Aluno: Alfredo Beneti Diani</strong></p>
    <p><strong>Aluno: Bruno Carlos de Mesquita Naves</strong></p>
    <br>
    <p>Curso: Sistemas de Informação</p>
    <p>Departamento de Ciência da Computação</p>
    <p>UFLA - Universidade Federal de Lavras</p>
</div>
<?= $this->endSection() ?>
