<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return View('site.pages.contact.index');
    }

    public function store(ContactRequest $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->content = $request->content;

        $message->save();

        return redirect()->back()->with('success', 'Your message has been stored');
    }
}
