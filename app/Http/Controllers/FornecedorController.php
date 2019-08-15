<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use DB;
class FornecedorController extends Controller
{
    public function create(){
       return view('fornecedorForm');
    }

    public function store(Request $request){

        DB::beginTransaction();
        
        try{
        
            $fornecedor = Fornecedor::create($request->all());
            
            DB::commit();
    
            return back()->with('success', 'Fornecedor cadastrado com sucesso');

        } catch(\Exception $e){
            DB::rollback();
            return back()->with('error', 'Erro no servidor');
        }
    }

}

