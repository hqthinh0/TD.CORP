<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    //
     public function AboutPage(){

        $AboutPage = About::find(1);
        return view('admin.about_page.about_page_all', compact('AboutPage'));
    } // end method


     public function AboutPageAdd(Request $request){
        
        About::insert([
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        $notification = array('message' => 'Đã thêm thông tin',  'alert-type' => 'success'  ); 

        return redirect()->back()->with($notification);
    }



    public function AboutPageAll(){
        $allContent = About::all();
        return view('admin.about_page.all_about',compact('allContent'));
    }

       public function AboutPageEdit($id){

        $EditDescription = About::findOrFail($id);
        return view('admin.about_page.edit_about',compact('EditDescription'));
    }//end method


    public function AboutPageUpdate(Request $request){

        $UpdateDescription = $request->id;

      

            $description = About::findOrFail($UpdateDescription);
            $description->description = $request->description;
            $description->updated_at = Carbon::now();
            $description->save();

            $notification = array('message' => 'Đã cập nhật thông tin',  'alert-type' => 'success'  ); 

            return redirect()->route('about.page.all')->with($notification);
          

    }//end method

      public function AboutPageDelete($id){
         $Deleteconent = About::findOrFail($id);
         $content = $Deleteconent->description;
         

         About::findOrFail($id)->delete();
          $notification = array('message' => 'Đã xoá thông tin',  'alert-type' => 'success'  ); 

        return redirect()->back()->with($notification);
    }

    public function AboutCompanyPage(){
         $company = About::find(1);
         return view('frontend.company',compact('company'));
    }//
}


