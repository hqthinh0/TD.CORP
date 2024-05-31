<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estimate;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Image;

class EstimateController extends Controller
{
    public function EstimatePageAll(){
        $estimate = Estimate::latest()->get();
       return view('backend.estimatepage.estimatepage_all', compact('estimate'));
    }

    public function EstimatePageAdd(){
        return view('backend.estimatepage.estimatepage_add');

    }

     public function EstimatePageUpdate(Request $request){

           if($request->file('estimates_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('estimates_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('estimates_images'));
         

                $img->toJpeg()->save(base_path('public/img/estimate/'.$name_gen));
                $save_url = "img/estimate/".$name_gen;

              Estimate::insert([
                    'estimates_title' => $request->estimates_title,
                    'estimates_short' => $request->estimates_short,
                    'estimates_description' => $request->estimates_description,
                    'estimates_slug' => strtolower(str_replace('','-',$request->estimates_title)),
                    'estimates_images' => $save_url, 
                ]);

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                return redirect()->route('estimate.page.all')->with($notification);
            }
          
    }

    public function EstimatePageEdit($id){

        $EditEstimate = Estimate::findOrFail($id);

        return view('backend.estimatepage.edit_estimatepage',compact('EditEstimate'));
    }//end method


    public function EstimatePageUpdateEdit(Request $request){

        $updateImages = $request->id;

        if($request->file('estimates_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('estimates_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('estimates_images'));

                $img->toJpeg()->save(base_path('public/img/estimate/'.$name_gen));
                $save_url = "img/estimate/".$name_gen;



                $estimate = Estimate::findOrFail($updateImages);
             
                $estimate->estimates_title = $request->estimates_title;
                $estimate->estimates_short = $request->estimates_short;
                $estimate->estimates_description = $request->estimates_description;
                $estimate->estimates_slug = strtolower(str_replace('','-',$request->estimates_title));
                $estimate->estimates_images = $save_url;

                $estimate->updated_at = Carbon::now();
                $estimate->save();


                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 
                 return redirect()->route('estimate.page.all')->with($notification);
          }

    }//end method

    public function EstimatePageDelete($id){
         $Deleteconent = Estimate::findOrFail($id);
         $img = $Deleteconent->estimates_images;
         unlink($img);

            Service::findOrFail($id)->delete();
          $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

          return redirect()->route('esstimate.page.all')->with($notification);
    }


    public function EstimatePageShow(){
         $EstimateShow = Estimate::latest()->get();
         return view('frontend.estimate.estimate',compact('EstimateShow'));
    }//

    public function EstimatePageDetail($name){
      $name = str_replace('-', ' ', $name);
      $ShowEstimateDetaild = Service::where('estimates_title', $name)->firstOrFail();
      return view('frontend.estimate.detail',compact('ShowEstimateDetaild'));
    }

}
