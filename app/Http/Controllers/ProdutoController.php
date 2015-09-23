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

	}