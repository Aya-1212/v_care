<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return View('site.pages.contact.index');
    }

    public function store(Request $request)
    {
        //validations
        $request->validate([
            "name" => ['required', 'string', 'min:3', 'max:20'],
            "email" => ['required', 'email'],
            "subject" => ['required', 'string', 'min:10', 'max:40'],
            "content" => ['required', 'string', 'min:15', 'max:150'],
        ]);
        //   dd($request->all());
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->content = $request->content;

        $message->save();
        // dd($message);

        return redirect()->back()->with('success', 'Your message has been stored');
    }
}
