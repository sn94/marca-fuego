<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriasController extends Controller
{
    public function index()
    {

        $categories =   Category::get();

        return   view('admin.categories.index', compact('categories'));
    }



    public function create()
    {


        return   view('admin.categories.create');
    }


    public  function store(Request  $request)
    {


        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('categories_u');
            if ($path)
                $request->merge(['image' =>  $path]);
        }

        Category::create($request->input());

        return redirect()->route('categorias')->with('success', 'CREASTE UNA CATEGORIA NUEVA!');
    }


    public function edit(Category  $category)
    {


        return   view('admin.categories.edit', compact('category'));
    }

    public  function update(Request  $request, Category $category)
    {


        if ($request->hasFile('image')) {

          try{
            if(  $category->image)
            Storage::delete($category->image);
          }catch(Exception $e){

          }

            $path = $request->file('image')->store('categories_u');
            if ($path)
                $request->merge(['image' =>  $path]);
        }

        $category->fill($request->input());
        $category->save();

        return redirect()->route('categorias')->with('success', 'CATEGORIA FUE ACTUALIZADA!');
    }





    public function delete(Category  $category)
    {


        return   view('admin.categories.delete', compact('category'));
    }

    public  function destroy(Request  $request, Category $category)
    {


        Storage::delete($category->image);

       $category->delete();
        return redirect()->route('categorias')->with('success', 'CATEGORIA FUE BORRADA!');
    }
}
