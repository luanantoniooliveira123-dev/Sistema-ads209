<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
// Faz o include do ConteudoModel no arquivo ConteudoController
use App\Models\ConteudoModel;
class ConteudoController extends BaseController
{
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
return view('contato');
// 1. Instancia o Model
 $conteudoModel = new ConteudoModel();
 // 2. Busca o registro com Id = 1
 $dados['conteudo'] = $conteudoModel->find(2);
 // 3. Envia os dados para a view 'home'
 return view('home', $dados);
 }
}public function quem_sou(): string
{
return view('quem_sou');
}
}