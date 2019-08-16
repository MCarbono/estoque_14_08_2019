<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Fornecedor;
use App\Produto;
use DB;

class ProdutoController extends Controller {
    
    public function index(){

        $produtos = Produto::all();
        $fornecedor = Fornecedor::all();
        return view('produto',compact('produtos', 'fornecedor'));
    }

    public function create(){
        $fornecedores = Fornecedor::all();
        return view('produtoForm', compact('fornecedores'));
    }

    public function store(produtoRequest $request){
    
    
        DB::beginTransaction();
        
        try{
        
            $produto = Produto::create($request->all());
            DB::commit();
    
            return redirect()->action('ProdutoController@index');

        } catch(\Exception $e){
            DB::rollback();
            return back()->with('error', 'Erro no servidor');
        }
    }

    public function destroy($id){
        DB::beginTransaction();

        try {
            $produto = Produto::findOrFail($id);
            $produto->delete();
            DB::commit();

            return redirect()->action('ProdutoController@index');
        } catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }

    public function edit($id){
        $fornecedores = Fornecedor::all();
        $produto = Produto::findOrFail($id);
        return view('produtoForm', compact('fornecedores', 'produto'));
    }

    public function update(produtoRequest $request, $id){
        DB::beginTransaction();

        try {
            $produto = Produto::findOrFail($id);
            $produto->update($request->all());
            DB::commit();
            return redirect()->action('ProdutoController@index');

        } catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }
}
