<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;

class PartnerController extends Controller
{
    //
    public function Partner(){
        return view('admin.home_partner.home_partner');
    }

    public function PartnerAddNew(Request $request){

        $image = $request->file('partners_Images');

        foreach($image as $partners_Images){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$partners_Images->getClientOriginalExtension();
            $img = $manager->read($partners_Images);
            $img->toJpeg()->save(base_path('public/img/partner/'.$name_gen));
            $save_url = "img/partner/".$name_gen;
            partner::insert([
                'partners_Images' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        } // end foreach

            $notification = array('message' => 'Đã thêm thành công',  'alert-type' => 'success'  ); 

                return redirect()->back()->with($notification);
       
    }

    public function PartnerAll(){
        $allImages = partner::all();
        return view('admin.home_partner.all_partner',compact('allImages'));
    }


    public function PartnerEdit($id){

        $EditImages = partner::findOrFail($id);
        return view('admin.home_partner.edit_partner',compact('EditImages'));
    }//end method


    public function PartnerUpdate(Request $request){

        $updateImages = $request->id;

        if($request->file('partners_Images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('partners_Images')->getClientOriginalExtension();
                $img = $manager->read($request->file('partners_Images'));

                $img->toJpeg()->save(base_path('public/img/partner/'.$name_gen));
                $save_url = "img/partner/".$name_gen;

             $slideshow = partner::findOrFail($updateImages);
                $slideshow->partners_Images = $save_url;
                $slideshow->updated_at = Carbon::now();
                $slideshow->save();

                //cách 2
        //         SliderShow::findOrFail($updateImages)->forceFill([
        //     'multi_Images' => $save_url,
        //     'updated_at' => Carbon::now(),
        // ])->save();

                $notification = array('message' => 'Đã cập nhật thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('partner.route.all')->with($notification);
          }

    }//end method

    public function PartnerDelete($id){
         $DeleteImages = partner::findOrFail($id);
         $img = $DeleteImages->partners_Images;
         unlink($img);

         partner::findOrFail($id)->delete();
          $notification = array('message' => 'Đã xoá thành công',  'alert-type' => 'success'  ); 

        return redirect()->back()->with($notification);
    }
}





