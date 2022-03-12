<?php

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
