<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContasPagarController extends Controller
{
    public function listar() {
    	$contas_pagar = DB::select('select * from contas_pagar');
    	//return var_dump($contas_pagar);

        $html = ''; 
    	foreach ($contas_pagar as $value) {
    		$html .= 'Descrição: ' .$value->descricao.'<br>';
    	}
    	return $html;
    }
}
