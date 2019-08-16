@extends('principal')

@section('conteudo')
    <form action="{{url(isset($produto) ? '/produtoForm/'.$produto->id : '/produtoForm')}}" method="POST" >
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{old('nome', isset($produto) ? $produto->nome : '')}}">
            {{$errors->first('nome')}}
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="Descrição" value="{{old('descricao',isset($produto) ? $produto->descricao : '')}}">
            {{$errors->first('descricao')}}
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="preco" placeholder="Preço" value="{{old('preco', isset($produto) ? $produto->preco : '')}}">
            {{$errors->first('preco')}}
        </div>

        <select name="fornecedor_id">
            @foreach ($fornecedores as $fornecedor)
                <option {{isset($produto) && $produto->fornecedor_id == $fornecedor->id ? 'selected' : ''}} value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
            @endforeach
        </select>
       
        <button type="submit">Enviar</button>
    </form>

@stop
