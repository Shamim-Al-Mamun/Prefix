<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    public function all()
    {
        $messages_all = Messages::all();
        return view('pages.dashboard.all-messages', compact('messages_all'));
    }
}
