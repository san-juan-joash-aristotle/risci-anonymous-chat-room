<?php

// Based on Eazy2Code’s real-time chat application with Laravel and Pusher (https://www.youtube.com/watch?v=vl5CJIhy5oU&t; retrieved on March 10, 2022)

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('index');
});

Route::post('/send-message', function (Request $request) {
    event(new Message($request->input('username'), $request->input('message')));
    return ["success" => true];
});
