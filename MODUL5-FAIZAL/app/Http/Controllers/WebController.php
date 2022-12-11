<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $showrooms=Showroom::orderBy('id','desc')->get();
        return view('product.index', compact('showrooms'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $imgName = $request->img_pth->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);

        Showroom::create([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName
        ]);

        return redirect('/product');
    }

    public function edit($id){
        $product = Showroom::find($id);

        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Showroom::find($id);

        $imgName = $product->img_path;
        if ($request->img_path){
            $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        Showroom::find($id)->update([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName
        ]);

        return redirect('/product');

    }

    public function destroy($id){
        Showroom::find($id)->delete();
    }
}
