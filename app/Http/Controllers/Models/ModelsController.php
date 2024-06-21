<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Image;

class ModelsController extends Controller
{
    //

    public function ModelsPageAll(){
        $models = Models::latest()->get();
       return view('backend.modelpages.modelpages_all', compact('models'));
    }

    public function ModelsPageAdd(){
        return view('backend.modelpages.modelpages_add');

    }

     public function ModelsPageUpdate(Request $request){

           if($request->file('models_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('models_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('models_images'));
         

                $img->toJpeg()->save(base_path('public/img/Models/'.$name_gen));
                $save_url = "img/Models/".$name_gen;

              Models::insert([
                    'models_title' => $request->models_title,
                    'models_description' => $request->models_description,
                    'models_slug' => strtolower(str_replace('','-',$request->models_title)),
                    'models_images' => $save_url,
                     
                ]);

                $notification = array('message' => 'Đã thêm thành công',  'alert-type' => 'success'  ); 

                 return redirect()->route('models.page.all')->with($notification);
            }
          
    }

    public function ModelsPageEdit($id){

        $EditModels = Models::findOrFail($id);

        return view('backend.modelpages.edit_modelpages',compact('EditModels'));
    }//end method


    public function ModelsPageUpdateEdit(Request $request){

        $updateImages = $request->id;

        if($request->file('models_images')){
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('models_images')->getClientOriginalExtension();
                $img = $manager->read($request->file('models_images'));

                $img->toJpeg()->save(base_path('public/img/Models/'.$name_gen));
                $save_url = "img/Models/".$name_gen;



                $models = Models::findOrFail($updateImages);
             
                $models->models_title = $request->models_title;
                $models->models_description = $request->models_description;
                $models->models_slug = strtolower(str_replace('','-',$request->models_title));
                $models->models_images = $save_url;

                $models->updated_at = Carbon::now();
                $models->save();


                $notification = array('message' => 'Đã cập nhật thành công',  'alert-type' => 'success'  ); 
                 return redirect()->route('models.page.all')->with($notification);
          }

    }//end method

    public function ModelsPageDelete($id){
         $Deleteconent = Models::findOrFail($id);
         $img = $Deleteconent->models_images;
         unlink($img);

            Models::findOrFail($id)->delete();
          $notification = array('message' => 'Đã xoá thành công',  'alert-type' => 'success'  ); 

          return redirect()->route('models.page.all')->with($notification);
    }


    public function ModelsPageShow(){
         $models = Models::latest()->get();
         return view('frontend.models.models',compact('models'));
    }//

    public function ModelsPageDetail($name){
      $name = str_replace('-', ' ', $name);
      $ShowModelsPage = Models::where('models_title', $name)->firstOrFail();
      return view('frontend.models.detail',compact('ShowModelsPage'));
    }

}
