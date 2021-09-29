<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Information::all();
        return view('information.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('information.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new Information;
        $info->title_uz = $request->title_uz;
        $info->title_ru = $request->title_ru;
        

        if ($request->image_1 != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image_1->extension());
            $request->image_1->move(public_path('uploads/'), $imageName);
            $info->image_1 = $imageName;
          }

        if ($request->image_2 != null) {
            $imageName2 = asset("image_2" . "/" . time() . "." . $request->image_2->extension());
            $request->image_2->move(public_path('image_2/'), $imageName2);
            $info->image_2 = $imageName2;
          }
        if ($request->image_3 != null) {
            $imageName3 = asset("image_3" . "/" . time() . "." . $request->image_3->extension());
            $request->image_3->move(public_path('image_3/'), $imageName3);
            $info->image_3 = $imageName3;
            } 
        
        $info->summernote_uz = $request->summernote_uz;
        $info->summernote_ru = $request->summernote_ru;
        
        $info->save();
        return redirect('information');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Information::where('id',$id)->get();
        return view('show',compact('categories'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Information::where('id', $id)->get();
        return view('information.edit',compact('info'));
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
        $info = Information::find($id);
        $info->title_uz = $request->title_uz;
        $info->title_ru = $request->title_ru;
        

        if ($request->image_1 != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image_1->extension());
            $request->image_1->move(public_path('uploads/'), $imageName);
            $info->image_1 = $imageName;
          }

          if ($request->image_2 != null) {
            $imageName2 = asset("image_2" . "/" . time() . "." . $request->image_2->extension());
            $request->image_2->move(public_path('image_2/'), $imageName2);
            $info->image_2 = $imageName2;
          }
        if ($request->image_3 != null) {
            $imageName3 = asset("image_3" . "/" . time() . "." . $request->image_3->extension());
            $request->image_3->move(public_path('image_3/'), $imageName3);
            $info->image_3 = $imageName3;
            } 
        
        $info->summernote_uz = $request->summernote_uz;
        $info->summernote_ru = $request->summernote_ru;
        
        $info->save();
        return redirect('information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Information::find($id);
        $info->delete();
        return redirect('/information');
    }
}
