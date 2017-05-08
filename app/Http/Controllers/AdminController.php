<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\News;
use Session;

class AdminController extends Controller
{
    public function index() {
        if (Auth::user()->email != "advaitharunjeena@gmail.com") {
            abort(404);
        }
        return view('admin.index');
    }
    public function news(Request $request) {
        $this->validate($request, [
            'attachment' => 'required',
            'description' => 'required|max:255'
        ]);
        $news = new News;
        $news->type = $request->type;
        $news->attachment = $request->attachment;
        $news->description = $request->description;
        $news->save();

        Session::flash('success', 'News have been successfully updated');
        return redirect()->back();
    }
}
