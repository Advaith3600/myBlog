<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Auth;
use App\User;
use Hash;
use Dropbox as dbx;

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
    public function updateProfileInfo(Request $request) {
        $id = Auth::user()->id;
        $this->validate($request, [
            'name' => 'required',
            'email' => "required|email|unique:users,email,$id",
            'password' => 'confirmed'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }
        $user->bio = $request->bio;
        $user->save();

        Session::flash('success', 'User have been successfully updated');
        return redirect('home');
    }
}
