<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['dataProduk'] = Product::orderBy('created_at', 'DESC')->get();
        $data['dataTrip'] = Trip::orderBy('created_at', 'DESC')->get();
        return view('home',$data);
    }
    
    public function descProduct($id)
    {
        //
        $data['dataProduk'] = Product::orderBy('created_at', 'DESC')->get();
        $decrypted = Crypt::decryptString($id);
        $data['desc'] = Product::find($decrypted);
        // dd($data);
        if(!$data['desc']){
            return redirect()->route('home')->with([
                    'error' => 'Data Not Found!'
                ]);
        }
        return view('pages.product',$data);
    }

    public function descTrip($id)
    {
        //
        $decrypted = Crypt::decryptString($id);
        $data['desc'] = Trip::find($decrypted);
        // dd($data);
        if(!$data['desc']){
            return redirect()->route('home')->with([
                    'error' => 'Data Not Found!'
                ]);
        }
        return view('pages.product',$data);
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
