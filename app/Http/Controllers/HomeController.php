<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\AdPost;
use App\Models\AdModel;
use App\Models\Category;
use App\Models\PostType;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Schema;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $users = AdPost::limit(6)->where('status', 'active')->where('admin_apporval', 'approved')->get();
        return view('home.index', compact('users'));
    }

    public function serach()
    {
        $searchTerm = request()->input('search');
        $posts = AdPost::where(function ($query) use ($searchTerm) {
            $query->where('title', 'LIKE', "%$searchTerm%")
                ->orWhereHas('type', function ($typeQuery) use ($searchTerm) {
                    $typeQuery->where('name', 'LIKE', "%$searchTerm%");
                })
                ->orWhere('description', 'LIKE', "%$searchTerm%");
        })->get();
        return view('home.search', compact('posts'));
    }



    public function cat()
    {
        $adpost = AdPost::limit(6)->where('status', 'active')->where('admin_apporval', 'approved')->get();
        return view('home.categorypage', compact('adpost'));
    }

    public function alladds($type)
    {
        $typeID = PostType::select('id')->where('name',$type)->first();
        $cities = City::get();
        $type = PostType::get();
        if (!$typeID){
            abort(404);
        }else{
            $post = AdPost::where('type_id', $typeID->id)->where('status', 'active')->where('admin_apporval', 'approved')->get();
            return view('home.categorypage', compact('post','cities','type'));
        }
    }

    public function show($id)
    {
        $id = decrypt($id);
        $post = AdPost::find($id);
        if (!$post){
            abort(404);
        }else{
            $post = AdPost::find($id);
             $relatedAds = AdPost::where('user_id', $post->user_id)
        ->where('id', '!=', $id)->where('status', 'active')->where('admin_apporval', 'approved') // Exclude the current post
        ->take(5) // Limit the number of related ads to display
        ->get();
            return view('home.showpage', compact('post', 'relatedAds'));
        }
    }

    public function postCategoryType($id)
    {
        $categoryBytype = Category::where('type_id', $id)->get();
        return response()->json($categoryBytype);
    }

    public function postModelType($id)
    {
        $ModelBytype = AdModel::where('type_id', $id)->get();
        return response()->json($ModelBytype);
    }
}
