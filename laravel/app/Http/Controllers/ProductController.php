<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProduct = Product::all()->sortDesc();
        $tittle = 'danh sach sna pham'; 
        return view('admin.products.listPro', compact('listProduct' , 'tittle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'day la form tao san pham';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'đay là chi tiết san phẩm '. $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('id của sản phẩm muốn xem '. $id);
        return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
