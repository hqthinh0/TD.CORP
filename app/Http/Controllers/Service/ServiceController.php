<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Image;

class ServiceController extends Controller
{
    //
   
    public function ServicesPageAll(){
        $services = Service::latest()->get();
       return view('backend.servicepages.servicepages_all', compact('services'));
    }

    public function ServicesPageAdd(){
        return view('backend.servicepages.servicepages_add');

    }

     public function ServicesPageUpdate(Request $request){

           if($request->file('service_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('service_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('service_images'));
         

                $img->toJpeg()->save(base_path('public/img/service/'.$name_gen));
                $save_url = "img/service/".$name_gen;

              Service::insert([
                    'service_title' => $request->service_title,
                    'service_short' => $request->service_short,
                    'service_description' => $request->service_description,
                    'service_slug' => strtolower(str_replace('','-',$request->service_title)),
                    'service_images' => $save_url,
                     
                ]);

                $notification = array('message' => 'Đã xoá thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('services.page.all')->with($notification);
            }
          
    }

    public function ServicesPageEdit($id){

        $EditSerivce = Service::findOrFail($id);

        return view('backend.servicepages.edit_servicepages',compact('EditSerivce'));
    }//end method


    public function ServicesPageUpdateEdit(Request $request){

        $updateImages = $request->id;

        if($request->file('service_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('service_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('service_images'));

                $img->toJpeg()->save(base_path('public/img/service/'.$name_gen));
                $save_url = "img/service/".$name_gen;



                $services = Service::findOrFail($updateImages);
             
                $services->service_title = $request->service_title;
                $services->service_short = $request->service_short;
                $services->service_description = $request->service_description;
                $services->service_slug = strtolower(str_replace('','-',$request->service_title));
                $services->service_images = $save_url;

                $services->updated_at = Carbon::now();
                $services->save();


                $notification = array('message' => 'Đã cập nhật thành công',  'alert-type' => 'success'  ); 
                 return redirect()->route('services.page.all')->with($notification);
          }

    }//end method

    public function ServicesPageDelete($id){
         $Deleteconent = Service::findOrFail($id);
         $img = $Deleteconent->service_images;
         unlink($img);

            Service::findOrFail($id)->delete();
          $notification = array('message' => 'Đã xoá thành công',  'alert-type' => 'success'  ); 

          return redirect()->route('services.page.all')->with($notification);
    }


    public function ServicesPageShow(){
         $Services = Service::latest()->get();
         return view('frontend.services.services',compact('Services'));
    }//

    public function ServicesPageDetail($name){
      $name = str_replace('-', ' ', $name);
      $ShowServicesPage = Service::where('service_title', $name)->firstOrFail();
      return view('frontend.services.detail',compact('ShowServicesPage'));
    }


}
