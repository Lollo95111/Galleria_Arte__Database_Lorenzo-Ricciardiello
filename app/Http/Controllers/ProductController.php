<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   public function welcome() {
        return view('welcome');
    }



    public function index()
    {
        $products = Product::oldest()->get();
      return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('product.create');
       }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'img'=>$request->file('img')->store('public/product')
            ]);

     return redirect()->route('product.create')->with('message','Prodotto aggiunto con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
            return view('product.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product->update([

        $product->name = $request->name,

        $product->price = $request->price,

        ]);

        if($request->img){

            $product->update ([

                $product->img = $request->file('img')->store('public/product')

            ]);
        }
    return redirect()->route('product.index')->with('message',"il prodotto $product->name è stato modificato correttamente!");

        }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product){

        $product->delete();

        return redirect()->route('admin.dashboard');

        }

}
