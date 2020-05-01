<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use Illuminate\Support\Facades\DB;

use App\ContasPagar;

use Validator;

class ContasPagarController extends Controller
{
    public function listar() {
    	//$contas_pagar = DB::select('select * from contas_pagar');

    	//chamar método da class Model - all()
    	$contas_pagar = ContasPagar::all();
    	return view('listar')->with('contas_pagar', $contas_pagar);

    	//return var_dump($contas_pagar);

        /*   exemplo usado antes de criar a view listar.php
        $html = ''; 
    	foreach ($contas_pagar as $value) {
    		$html .= 'Descrição: ' .$value->descricao.'<br>';
    	}
    	return $html; */
    }

    public function cadastro() {
    	return view('cadastro');
    }

    public function salvar() {
    	$descricao = Request::input('descricao');
    	$valor = Request::input('valor');

        //criar validações antes de salvar no banco
        $validator = Validator::make(
            [
                'descricao' => $descricao,
                'valor' => $valor 
            ],
            [
                'descricao' => 'required|min:6', //determinar no mínimo 6 caracteres
                'valor' => 'required|numeric'
            ],
            [
                'required' => ':attribute é obrigatório!',
                'numeric' => ':attribute precisa ser numérico!'
            ]
        );

        if ($validator->fails()) { 
           return redirect()->action('ContasPagarController@cadastro')->withErrors($validator)->withInput();
        }

        //usando o banco
    	//DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)', array($descricao, $valor));

        //usando Model
        $contas_pagar = new ContasPagar();
        $contas_pagar->descricao = $descricao;
        $contas_pagar->valor = $valor;
        $contas_pagar->save();

    	return redirect()->action('ContasPagarController@listar')->withInput();
    }

    //recuperar informações do id para exibir na view para depois atualizar com o método update()
    public function editar($id) {
        $contas_pagar = ContasPagar::find($id);

        if (empty($contas_pagar)) {
            return 'Conta não existe!';
        } else {
            return view('editar')->with('contas_pagar', $contas_pagar);
        }
        
    }

    //salvar alteração no banco de dados
    public function update($id) {
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');

        $contas_pagar = ContasPagar::find($id);
        $contas_pagar->descricao = $descricao;
        $contas_pagar->valor = $valor;
        $contas_pagar->save();

        return redirect()->action('ContasPagarController@listar')->withInput();        
    }

    public function deletar($id) {
        $contas_pagar = ContasPagar::find($id);
        $contas_pagar->delete();

        return redirect()->action('ContasPagarController@listar'); 
    }
}
