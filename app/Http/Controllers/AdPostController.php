<?php

namespace App\Http\Controllers;

use App\Models\AdModel;
use App\Models\AdPost;
use App\Models\AdPostImage;
use App\Models\Category;
use App\Models\City;
use App\Models\PostType;
use Illuminate\Http\Request;

class AdPostController extends BaseController
{

    public function adminIndex(){

        $data['page_slug'] = 'ad-post';
        $data['post'] = AdPost::withTrashed()->get();
        return view('panel.adpost.index' , $data);
    }

    public function adminCreate(){

        $data['page_slug'] = 'ad-post';
        $data['category'] = Category::get();
        $data['type'] = PostType::get();

        $data['models'] = AdModel::get();
        $data['city'] = City::get();
        return view('panel.adpost.create' , $data);
    }

    public function adpostStatus($id){

        $data = AdPost::where('id',$id)->first();
        return response()->json($data);

    }

    public function adpostapprovalUpdate(Request $request)
    {
        $data = AdPost::find($request->id)->update([
            'admin_apporval' => $request->approval,
            'status' => ($request->approval == 'approved') ? 'active' : 'unactive',
        ]);
        if($data){
            return redirect('/admin/adpost')->with(['success' => 'Ad Post approval status updated successfully']);
        }

    }

    public function adpoststatusUpdate(Request $request)
    {
        $data = AdPost::find($request->id)->update([
            'status' => $request->status,
        ]);
        if($data){
            if(auth()->user()->hasrole('customer')){
                return redirect('/ad-post')->with(['success' => 'Ad Post status updated successfully']);
            }else{
                return redirect('/admin/adpost')->with(['success' => 'Ad Post status updated successfully']);
            }
        }

    }

    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['post'] = AdPost::where('user_id', auth()->user()->id)->get();
        return view('panel.adpost.index' , $data);
    }

    public function create(){
        $data['page_slug'] = 'ad-post';
        $data['category'] = Category::get();
        $data['type'] = PostType::get();

        $data['models'] = AdModel::get();
        $data['city'] = City::get();
        return view('panel.adpost.create' , $data);
    }

    public function store(Request $request){
        // dd($request->All());
        if($request->file('company_logo')){
            $file= $request->file('company_logo');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/company/logo'), $filename);
            $compnay_logo = $filename;
        }

        if($request->file('feature_image')){
            $file= $request->file('feature_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/adpost/features/image'), $filename);
            $feature_image = $filename;
        }

        $adpost = AdPost::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
            'model' => $request->model,
            'age' => $request->age,
            'driver' => $request->driver,
            'contactby' => json_encode($request->contactMethod),
            'title' => $request->title,
            'city_id' => $request->city,
            'area_name' => $request->area_name,
            'price_per_day'=>$request->price_per_day,
            'price_per_week'=>$request->price_per_week,
            'price_per_month'=>$request->price_per_month,
            'type_id' => $request->type,
            'description' => $request->description,
            'feature_image' => $feature_image ?? '',
            'company_name' => $request->company_name,
            'compnay_logo' => $compnay_logo ?? '',
        ]);
        if($adpost){

            if($request->file('images')){
                foreach ($request->images as $imagefile) {
                    $file= $imagefile;
                    $filename= $file->getClientOriginalName();
                    $file-> move(public_path('public/adpost/images'), $filename);
                    $images = $filename;
                    $adpostImages = AdPostImage::create([
                        'post_id' => $adpost->id,
                        'images' => $images
                    ]);
                }
                return redirect('/ad-post')->with(['success' => 'Post is successfully created']);
            }

        }
    }

    public function edit($id){

        $data['adpost'] = AdPost::find($id);
        $data['page_slug'] = 'ad-post';
        $data['category'] = Category::get();
        $data['type'] = PostType::get();

        $data['models'] = AdModel::get();
        $data['city'] = City::get();
        return view('panel.adpost.edit', $data);
    }

    public function update(Request $request){
        // dd($request->all());
        // $category = Category::where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'status' => $request->status
        // ]);
        // if($category){
        //     return redirect()->back();
        // }
        if($request->file('company_logo')){
            $file= $request->file('company_logo');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/company/logo'), $filename);
            $compnay_logo = $filename;
        }

        if($request->file('feature_image')){
            $file= $request->file('feature_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/adpost/features/image'), $filename);
            $feature_image = $filename;
        }
        

        $adpost = AdPost::find($request->id)->update([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
            'model' => $request->model,
            'age' => $request->age,
            'driver' => $request->driver,
            'contactby' => json_encode($request->contactMethod),
            'title' => $request->title,
            'city_id' => $request->city,
            'area_name' => $request->area_name,
            'price_per_day'=>$request->price_per_day,
            'price_per_week'=>$request->price_per_week,
            'price_per_month'=>$request->price_per_month,
            'type_id' => $request->type,
            'description' => $request->description,
            'feature_image' => $feature_image ?? '',
            'company_name' => $request->company_name,
            'compnay_logo' => $compnay_logo ?? '',
        ]);
        
        if($adpost){

            if($request->file('images')){
                foreach ($request->images as $imagefile) {
                    $file= $imagefile;
                    $filename= $file->getClientOriginalName();
                    $file-> move(public_path('public/adpost/images'), $filename);
                    $images = $filename;
                    $adpostImages = AdPostImage::create([
                        'post_id' => $request->id,
                        'images' => $images
                    ]);
                }
            }
            return redirect('/ad-post')->with(['success' => 'Post is updated successfully']);

        }
    }

    public function destory($id){
        $post = AdPost::find($id);
        $post->delete();
        if($post){
            return redirect('/ad-post')->with(['success' => 'Ad Post delete successfully']);
        }
    }

}
