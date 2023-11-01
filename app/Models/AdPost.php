<?php

namespace App\Models;

use App\Models\AdModel;
use App\Models\AdPostImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdPost extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function type(){
        return $this->belongsTo(PostType::class);
    }

    public function models(){
        return $this->belongsTo(AdModel::class , 'model', 'id');
    }
    public function postType()
    {
        return $this->belongsTo(PostType::class, 'type_id');
    }

    public function postImages(){
        return $this->belongsTo(AdPostImage::class,'id','post_id');
    }

}
