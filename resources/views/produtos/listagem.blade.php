@extends('layout.principal')

@section('conteudo')
    <h1>Listagem de produtos</h1>
    @if(empty($produtos))
    <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
    </div>
    @else

    <table class="table">
      @foreach ($produtos as $produto)
      <tr class="{{ $produto->quantidade <=1 ? 'danger' : 'info'}}">
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->valor }}</td>
        <td>{{ $produto->descricao }}</td>
        <td>{{ $produto->quantidade }}</td>
        <td><a href="produtos/exibir/{{ $produto->id }}"><span class="glyphicon glyphicon-search"></span></a></td>
      </tr>
      @endforeach
    </table>
    </div>
    @endif
@stop