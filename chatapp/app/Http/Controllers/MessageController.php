<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use Auth;

class MessageController extends Controller
{
    public function getMessage() {
    	return Message::with('user')->get();
    }

    public function saveMessage(Request $request) {
    	$message = new Message();
    	$message->message = $request->message;
    	$message->user_id = Auth::user()->id;
    	$message->save();

    	return ['status' => 'OK'];
    }
}
