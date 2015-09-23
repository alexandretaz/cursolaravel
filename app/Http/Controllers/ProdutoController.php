<?php
	namespace estoque\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use Request;

	class ProdutoController extends Controller {

		public function listar() {

			$html = "<h1> Listagem de Produtos</h1>";

			$html.="<ul>";

			$produtos = DB::select("select * from produtos");


			return view("produtos/listagem")->with("produtos", $produtos);

		}

		public function exibir() {
			$id = Request::route('id', 1);
			$produto = DB::select("select * from produtos where id = ?", [$id]);
			return view("produtos/detalhes")->with("produto", $produto[0]);
		}

		public function criar() {
			return view("produtos/formulario");
		}
		public function adcionar() {
			$nome = Request::input('nome');
  			$valor = Request::input('valor');
  			$descricao = Request::input('descricao');
  			$quantidade = Request::input('quantidade');

			DB::insert('insert into produtos (nome, valor, descricao, quantidade) 
    			values (?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));

  			return view('produto.adicionado')->with('nome', $nome);
		}

	}