<?php

use App\Models\Category;
use App\Models\PostType;

function menuType($type){
    $typeID = PostType::select('id')->where('name',$type)->first();
    $cat = Category::where('type_id',$typeID->id)->get();
    return $cat;
}

