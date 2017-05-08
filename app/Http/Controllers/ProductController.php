<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProductByNameCategory($name)
    {
        //return utf8_decode(Product::where('name', '=', $name)->get());
        $products = DB::select("SELECT P.*, LOWER(REPLACE(unaccent(P.name), ' ', '-')) AS product_alias, LOWER(REPLACE(unaccent(C.name), ' ', '-')) AS category_alias FROM Products P INNER JOIN Categories C ON P.ID_CATEGORY=C.ID_CATEGORY WHERE LOWER(REPLACE(unaccent(C.name), ' ', '-')) = ?", [$name]);
        return $products;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProductDetail($category_name, $product_name)
    {
        //return utf8_decode(Product::where('id_product', '=', $id)->get());
        $productDetail = DB::select("SELECT P.*, LOWER(REPLACE(unaccent(P.name), ' ', '-')) AS product_alias, LOWER(REPLACE(unaccent(C.name), ' ', '-')) AS category_alias FROM Products P INNER JOIN Categories C ON P.ID_CATEGORY=C.ID_CATEGORY WHERE LOWER(REPLACE(unaccent(C.name), ' ', '-')) = ? AND LOWER(REPLACE(unaccent(P.name), ' ', '-')) = ?", [$category_name, $product_name]);
        return $productDetail;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
