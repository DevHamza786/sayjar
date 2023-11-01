<?php

namespace App\Http\Controllers;

use App\Models\PostType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['posttype'] = PostType::orderBy('id','desc')->get();
        return view('panel.posttype.index' , $data);
    }

    public function store(Request $request){

        $posttype = PostType::create([
            'name' => $request->name,
            'status' => $request->status
        ]);
        if($posttype){
            return redirect()->back();
        }
    }

    public function edit($id){

        $data = PostType::where('id',$id)->first();
        return response()->json($data);
    }

    public function update(Request $request){
        $posttype = PostType::where('id',$request->id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        if($posttype){
            return redirect()->back();
        }
    }
}
