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
        $notification = array('message' => 'Đã cập nhật hình ảnh slider thành công',  'alert-type' => 'success'  ); 

               return redirect()->route('contact.page.finish')->with($notification);
    }

    public function ContactPageFinish(){

        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';


        Mail::to('hqthinh0@gmail.com')->send(new WelcomeMail([
            'title' => 'The Title',
            'body' => 'The Body',
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
