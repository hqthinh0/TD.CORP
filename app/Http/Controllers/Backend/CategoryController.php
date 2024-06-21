<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Image;

class CategoryController extends Controller
{
    public function CategoryPageAll(){
        $category = Category::latest()->get();
       return view('backend.category.category_all', compact('category'));
    }
    

    public function CategoryPageAdd(){
        return view('backend.category.add_category');

    }
    

    public function CategoryPageUpdate(Request $request){

          if($request->file('category_image')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('category_image')->getClientOriginalExtension();
                $img = $manager->read($request->file('category_image'));
    

                $img->toJpeg()->save(base_path('public/img/category/'.$name_gen));
                $save_url = "img/category/".$name_gen;

              Category::insert([
                    'category_name' => $request->category_name,
                    'category_slug' => strtolower(str_replace('','-',$request->category_name)),
                    'hastag' => $request->hastag,
                    'category_image' => $save_url,
                     
                ]);

                $notification = array('message' => 'Đã thêm thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('category.page.all')->with($notification);
          }
    }


      public function CategoryPageEdit($id){

        $Editcontent = Category::findOrFail($id);

        return view('backend.category.edit_category',compact('Editcontent'));
    }//end method

    public function CategoryPageUpdateEdit(Request $request){

        $updateImages = $request->id;

        if($request->file('category_image')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('category_image')->getClientOriginalExtension();
                $img = $manager->read($request->file('category_image'));

                $img->toJpeg()->save(base_path('public/img/category/'.$name_gen));
                $save_url = "img/category/".$name_gen;



                $category = Category::findOrFail($updateImages);
             
                $category->category_name = $request->category_name;
                $category->hastag = $request->hastag;
                $category->category_slug = strtolower(str_replace('','-',$request->category_name));
                $category->category_image = $save_url;

                $category->updated_at = Carbon::now();
                $category->save();


                $notification = array('message' => 'Đã cập nhật thành công',  'alert-type' => 'success'  ); 
                 return redirect()->route('category.page.all')->with($notification);
          }

    }//end method

    public function CategoryPageDelete($id){
         $Deleteconent = Category::findOrFail($id);
         $img = $Deleteconent->category_image;
         unlink($img);

         Category::findOrFail($id)->delete();
          $notification = array('message' => 'Đã xoá thành công',  'alert-type' => 'success'  ); 

          return redirect()->route('category.page.all')->with($notification);
    }

    
    
}


