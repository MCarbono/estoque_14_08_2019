@extends('principal')

@section('conteudo')
    <form action="{{url(isset($fornecedor) ? $fornecedor->id : '/fornecedorForm')}}" method="POST">
    @csrf
    <div class="form-group">
            <input type="text" class="form-control" name="nome"  value="{{old('nome', isset($fornecedor) ? $fornecedor->nome : '')}}" placeholder="Nome" >
    </div>

    <div class="form-group">
            <input type="text" class="form-control" name="cnpj"  value="{{old('cnpj', isset($fornecedor) ? $fornecedor->cnpj : '')}}" placeholder="CNPJ">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="email"  value="{{old('email', isset($fornecedor) ? $fornecedor->email : '')}}"placeholder="Email">
    </div>
    <button type="submit">Enviar</button>
    </form>
@stop    
