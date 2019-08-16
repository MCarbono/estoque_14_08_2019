@extends('principal')

@section('conteudo')
<table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th colspan="2">Ações</th>
            <tr>
        </thead>
        <tbody>
            @foreach($fornecedor as $f)
            <tr>
                 <td>{{$f->nome}}</td>
                 <td>{{$f->cnpj}}</td>
                 <td>{{$f->email}}</td>    
                 <td><a href="{{action('FornecedorController@destroy', $f->id)}}"><i class="material-icons">delete</i></a></td>
                 <td><a href="{{action('FornecedorController@edit', $f->id)}}"><i class="material-icons">edit</i></a></td>
             </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="{{action('FornecedorController@create')}}">Cadastrar fornecedor</a>
@stop