<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCategories extends Model
{
    use HasFactory;
     protected $guared = [];


     //cẩn thận cái tên... hàm subcategory 
     public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
}
