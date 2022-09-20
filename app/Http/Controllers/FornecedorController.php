<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {

        $fornecedores = [
          0 => [
          'nome'=>'Fornecedor 1',  
          'status'=>'S',
          'cnpj'=> '0 ',
          'ddd' => '', //saopaulo
          'telefone' => '12988354517'
          ],

          1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'ddd' => '85', //fortaleza
            'telefone' => '0000-0000'

          ],

          2 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'cnpj' => null,
            'ddd' => '32', //juiz de fora
            'telefone' => '0000-0000',
          ]
        ];

       echo isset($fornecedores[0]['cpnj']) ? 'CNPJ não informado' : 'CNPJ informado';  
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}   
