<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
             0 =>  [
            'nome'=>'Fornecedoor 1',
            'status' =>'N', 
            'cnpj' => '00.000/000-00',
            'ddd'=> '11',
            'telefone' => '0000-0000'],

         1=> [
            'nome'=>'Fornecedoor 2',
            'status' =>'S', 
            'cnpj' => null,
            'ddd'=> '85',
            'telefone' => '0000-0000'
         ],
         2=>[
            'nome'=>'Fornecedoor 2',
            'status' =>'S', 
            'cnpj' => null,
            'ddd'=> '32',
            'telefone' => '0000-0000'
         ]


       
];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
