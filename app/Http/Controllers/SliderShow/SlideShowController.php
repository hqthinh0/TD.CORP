<?php

namespace App\Http\Controllers\SliderShow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderShow;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;


class SlideShowController extends Controller
{
    //

    public function SliderShow(){

     return view('admin.home_slidershow.home_slidershow_all');

    }


    // thêm
    public function StoreSliderShow(Request $request){

        $image = $request->file('multi_Images');

        foreach($image as $multi_Images){
                 $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$multi_Images->getClientOriginalExtension();
                $img = $manager->read($multi_Images);

                $img->toJpeg()->save(base_path('public/img/slideshow/'.$name_gen));
                $save_url = "img/slideshow/".$name_gen;

              SliderShow::insert([
                    'multi_Images' => $save_url,
                    'created_at' => Carbon::now(),
                     
                ]);
                } // end foreach

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->back()->with($notification);
       
    }

    
    public function SliderShowAll(){
        $allImages = SliderShow::all();
        return view('admin.home_slidershow.all_slideshow',compact('allImages'));
    }




    public function SliderShowEdit($id){

        $EditImages = SliderShow::findOrFail($id);
        return view('admin.home_slidershow.edit_slideshow_images',compact('EditImages'));
    }//end method



    public function UpdateSliderShow(Request $request){

        $updateImages = $request->id;

        if($request->file('multi_Images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('multi_Images')->getClientOriginalExtension();
                $img = $manager->read($request->file('multi_Images'));

                $img->toJpeg()->save(base_path('public/img/slideshow/'.$name_gen));
                $save_url = "img/slideshow/".$name_gen;

             $slideshow = SliderShow::findOrFail($updateImages);
                $slideshow->multi_Images = $save_url;
                $slideshow->updated_at = Carbon::now();
                $slideshow->save();

                //cách 2
        //         SliderShow::findOrFail($updateImages)->forceFill([
        //     'multi_Images' => $save_url,
        //     'updated_at' => Carbon::now(),
        // ])->save();

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('slideshow.route.all')->with($notification);
          }

    }//end method


    public function SliderShowDelete($id){
         $DeleteImages = SliderShow::findOrFail($id);
         $img = $DeleteImages->multi_Images;
         unlink($img);

         SliderShow::findOrFail($id)->delete();
          $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

        return redirect()->back()->with($notification);
    }
}
