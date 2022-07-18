<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lote;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LotsController extends Controller
{
    public  function index()
    {

        $lots = Lote::paginate(6);
        return view('admin.lots.index', compact('lots'));
    }




    public function create()
    {

        $lot =  Lote::where('draft', true)->first() ? Lote::where('draft', true)->first()  :  new Lote();
        $lot->save();

        $categories = Category::get();
        return   view('admin.lots.edit', compact('categories', 'lot'));
    }


    public  function store(Request  $request,)
    {


        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('categories_u');
            if ($path)
                $request->merge(['image' =>  $path]);
        }

        Category::create($request->input());

        return redirect()->route('lotes')->with('success', 'CREASTE UN LOTE NUEVO!');
    }


    public function edit( Lote  $lot)
    {



        $categories = Category::get();

        return   view('admin.lots.edit', compact('lot', 'categories'));
    }

    public  function update(Request  $request, Lote $lot)
    {


        if ($request->hasFile('front_photo')) {

            try {
                if($lot->front_photo)
                 Storage::delete($lot->front_photo);
            } catch (Exception $e) {
            }

            $path = $request->file('front_photo')->store('lots_u');
            if ($path)
                $request->merge(['front_photo' =>  $path]);
        }

        $request->merge(['draft' => false]);
        $lot->fill($request->input());
        $lot->save();

        return redirect()->route('lotes')->with('success', 'LOTE FUE ACTUALIZADO!');
    }





    public function delete( Lote  $lot)
    {


        return   view('admin.lots.delete', compact('lot'));
    }

    public  function destroy(Request  $request, Lote $lot)
    {


        Storage::delete($lot->front_photo);

        $lot->delete();
        return redirect()->route('lotes')->with('success', 'LOTE FUE BORRADO!');
    }
}
