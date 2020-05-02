<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use Illuminate\Support\Facades\DB;

use App\ContasReceber;

use Validator;

class ContasReceberController extends Controller
{
    public function listarReceber() {
    	$contas_receber = ContasReceber::all();
    	return view('listar-receber')->with('contas_receber', $contas_receber);
    }

    public function cadastroReceber() {
    	return view('cadastro-receber');
    }

    public function salvarReceber() {
    	$descricao_rec = Request::input('descricao_rec');
    	$cliente = Request::input('cliente');
    	$valor_rec = Request::input('valor_rec');

    	//criar validações antes de salvar no banco
        $validator = Validator::make(
            [
                'descricao_rec' => $descricao_rec,
                'valor_rec' => $valor_rec 
            ],
            [
                'descricao_rec' => 'required|min:6', //determinar no mínimo 6 caracteres
                'valor_rec' => 'required|numeric'
            ],
            [
                'required' => ':attribute é obrigatório!',
                'numeric' => ':attribute precisa ser numérico!'
            ]
        );

        if ($validator->fails()) { 
           return redirect()->action('ContasReceberController@cadastroReceber')->withErrors($validator)->withInput();
        }

    	$contas_receber = new ContasReceber();
    	$contas_receber->descricao_rec = $descricao_rec;
    	$contas_receber->cliente = $cliente;
    	$contas_receber->valor_rec = $valor_rec;
    	$contas_receber->save();

    	return redirect()->action('ContasReceberController@listarReceber')->withInput();
    }

    public function editarReceber($id) {
       $contas_receber = ContasReceber::find($id);

       if (empty($contas_receber)) {
        return 'Conta não existe!';
       } else {
        return view('editar-receber')->with('contas_receber', $contas_receber);
       }
    }

    public function deletarReceber($id) {
        $contas_receber = ContasReceber::find($id);
        $contas_receber->delete();

        return redirect()->action('ContasReceberController@listarReceber'); 
    }
}
