<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AdminController extends Controller
{
      public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array('message' => 'Bạn đã thoát thành công',  'alert-type' => 'success'  );

        return redirect('/login')->with($notification);
    } //end method


    public function Profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view',compact('adminData'));
    }

    public function EditProfile(){
           $id = Auth::user()->id;
        $editData = User::find($id);

        return view('admin.admin_profile_edit',compact('editData'));
    }//end method

     public function StoreProfile(Request $request){
           $id = Auth::user()->id;
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->username = $request->username;
            if($request -> file('profile_image')){
                $file = $request->file('profile_image');
                
                $filename = date('Ymdhi').$file->getClientOriginalName();
                $file->move(public_path('img/admin_image'),$filename);
                $data['profile_image'] = $filename;
            }

            $data->save();

            $notification = array('message' => 'Đã cập nhật thông tin cá nhân thành công',  'alert-type' => 'success'  );

            return redirect()->route('admin.profile')->with($notification);
    }//end method

    public function ChangePassword(){
        

        return view('admin.admin_change_password');
    }//

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ]);
            

          $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->newpassword);
            $user->save();

            session()->flash('message', 'Mật khẩu đã được cập nhật');
            return redirect()->back();
        } else {
            session()->flash('message', 'Mật khẩu cũ không đúng');
            return redirect()->back();
        }
    }
}

