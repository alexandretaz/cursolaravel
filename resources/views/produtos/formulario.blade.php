@extends('layout.principal')

@section('conteudo')
    <h1>Adicionar novo produto</h1>
    <form action="/produtos/adicionar" method="post">
      <div class="form-group">
        <label>Nome:
          <input type="text" name="nome" class="form-control" />
        </label>
      </div>
      <div class="form-group">
      <label>Valor:
        <input type="text" name="valor"  class="form-control" />
      </label>
      </div>
      <div class="form-group">
      <label>Descrição:
        <input type="text" name="descricao"  class="form-control" />
      </label>
      </div>
      <div class="form-group">
      <label>Estoque:
        <input type="text" name="quantidade"  class="form-control" />
      </label
      <input type="submit" value="Salvar" />
      <input type="hidden" 
  name="_token" value="{{{ csrf_token() }}}" />
      </div>
    </form>
@stop