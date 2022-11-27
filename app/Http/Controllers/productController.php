<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = product::get();
        if(($request->get('name')== null || $request->get('category')== null || $request->get('price')== null ) && $request->get('id')== null&& $request->get('update')== null) {


            return view('products',compact('products'));
        }
        if (($request->get('update')== '0') ){

            $updateProduct = product::find($request->get('id'));
            $updateProduct->name = $request->get('updatedname');
            $updateProduct->category_id = $request->get('updatedcategory');
            $updateProduct->price = $request->get('updatedprice');
            $updateProduct->save();
            return redirect('/');

        }
        if (($request->get('update')== '1') ){

            $updateProduct = product::find($request->get('id'));
            return view('products',compact('products','updateProduct'));

        }
        if(!($request->get('id')== null) ) {


            $product = product::find($request->get('id'));
            $product->delete();
            return redirect('/');
        }
        $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'price' => 'required'

        ]);


        $product = new product ;
        $product->name = $request->get('name');
        $product->category_id = $request->get('category');
        $product->price = $request->get('price');
        $product->save();
        return redirect('/');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'price' => 'required'

        ]);
        $product = new product ([
            'name' => $request->get('name'),
            'category' => $request->get('category'),
            'price' => $request->get('price')
        ]);
        $product->save();
        return view('productadd');
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
