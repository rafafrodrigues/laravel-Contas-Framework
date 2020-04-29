<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use Illuminate\Support\Facades\DB;

use App\ContasPagar;

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

        //usando o banco
    	//DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)', array($descricao, $valor));

        //usando Model
        $contas_pagar = new ContasPagar();
        $contas_pagar->descricao = $descricao;
        $contas_pagar->valor = $valor;
        $contas_pagar->save();

    	return redirect()->action('ContasPagarController@listar');
    }
}
