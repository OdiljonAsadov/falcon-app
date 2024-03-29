<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\SetLocale;
use App\Category;
use App\Information;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    public function mainPage()
    {
        $categories = Category::all();
        $locales = config('app.available_locales');
        $locale = app()->getLocale();

        return view('front.index', compact('categories', 'locales'));
    }

    public function categoryPage()
    {
        $informations = Information::all();
        $locales = app()->getLocale();

        return view('front.catigoryPage', compact('informations', 'locales'));
    }
    public function aboutPage()
    {
        $informations = Information::all();
        $locales = app()->getLocale();

        return view('front.aboutPage', compact('informations', 'locales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category;
        $categories->title_uz = $request->title_uz;
        $categories->title_ru = $request->title_ru;
        $categories->save();
        return redirect('/category');
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
        $categories = Category::where('id',$id)->get();
        return view('category.edit',compact('categories'));
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
        $categories = Category::find($id);
        $categories->title_uz = $request->title_uz;
        $categories->title_ru = $request->title_ru;
        $categories->save();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categories = Category::find($id);
       $categories -> delete();
       return redirect('/category');
    }
}
