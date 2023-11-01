<?php

namespace App\Models;

use App\Models\PostType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function types(){
        return $this->belongsTo(PostType::class,'type_id','id');
    }
}
