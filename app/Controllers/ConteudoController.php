<?php
//para alterar é so trocar o find para o id selecionado e colocar o return view na pasta. php desejada

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
// Em app/Controllers/BaseController.php (ou dentro do seu Controller específico)
protected $helpers = ['url'];
    public function index(): string
    {
        // 1. Instancia o Model
        $conteudoModel = new ConteudoModel();
        
        // 2. Busca o registro com Id = 1
        $dados['conteudo'] = $conteudoModel->find(1);
        
        // 3. Envia os dados para a view 'home'
        return view('home', $dados);
    }

    public function contato(): string
    {
        // 1. Instancia o Model
        $conteudoModel = new ConteudoModel();
        
        // 2. Busca o registro com Id = 1
        $dados['conteudo'] = $conteudoModel->find(9);
        
        // 3. Envia os dados para a view 'contato'
        return view('contato', $dados);
    }

    public function quem_sou(): string
    {
          // 1. Instancia o Model
        $conteudoModel = new ConteudoModel();
         // 2. Busca o registro com Id = 1
        $dados['conteudo'] = $conteudoModel->find(10);
        
        // 3. Envia os dados para a view 'contato'
        return view('quem_sou', $dados);
    }
      
}