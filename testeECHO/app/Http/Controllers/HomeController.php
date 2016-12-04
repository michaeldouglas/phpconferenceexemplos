<?php

namespace App\Http\Controllers;

use App\Events\TaskCreated;
use Illuminate\Http\Request;
use App\ChatMessage as modelChatMessage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tasks(){
        $task = ['id' => 1, 'name' => 'michael'];

        event(new TaskCreated($task));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = modelChatMessage::select('message', 'user as username')->get();
        return view('home')->with('messages', $messages);
    }
}
