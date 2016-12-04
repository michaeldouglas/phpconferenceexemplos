<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatMessage as modelChatMessage;
use App\User;
use App\Events\ChatMessage as eventChatMessage;

class ChatMessage extends Controller
{
    public function message(Request $request)
    {
        $user = \Auth::user();

        $message = modelChatMessage::create([
            'user_id' => $user->id,
            'user' => $user->name,
            'message' => $request->get('message')
        ]);

        event(new eventChatMessage($message));
    }

    public function messages()
    {
        return response()->json();
    }
}
