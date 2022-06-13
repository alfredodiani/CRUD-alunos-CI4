# CRUD de alunos com CodeIgniter 4.2.0

## Projeto

Este projeto foi feito como parte do processo seletivo para a organização Delta Global.
A ideia é fazer um CRUD de aluno contendo nome, endereço e uma foto jpg.

Para o desenvolvimento deste projeto foi utilizado o XAMPP para montar o servidor Apache e MySQL

## Instalação e execução

Em primeiro lugar é preciso instalar o XAMPP ou outro controlador para montar o servidor.
Após a instalação, procure pelo arquivo /php/php.ini e apague o ; (ponto e virgula) nas seguintes linhas:
```
extension=gd
extension=intl
```

Baixar os arquivos do repositório colocar em:
/xamp/htdocs/alunosci4

Utilizando o phpMyAdmin rode o script createbd.sql contido na pasta raiz do projeto
para criar o banco de dados, a tabela e inserir alguns registros de exemplo.

Abra o terminal na pasta /xamp/htdocs/alunosci4/ e rode o comando:
```
php spark serve
```

Abra o web browser e digite:
```
localhost:8080
```

Como maneira de facilitar, o app está configurado para utilização do MySQL com as credenciais
root
sem password

##Utilização

Existe um menu na parte superior do website com as opções para Inserção de novo Aluno e para Listagem de todos alunos cadastrados.
As opções para editar, apagar e vizualizar aparecerão na listagem dos alunos.

