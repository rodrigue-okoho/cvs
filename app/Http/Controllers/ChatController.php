<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class ChatController extends Controller
{
    public function getMessages(Request $request) {

        $sender_id = $request->get("sender_id");
        $receiver_id = $request->get("receiver_id");

        $messages = Chat::query()->where('sender_id','=', $sender_id)
                ->where('receiver_id','=', $receiver_id)
        ->orderBy('created_at', 'asc')
       // ->take(20)
        ->get();
        logger($messages);

        return response()->json($messages);
    }

    public function sendMessage(Request $request) {

        $sender_id = $request->get("sender_id");
        $receiver_id = $request->get("receiver_id");

        $request->validate([
            'message' => 'required|string'
        ]);

        $message = Chat::create([
            'message' => $request->input('message'),
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id
        ]);

        Event::dispatch(new MessageSent($message,'chat'));

        return response()->json(['message' => $message]);
    }
}
