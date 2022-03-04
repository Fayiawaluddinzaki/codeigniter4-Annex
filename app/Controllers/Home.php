<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/chat');
        // return view('Websocket/websocket_message');
    }
}
