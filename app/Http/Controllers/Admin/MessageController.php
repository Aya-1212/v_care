<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::simplePaginate(10);
        return view('admin.pages.messages.index',compact('messages'));
    }

    public function destroy(Message $message){
         $message->delete();
         return to_route('messages.index')->with('success','Message Deleted Successfully');
    }
}
