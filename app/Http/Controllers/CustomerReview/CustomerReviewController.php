<?php

namespace App\Http\Controllers\CustomerReview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerReview;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;

class CustomerReviewController extends Controller
{
    //

    public function CustomerReview(){
           $review = CustomerReview::latest()->get();
        // $review = CustomerReview::find(1);
        return view('admin.home_customerreview.home_customerreview_all', compact('review'));
    }

     public function UpdateCustomerReview(Request $request){
         $slide_id = $request->id;

          if($request->file('customer_img')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('customer_img')->getClientOriginalExtension();
                $img = $manager->read($request->file('customer_img'));

                $img->toJpeg()->save(base_path('public/img/customer_review/'.$name_gen));
                $save_url = "img/customer_review/".$name_gen;

              CustomerReview::insert([
                    'name' => $request->name,
                    'description' => $request->description,
                    'address' => $request->address,
                    'customer_img' => $save_url,
                     
                ]);

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->back()->with($notification);
          }
    }


     public function CustomerReviewAll(){
        $allContent = CustomerReview::all();
        return view('admin.home_customerreview.all_customerreview',compact('allContent'));
    }

      public function CustomerReviewEdit($id){

        $Editcontent = CustomerReview::findOrFail($id);

        return view('admin.home_customerreview.edit_customerreview',compact('Editcontent'));
    }//end method

    

    //cập nhât
    public function UpdateEditCustomerReview(Request $request){

        $updateImages = $request->id;

        if($request->file('customer_img')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('customer_img')->getClientOriginalExtension();
                $img = $manager->read($request->file('customer_img'));

                $img->toJpeg()->save(base_path('public/img/customer_review/'.$name_gen));
                $save_url = "img/customer_review/".$name_gen;

             $slideshow = CustomerReview::findOrFail($updateImages);
             
                $slideshow->name = $request->name;
                $slideshow->description = $request->description;
                $slideshow->address = $request->address;
                $slideshow->customer_img = $save_url;

                $slideshow->updated_at = Carbon::now();
                $slideshow->save();

                //cách 2
        //         SliderShow::findOrFail($updateImages)->forceFill([
        //     'multi_Images' => $save_url,
        //     'updated_at' => Carbon::now(),
        // ])->save();

                $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('route.CustomerReview.all')->with($notification);
          }

    }//end method


     public function CustomerReviewDelete($id){
         $Deleteconent = CustomerReview::findOrFail($id);
         $img = $Deleteconent->customer_img;
         unlink($img);

         CustomerReview::findOrFail($id)->delete();
          $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

        return redirect()->back()->with($notification);
    }
}
