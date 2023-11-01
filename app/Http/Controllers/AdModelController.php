<?php

namespace App\Http\Controllers;

use App\Models\AdModel;
use App\Models\PostType;
use Illuminate\Http\Request;

class AdModelController extends BaseController
{
    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['models'] = AdModel::orderBy('id','desc')->get();
        $data['posttype'] = PostType::orderBy('id','desc')->get();
        return view('panel.AdsModel.index' , $data);
    }

    public function store(Request $request){

        $models = AdModel::create([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'status' => $request->status
        ]);
        if($models){
            return redirect()->back();
        }
    }

    public function edit($id){

        $data = AdModel::where('id',$id)->first();
        return response()->json($data);
    }

    public function update(Request $request){
        $models = AdModel::where('id',$request->id)->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'status' => $request->status
        ]);
        if($models){
            return redirect()->back();
        }
    }


    public function postType($id)
    {
        $ModelBytype = AdModel::where('type_id', $id)->get();
        return response()->json($ModelBytype);
    }
}
