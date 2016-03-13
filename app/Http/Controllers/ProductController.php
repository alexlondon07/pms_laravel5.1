<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CreateProductRequest;

use Illuminate\Http\Request;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Product::paginate();
		$items->setPath('product');
		return View::make('admin.product.view_product', compact('items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$product = new Product;
		$show = false;
		return View::make('admin.product.new_edit_product', compact('product', 'show'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 public function store(CreateProductRequest $request)
	{
		$product = Product::create($request->all());
		return Redirect::to('admin/product')->with('success_message', 'Registro guardado!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::findOrFail($id);
		$show = true;
		return View::make('admin.product.new_edit_product', compact('product', 'show'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::findOrFail($id);
		$show = false;
		return View::make('admin.product.new_edit_product', compact('product', 'show'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateProductRequest $request, $id)
	{
		$product = Product::findOrFail($id);
		$product->fill($request->all());
		$product->save();
		return Redirect::to('admin/product')->with('success_message', 'Registro actualizado!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = Product::findOrFail($id);
		$product->delete();
		return Redirect::to('admin/product')->with('success_message', 'El registro ha sido borrado.')->withInput();
	}

}
