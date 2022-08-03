<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }

    public function about(){
        return view('frontend.pages.about-us');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function booking(){
        return view('frontend.pages.booking');
    }

    public function message(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Booking();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();
        \Mail::send('frontend.pages.email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
               ),
               function($message) use ($request)
              {
                 $message->from($request->email);
                 $message->to('bgd.imran403@gmail.com');
              });

        return back()->with('success', 'Thank you for message us! We will reply very soon.');

    }
}
