<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactController extends ApiController
{
    public function store(ContactRequest $request){
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->content = $request->content;

        $message->save();

        return $this->apiResponse([
            "data" => $message
        ],200) ;
    }
}
