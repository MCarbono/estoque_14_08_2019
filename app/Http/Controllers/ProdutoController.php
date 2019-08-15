<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\Produto;
use DB;

class ProdutoController extends Controller
{
    //
    

    public function index(){

        $fornecedores = Fornecedor::all();
        return view('produtoForm',compact('fornecedores'));
    }


    public function store(Request $request){
    
    
        DB::beginTransaction();
        
        try{
        
            $produto = Produto::create($request->all());
            DB::commit();
    
            return back()->with('success', 'Produto cadastrado com sucesso');

        } catch(\Exception $e){
            DB::rollback();
            return back()->with('error', 'Erro no servidor');
        }
    }

    // public function update(){
    //     $produto = Produto::findOrFail($id);
    //     $fornecedor = Fornecedor::all();
    //     return view();

    // }

    public function listar(){
        $produtos = Produto::all();
        $fornecedor = Fornecedor::all();
        return view('listaProduto',compact('produtos', 'fornecedor'));
    }

    


}
