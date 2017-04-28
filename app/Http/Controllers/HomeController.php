<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getContact_us() {
        return view('contact_us.index');
    }
    public function postContact_us(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required|min:10'
        ]);

        Mail::send('contact_us.mail', $request->all(), function($message) use ($request) {
            $message->from($request->email);
            $message->to("advaitharunjeena@gmail.com");
            $message->subject("FeedBack about Website");
        });

        Session::flash('success', 'Email was successfully send!');
        return redirect('contact_us');
    }
}
