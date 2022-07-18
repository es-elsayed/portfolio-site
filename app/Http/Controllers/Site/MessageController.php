<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    public function __invoke(MessageRequest $request)
    {
        Message::create($request->except('_token'));
        return redirect()->route('portfolio')->with('success', "Thanks's <span class='sender'> $request->name </span>, Yout Message Sent Successfully");
    }
}
