<?php

namespace App\Controllers;

//use App\Controllers\BaseController;
use App\Models\AlunosModel;

class Alunos extends BaseController
{
    private $alunosModel;
    
    public function __construct(){                                              //construtor
        $this->alunosModel = new AlunosModel();
    }
    
    public function index(){                                                    //mostra todos os alunos
        return view('alunos',[
            'alunos' => $this->alunosModel->findAll()
        ]);
    }
    
    public function show($id){                                                    //mostra um unico aluno
        return view('alunover',[
            'aluno' => $this->alunosModel->find($id)
        ]);
    }
    
    public function delete($id) {                                               //função para deletar aluno por id
        $aluno = $this->alunosModel->find($id);
        $file = 'imagens/'.$aluno['fotopath'];
        if ($this->alunosModel->delete($id)) {                                  //tenta deletar e retorna mensagem de sucesso ou erro
            unlink($file);
            return redirect()->to('alunos');
        } else {
            return view('msgfail', [
                'msg' => $this->alunosModel->errors(),
                'pagina' => base_url('alunocriar'),
            ]); 
        }
    }
    
    public function create() {                                                  //função que chama a criação da pagina para adicionar novo aluno
        return view('alunocriar', []);
    } 
    
    public function store() {                                                   //salva um novo registro de aluno
        $imagem = $this->request->getFile('fotopath');                          
        $foto = \Config\Services::image();                                       //inicializando classe de manipulação de imagem
        if ($imagem->isValid())  {                                              //trata e salva a imagem
            $nomeImagem = $imagem->getRandomName();
            $imagem->move('imagens/', $nomeImagem);
            $foto->withFile('imagens/'.$nomeImagem);
            $foto->fit(200, 200, 'center');
            $foto->save('imagens/'.$nomeImagem);
        } else {
            return view('msgok', [
                'msg' => 'Selecione um arquivo válido.',
                'pagina' => base_url('alunocriar'),
            ]);
        }
        $dados = [                                                              //pega os dados vindos do Post
            'nome' => $this->request->getPost('nome'),
            'endereco' => $this->request->getPost('endereco'),
            'fotopath' => $nomeImagem
        ];
        if (($dados['nome']==null) || ($dados['endereco']==null)){              //trata nome ou endereço NULL
            return view('msgok', [
                'msg' => 'É preciso preencher todos campos.',
                'pagina' => base_url('alunocriar'),
            ]);
        }
        if( $this->alunosModel->save($dados) == true ) {                        //tenta inserir e retorna mensagens de sucesso ou de erro
            return view('msgok', [
                'msg' => 'Aluno '.$dados['nome'].' cadastrado com sucesso',
                'pagina' => base_url('alunos'),
            ]);               
        } else {
            unlink('imagens/'.$nomeImagem);
            return view('msgfail', [
                'msg' => $this->alunosModel->errors(),
                'pagina' => base_url('alunocriar'),
            ]); 
        }
    }
    
    public function edit($id){                                                  //chama a view para editar o aluno
        return view('alunoeditar',[
            'aluno' => $this->alunosModel->find($id)
        ]);
    }
    
    public function update(){
        $id = $this->request->getPost('id');
        $imagem = $this->request->getFile('fotopath');                          //trata a imagem
        if ($imagem->isValid() && ! $imagem->hasMoved()) {
            
            $nomeImagem = $imagem->getRandomName();
            $imagem->move('imagens/', $nomeImagem);
            $foto = \Config\Services::image();
            $foto->withFile('imagens/'.$nomeImagem);
            $foto->fit(200, 200, 'center');
            $foto->save('imagens/'.$nomeImagem);
        } else {
            $nomeImagem = NULL;
        }
        if ($nomeImagem != NULL) {                                              //trata o caso de a imagem não ser alterada
            $data = [
                'nome'     => $this->request->getPost('nome'),
                'endereco' => $this->request->getPost('endereco'),
                'fotopath'     => $nomeImagem
            ];
            $oldimage = $this->alunosModel->find($id)['fotopath'];
        } else {
            $data = [
                'nome'     => $this->request->getPost('nome'),
                'endereco' => $this->request->getPost('endereco'),
            ];
        }
        if( $this->alunosModel->update($id, $data)){                            //tenta fazer o update
            if ($nomeImagem != NULL){
            unlink('imagens/'.$oldimage);                                       //exclui a imagem antiga
            }
            return view('msgok', [
                'msg' => 'Alteração efetuada!',
                'pagina' => base_url('alunos'),
            ]); 
        } else {
            return view('msgfail', [
                'msg' => $this->alunosModel->errors(),
                'pagina' => base_url('alunoeditar').'/'.$id,
            ]); 
        }
        
    }
}