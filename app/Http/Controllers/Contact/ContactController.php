<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

 
    //
    public function ContactPageView(){
          return view('frontend.contact.contact');
      //  return view('frontend.contact.contact');
    }

    public function ContactPageMesss(Request $request){


           Contact::insert([
                    'subject' => $request->subject,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'message' => $request->message,
                    'created_at' => Carbon::now(),
                    
                ]);
        $notification = array('message' => 'Đã thêm thành công',  'alert-type' => 'success'  ); 

               return redirect()->route('contact.page.finish')->with($notification);
    }

    public function ContactPageFinish(){

        $title = 'TD.CORD thông báo';
        $body = 'Cảm ơn bạn rất nhiều vì đã liên hệ với chúng tôi. Chúng tôi sẽ liên hệ với bạn ngay khi chúng tôi xác nhận thông tin chi tiết. Nếu bạn vội, chúng tôi cũng nhận tư vấn qua điện thoại. Xin vui lòng liên hệ với chúng tôi theo số 052-757-3255.';


        Mail::to('hqthinh0@gmail.com')->send(new WelcomeMail([
            'title' =>  $title,
            'body' =>  $body,
        ]));
        // Mail::to('hqthinh0@gmail.com')->send(new ($title, $body));
          return view('frontend.contact.finish');
      //  return view('frontend.contact.contact');
    }

     public function ContactPageReviewAll(){
        $contact_Email = Contact::all();
        return view('admin.contact.all_contact',compact('contact_Email'));
    }

}
