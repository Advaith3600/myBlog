<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use Auth;
use App\Events\ChatPosted;

class ChatController extends Controller
{
    public function index() {
        return view('chat.index');
    }
    public function messages() {
        return Chat::with('user')->get()->sortBy('id');
    }
    public function postMessages(Request $request) {
        $user = Auth::user();
        $chat = $user->messages()->create(['message' => $request->message]);

        broadcast(new ChatPosted($chat, $user))->toOthers();

        return ['status' => 'OK!'];
    }
}
