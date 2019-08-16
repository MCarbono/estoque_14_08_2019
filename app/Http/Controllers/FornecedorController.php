<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use DB;
class FornecedorController extends Controller {

    public function index(){
        $fornecedor = Fornecedor::all();
        return view('fornecedor', compact('fornecedor'));
    }

    public function create(){
       return view('fornecedorForm');
    }

    public function store(Request $request){

        DB::beginTransaction();
        
        try{
        
            $fornecedor = Fornecedor::create($request->all());
            
            DB::commit();
    
            return redirect()->action('FornecedorController@index');

        } catch(\Exception $e){
            DB::rollback();
            return back()->with('error', 'Erro no servidor');
        }
    }

    public function destroy($id){
        DB::beginTransaction();

        try {
            $fornecedor = Fornecedor::findOrFail($id);
            $fornecedor->delete();
            DB::commit();

            return redirect()->action('FornecedorController@index');
        } catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }

    public function edit($id){
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedorForm', compact('fornecedor'));
    }

    public function update(Request $request, $id){
        DB::beginTransaction();

        try {
            $fornecedor = Fornecedor::findOrFail($id);
            $fornecedor->update($request->all());
            DB::commit();

            return redirect()->action('FornecedorController@index');
        } catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }
}

