<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Message;

use App\Http\Requests;

class ApiController extends Controller
{
    public function subscribe(SubscribeRequest $request)
    {
        Message::create($request->only(['topic', 'body']));

        return response()->json([
            'result' => true
        ]);
    }
}
