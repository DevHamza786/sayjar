<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostType;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['category'] = Category::orderBy('id','desc')->get();
        $data['posttype'] = PostType::where('status','active')->get();
        return view('panel.category.index' , $data);
    }

    public function store(Request $request){

        $category = Category::create([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'status' => $request->status
        ]);
        if($category){
            return redirect()->back();
        }
    }

    public function edit($id){

        $data = Category::where('id',$id)->first();
        return response()->json($data);
    }

    public function update(Request $request){
        $category = Category::where('id',$request->id)->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'status' => $request->status
        ]);
        if($category){
            return redirect()->back();
        }
    }


    public function postType($id)
    {
        $categoryBytype = Category::where('type_id', $id)->get();
        return response()->json($categoryBytype);
    }
}
