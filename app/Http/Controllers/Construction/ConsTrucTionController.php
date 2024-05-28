<?php

namespace App\Http\Controllers\Construction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Construction;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ConsTrucTionController extends Controller
{
    //
    public function CategoryConsTruction(){

        $cat = Construction::find(1);
        return view('admin.home_construction.home_construction_all', compact('cat'));
    } // end method


    public function UpdateConstruction(Request $request){
         $slide_id = $request->id;

          if($request->file('images_construction')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('images_construction')->getClientOriginalExtension();
                $img = $manager->read($request->file('images_construction'));
                $img = $img->resize(636,852);

                $img->toJpeg()->save(base_path('public/img/construction/'.$name_gen));
                $save_url = "img/construction/".$name_gen;

              Construction::insert([
                    'title_construction' => $request->title_construction,
                    'url_construction' => $request->url_construction,
                    'images_construction' => $save_url,
                     
                ]);

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->back()->with($notification);
          }
    }
}
