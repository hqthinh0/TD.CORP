<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Image;

class SubCategoryController extends Controller
{
    
     public function SubCategoryPageAll(){
        $subcategory = Subcategory::latest()->get();
       return view('backend.sub_category.sub_category_all', compact('subcategory'));
    }


     public function SubCategoryPageAdd(){
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('backend.sub_category.add_subcategory',compact('categories'));
    }

    public function SubCategoryPageUpdate(Request $request){

           if($request->file('subcategory_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('subcategory_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('subcategory_images'));
         

                $img->toJpeg()->save(base_path('public/img/construction/'.$name_gen));
                $save_url = "img/construction/".$name_gen;

              Subcategory::insert([
                    'category_id' => $request->category_id,
                    'subcategory_title' => $request->subcategory_title,
                    'subcategory_name' => $request->subcategory_name,
                    'subcategory_building' => $request->subcategory_building,
                    'subcategory_area' => $request->subcategory_area,
                    'description' => $request->description,
                    'subcategory_map' => $request->subcategory_map,
                    'subcategory_slug' => strtolower(str_replace('','-',$request->subcategory_name)),
                    'subcategory_images' => $save_url,
                     
                ]);

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('subcategory.page.all')->with($notification);
            }
          
    }


    
      public function SubCategoryPageEdit($id){
        $categories = Category::orderBy('category_name','ASC')->get();
        $editSubcategory = Subcategory::findOrFail($id);

        return view('backend.sub_category.edit_subcategory',compact('categories','editSubcategory'));
    }//end method

    

    public function SubCategoryPageUpdateEdit(Request $request){

        $sub_id = $request->id;

             if($request->file('subcategory_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('subcategory_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('subcategory_images'));
         
                $img->toJpeg()->save(base_path('public/img/construction/'.$name_gen));
                $save_url = "img/construction/".$name_gen;


                $subcategory = Subcategory::findOrFail($sub_id);
            
                $subcategory->category_id = $request->category_id;
                $subcategory->subcategory_name = $request->subcategory_name;
                $subcategory->subcategory_title = $request->subcategory_title;
                $subcategory->subcategory_area = $request->subcategory_area;
                $subcategory->subcategory_map = $request->subcategory_map;
                $subcategory->description = $request->description;
                $subcategory->subcategory_building = $request->subcategory_building;
                $subcategory->subcategory_slug = strtolower(str_replace('','-',$request->subcategory_name));
                $subcategory->subcategory_images = $save_url;
                $subcategory->updated_at = Carbon::now();
                $subcategory->save();


                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('subcategory.page.all')->with($notification);
         }
          

    }//end method

     public function SubCategoryPageDelete($id){
 
         Subcategory::findOrFail($id)->delete();
          $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

          return redirect()->back()->with($notification);
    }

       public function ConstructionPage(){
         $Showconstruction = Subcategory::latest()->get();
         return view('frontend.construction',compact('Showconstruction'));
    }//

    public function ConstructionPageDetail($name){
      $name = str_replace('-', ' ', $name);
      $ShowdetailPage = Subcategory::where('subcategory_title', $name)->firstOrFail();
      return view('frontend.construction.detail',compact('ShowdetailPage'));
    }
}


