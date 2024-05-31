<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailCategories;
use App\Models\Subcategory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Image;

class DetailCategoryController extends Controller
{
    //

     public function DetailCategoryPageAll(){
        $detailcategory = DetailCategories::latest()->get();
       return view('backend.detail_category.detail_category_all', compact('detailcategory'));
    }

    public function DetailCategoryPageAdd(){
        $detailcategories = Subcategory::orderBy('subcategory_title','ASC')->get();
        return view('backend.detail_category.add_detailcategory',compact('detailcategories'));
    }

    public function DetailCategoryPageUpdate(Request $request){

              DetailCategories::insert([
                'subcategory_id' => $request->subcategory_id,
                'description' => $request->description,
            ]);

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('deailcategory.page.all')->with($notification);

    }

      
      public function DetailCategoryPageEdit($id){
        $subcategories = Subcategory::orderBy('subcategory_title','ASC')->get();
        $editDetailcategory = DetailCategories::findOrFail($id);

        return view('backend.detail_category.edit_detailcategory',compact('subcategories','editDetailcategory'));
    }//end method


    public function DetailCategoryPageUpdateEdit(Request $request){

        $sub_id = $request->id;


                $subcategory = DetailCategories::findOrFail($sub_id);
                $subcategory->subcategory_id = $request->subcategory_id;
                $subcategory->description = $request->description;
                $subcategory->updated_at = Carbon::now();
                $subcategory->save();


                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('detailcategory.page.all')->with($notification);
   
          

    }//end method

     public function DetailCategoryPageDelete($id){
 
         DetailCategories::findOrFail($id)->delete();
          $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

          return redirect()->back()->with($notification);
    }

    public function ShowDetailPage(){

        
         $ShowdetailPage = DetailCategories::latest()->get();
        return view('frontend.construction.detail',compact('ShowdetailPage'));
    }//

}
